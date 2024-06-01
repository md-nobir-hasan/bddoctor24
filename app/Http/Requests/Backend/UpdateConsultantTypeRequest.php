<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class UpdateConsultantTypeRequest extends FormRequest
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
            'title'=> ['required','string','max:255',"unique:consultant_types,title,{$this->consultant_type->id}"],
            'other_info'=> ['nullable'],
            'status' => ['nullable','in:Active,Inactive'],
            'serial' => ['nullable','integer'],

        ];
    }
}
