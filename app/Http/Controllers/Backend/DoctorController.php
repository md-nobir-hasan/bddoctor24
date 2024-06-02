<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Doctor;
use App\Services\Backend\DoctorService;
use App\Http\Requests\Backend\StoreDoctorRequest;
use App\Http\Requests\Backend\UpdateDoctorRequest;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    public function __construct(protected DoctorService $service)
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $n['data'] = Doctor::orderBy('serial', 'desc')
                                ->paginate(10);
        $n['count'] = Doctor::all();
        return view('backend.pages.doctor.index', $n);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $n['Designation'] = DB::table('designations')->where('status','Active')->orderBy('serial','desc')->get();
        $n['Category'] = DB::table('categories')->where('status','Active')->orderBy('serial','desc')->get();
        $n['Degree'] = DB::table('degrees')->where('status','Active')->orderBy('serial','desc')->get();
        $n['ConsultantType'] = DB::table('consultant_types')->where('status','Active')->orderBy('serial','desc')->get();
        $n['Chamber'] = DB::table('chambers')->where('status','Active')->orderBy('serial','desc')->get();
        $n['District'] = DB::table('districts')->where('status','Active')->orderBy('serial','desc')->get();
        $n['serial'] = Doctor::count()+1;
        return view('backend.pages.doctor.create', $n);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDoctorRequest $request)
    {
        $data = $request->validated();
        $status = $this->service->store($data);

        //Redirection decission
        if($request->redirect == 'back'){
            $redirect_route = 'doctor.index';
        }else{
            $redirect_route = 'doctor.create';
        }

        if(!$status){
            return redirect()->route($redirect_route)->with('error', "Something went wrong");
        }
        return redirect()->route($redirect_route)->with('success', "$request->title is created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $Doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $Doctor)
    {
        $n['datum'] = $Doctor;
        return view('backend.pages.doctor.edit', $n);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDoctorRequest $request, Doctor $Doctor)
    {
        $data = $request->validated();
        $this->service->update($Doctor,$data);

        return redirect()->route('doctor.index')->with('success', "$request->title is Update successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $Doctor)
    {
        $title = $Doctor->title;
        $status = $this->service->delete($Doctor);

        if ($status) {
            request()->session()->flash('success', "$title successfully deleted");
        } else {
            request()->session()->flash('error', 'Error while deleting Doctors');
        }

        return back();
    }
}
