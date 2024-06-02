<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Degree;
use App\Services\Backend\DegreeService;
use App\Http\Requests\Backend\StoreDegreeRequest;
use App\Http\Requests\Backend\UpdateDegreeRequest;

class DegreeController extends Controller
{
    public function __construct(protected DegreeService $service)
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $n['data'] = Degree::orderBy('serial', 'desc')
                                ->paginate(10);
        $n['count'] = Degree::all();
        return view('backend.pages.setup.degree.index', $n);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $n['serial'] = Degree::count()+1;
        return view('backend.pages.setup.degree.create', $n);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDegreeRequest $request)
    {
        $data = $request->validated();
        $status = $this->service->store($data);

        //Redirection decission
        if($request->redirect == 'back'){
            $redirect_route = 'setup.degree.index';
        }else{
            $redirect_route = 'setup.degree.create';
        }

        if(!$status){
            return redirect()->route($redirect_route)->with('error', "Something went wrong");
        }
        return redirect()->route($redirect_route)->with('success', "$request->title is created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Degree $Degree)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Degree $Degree)
    {
        $n['datum'] = $Degree;
        return view('backend.pages.setup.degree.edit', $n);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDegreeRequest $request, Degree $Degree)
    {
        $data = $request->validated();
        $this->service->update($Degree,$data);

        return redirect()->route('setup.degree.index')->with('success', "$request->title is Update successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Degree $Degree)
    {
        $title = $Degree->title;
        $status = $this->service->delete($Degree);

        if ($status) {
            request()->session()->flash('success', "$title successfully deleted");
        } else {
            request()->session()->flash('error', 'Error while deleting Degrees');
        }

        return back();
    }
}
