<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = ['title','designation_id','category_id','gendar','experience','degree_id','consultant_type_id','chamber_id','other_info','status', 'district_id'];

    public function district(){
        return $this->belongsTo(District::class);
    }
    public function designation(){
        return $this->belongsTo(Designation::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function degree(){
        return $this->belongsTo(Degree::class);
    }
    public function consultant_type(){
        return $this->belongsTo(ConsultantType::class);
    }
    public function chamber(){
        return $this->belongsTo(Chamber::class);
    }
}
