<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Chamber;
use App\Services\Backend\ChamberService;
use App\Http\Requests\Backend\StoreChamberRequest;
use App\Http\Requests\Backend\UpdateChamberRequest;

class ChamberController extends Controller
{
    public function __construct(protected ChamberService $service)
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $n['data'] = Chamber::orderBy('serial', 'desc')
                                ->paginate(10);
        $n['count'] = Chamber::all();
        return view('backend.pages.setup.chamber.index', $n);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $n['serial'] = Chamber::count();
        return view('backend.pages.setup.chamber.create', $n);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreChamberRequest $request)
    {
        $data = $request->validated();
        $status = $this->service->store($data);

        //Redirection decission
        if($request->redirect == 'back'){
            $redirect_route = 'setup.chamber.index';
        }else{
            $redirect_route = 'setup.chamber.create';
        }

        if(!$status){
            return redirect()->route($redirect_route)->with('error', "Something went wrong");
        }
        return redirect()->route($redirect_route)->with('success', "$request->title is created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Chamber $Chamber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chamber $Chamber)
    {
        $n['datum'] = $Chamber;
        return view('backend.pages.setup.chamber.edit', $n);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateChamberRequest $request, Chamber $Chamber)
    {
        $data = $request->validated();
        $this->service->update($Chamber,$data);

        return redirect()->route('setup.chamber.index')->with('success', "$request->title is Update successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chamber $Chamber)
    {
        $title = $Chamber->title;
        $status = $this->service->delete($Chamber);

        if ($status) {
            request()->session()->flash('success', "$title successfully deleted");
        } else {
            request()->session()->flash('error', 'Error while deleting Chambers');
        }

        return back();
    }
}
