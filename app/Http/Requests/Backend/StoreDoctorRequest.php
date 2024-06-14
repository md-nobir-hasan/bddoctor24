<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class StoreDoctorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=> ['required','string','max:255','unique:doctors,title'],
            'img'=> ['nullable','string','max:500'],
            'status' => ['nullable','in:Active,Inactive'],
            'designation_id'=> ['nullable'],
			'category_id'=> ['required'],
			'gendar'=> ['nullable'],
			'experience'=> ['nullable'],
			'degree_id'=> ['nullable'],
			'consultant_type_id'=> ['nullable'],
			'chamber_id'=> ['required'],
			'district_id'=> ['nullable'],
			'other_info'=> ['nullable'],
            'serial' => ['nullable','integer'],

        ];
    }
}
