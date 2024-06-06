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
            'designations'=>DesignationResource::collection($this->Designation),
            'categories'=>new CategoryResource($this->Category),
            'gendar'=>$this->gendar,
            'experience'=>$this->experience,
            'degrees'=>new DegreeResource($this->Degree),
            'consultant_types'=>new ConsultantTypeResource($this->ConsultantType),
            'chamber'=>new ChamberResource($this->Chamber),
            'district'=>new DistrictResource($this->District),
            'other_info'=>$this->other_info,
            'serial' => $this->serial,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
