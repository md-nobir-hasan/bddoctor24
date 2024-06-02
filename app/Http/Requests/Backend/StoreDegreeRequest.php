<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class StoreDegreeRequest extends FormRequest
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
            'title'=> ['required','string','max:255','unique:degrees,title'],
            'status' => ['nullable','in:Active,Inactive'],
            'other_info'=> ['nullable'],
			'is_special'=> ['required'],
            'serial' => ['nullable','integer'],

        ];
    }
}
