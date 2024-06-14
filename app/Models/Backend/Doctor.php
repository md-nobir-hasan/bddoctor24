<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = ['title','img', 'designation_id', 'category_id', 'gendar', 'experience', 'degree_id', 'consultant_type_id', 'chamber_id', 'district_id', 'other_info', 'status', 'serial'];

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

    static protected function serachByTitleOrNothing($search_text = null)
    {
        $searching_doctors = self::where('status', 'Active');

        if ($search_text) {
            $remove_white_space = Str::of($search_text)->squish();
            $searching_words =  explode(' ', $remove_white_space);
            foreach ($searching_words as $word) {
                $searching_doctors->where('title', 'like', "%$word%");
            }
            return $searching_doctors;
        }
        return $searching_doctors;
    }
}
