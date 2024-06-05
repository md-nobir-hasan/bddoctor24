<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DoctorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'title' => $this->title,
            'designation_id'=>$this->gendar,
            'category_id'=>$this->gendar,
            'gendar'=>$this->gendar,
            'experience'=>$this->experience,
            'degree_id'=>$this->gendar,
            'consultant_type_id'=>$this->gendar,
            'chamber_id'=>$this->gendar,
            'district_id'=>$this->gendar,
            'other_info'=>$this->other_info,
            'serial' => $this->serial,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
