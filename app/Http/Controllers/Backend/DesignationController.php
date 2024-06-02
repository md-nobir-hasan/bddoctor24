<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Designation;
use App\Services\Backend\DesignationService;
use App\Http\Requests\Backend\StoreDesignationRequest;
use App\Http\Requests\Backend\UpdateDesignationRequest;

class DesignationController extends Controller
{
    public function __construct(protected DesignationService $service)
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $n['data'] = Designation::orderBy('serial', 'desc')
                                ->paginate(10);
        $n['count'] = Designation::all();
        return view('backend.pages.setup.designation.index', $n);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $n['serial'] = Designation::count()+1;
        return view('backend.pages.setup.designation.create', $n);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDesignationRequest $request)
    {
        $data = $request->validated();
        $status = $this->service->store($data);

        //Redirection decission
        if($request->redirect == 'back'){
            $redirect_route = 'setup.designation.index';
        }else{
            $redirect_route = 'setup.designation.create';
        }

        if(!$status){
            return redirect()->route($redirect_route)->with('error', "Something went wrong");
        }
        return redirect()->route($redirect_route)->with('success', "$request->title is created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Designation $Designation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Designation $Designation)
    {
        $n['datum'] = $Designation;
        return view('backend.pages.setup.designation.edit', $n);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDesignationRequest $request, Designation $Designation)
    {
        $data = $request->validated();
        $this->service->update($Designation,$data);

        return redirect()->route('setup.designation.index')->with('success', "$request->title is Update successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Designation $Designation)
    {
        $title = $Designation->title;
        $status = $this->service->delete($Designation);

        if ($status) {
            request()->session()->flash('success', "$title successfully deleted");
        } else {
            request()->session()->flash('error', 'Error while deleting Designations');
        }

        return back();
    }
}
