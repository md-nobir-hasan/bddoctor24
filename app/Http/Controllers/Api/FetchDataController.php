<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\DoctorSearchRequest;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\ChamberResource;
use App\Http\Resources\ConsultantTypeResource;
use App\Http\Resources\DegreeResource;
use App\Http\Resources\DesignationResource;
use App\Http\Resources\DistrictCollection;
use App\Http\Resources\DoctorCollection;
use App\Models\Backend\Category;
use App\Models\Backend\Chamber;
use App\Models\Backend\ConsultantType;
use App\Models\Backend\Degree;
use App\Models\Backend\Designation;
use App\Models\Backend\District;
use App\Models\Backend\Doctor;
use Illuminate\Http\Request;

class FetchDataController extends Controller
{
   public function district(){
        return new DistrictCollection(District::where('status','Active')->get());
    }
   public function category(){
        return CategoryResource::collection(Category::where('status','Active')->get());
    }
   public function chamber(){
        return ChamberResource::collection(Chamber::where('status','Active')->get());
    }
   public function consultantType(){
        return ConsultantTypeResource::collection(ConsultantType::where('status','Active')->get());
    }
   public function degree(){
        return DegreeResource::collection(Degree::where('status','Active')->get());
    }
   public function designation(){
        return DesignationResource::collection(Designation::where('status','Active')->get());
    }
   public function doctor(){
        return new DoctorCollection(Doctor::where('status','Active')->get());
    }
   public function DoctorSearch(DoctorSearchRequest $request){
       $data = $request->validated();
       $category = Category::where('status','Active')->where('title',$data['category'])->first();
       $doctors = Doctor::serachByTitleOrNothing($data['name'])
       // ->where('category_id',$category->id)
       ->get();
    //    dd($data,$category,$doctors);
        return new DoctorCollection($doctors);
    }
}
