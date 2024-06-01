<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\ConsultantType;
use App\Services\Backend\ConsultantTypeService;
use App\Http\Requests\Backend\StoreConsultantTypeRequest;
use App\Http\Requests\Backend\UpdateConsultantTypeRequest;

class ConsultantTypeController extends Controller
{
    public function __construct(protected ConsultantTypeService $service)
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $n['data'] = ConsultantType::orderBy('serial', 'desc')
                                ->paginate(10);
        $n['count'] = ConsultantType::all();
        return view('backend.pages.setup.consultant-type.index', $n);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $n['serial'] = ConsultantType::count();
        return view('backend.pages.setup.consultant-type.create', $n);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreConsultantTypeRequest $request)
    {
        $data = $request->validated();
        $status = $this->service->store($data);

        //Redirection decission
        if($request->redirect == 'back'){
            $redirect_route = 'setup.consultant-type.index';
        }else{
            $redirect_route = 'setup.consultant-type.create';
        }

        if(!$status){
            return redirect()->route($redirect_route)->with('error', "Something went wrong");
        }
        return redirect()->route($redirect_route)->with('success', "$request->title is created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(ConsultantType $ConsultantType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ConsultantType $ConsultantType)
    {
        $n['datum'] = $ConsultantType;
        return view('backend.pages.setup.consultant-type.edit', $n);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateConsultantTypeRequest $request, ConsultantType $ConsultantType)
    {
        $data = $request->validated();
        $this->service->update($ConsultantType,$data);

        return redirect()->route('setup.consultant-type.index')->with('success', "$request->title is Update successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ConsultantType $ConsultantType)
    {
        $title = $ConsultantType->title;
        $status = $this->service->delete($ConsultantType);

        if ($status) {
            request()->session()->flash('success', "$title successfully deleted");
        } else {
            request()->session()->flash('error', 'Error while deleting ConsultantTypes');
        }

        return back();
    }
}
