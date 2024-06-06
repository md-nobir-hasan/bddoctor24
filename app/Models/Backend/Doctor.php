<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'designation_id', 'category_id', 'gendar', 'experience', 'degree_id', 'consultant_type_id', 'chamber_id', 'district_id', 'other_info', 'status', 'serial'];

    public function Designation()
    {
        return $this->belongsTo(Designation::class);
    }
    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
    public function Degree()
    {
        return $this->belongsTo(Degree::class);
    }
    public function ConsultantType()
    {
        return $this->belongsTo(ConsultantType::class);
    }
    public function Chamber()
    {
        return $this->belongsTo(Chamber::class);
    }
    public function District()
    {
        return $this->belongsTo(District::class);
    }
}
