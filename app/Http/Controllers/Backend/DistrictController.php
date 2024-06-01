<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\District;
use App\Services\Backend\DistrictService;
use App\Http\Requests\Backend\StoreDistrictRequest;
use App\Http\Requests\Backend\UpdateDistrictRequest;

class DistrictController extends Controller
{
    public function __construct(protected DistrictService $service)
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $n['data'] = District::orderBy('serial', 'desc')
                                ->paginate(10);
        $n['count'] = District::all();
        return view('backend.pages.setup.district.index', $n);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $n['serial'] = District::count();
        return view('backend.pages.setup.district.create', $n);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDistrictRequest $request)
    {
        $data = $request->validated();
        $status = $this->service->store($data);

        //Redirection decission
        if($request->redirect == 'back'){
            $redirect_route = 'setup.district.index';
        }else{
            $redirect_route = 'setup.district.create';
        }

        if(!$status){
            return redirect()->route($redirect_route)->with('error', "Something went wrong");
        }
        return redirect()->route($redirect_route)->with('success', "$request->title is created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(District $District)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(District $District)
    {
        $n['datum'] = $District;
        return view('backend.pages.setup.district.edit', $n);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDistrictRequest $request, District $District)
    {
        $data = $request->validated();
        $this->service->update($District,$data);

        return redirect()->route('setup.district.index')->with('success', "$request->title is Update successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(District $District)
    {
        $title = $District->title;
        $status = $this->service->delete($District);

        if ($status) {
            request()->session()->flash('success', "$title successfully deleted");
        } else {
            request()->session()->flash('error', 'Error while deleting Districts');
        }

        return back();
    }
}
