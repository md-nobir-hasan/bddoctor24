<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class StoreDesignationRequest extends FormRequest
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
            'title'=> ['required','string','max:255','unique:designations,title'],
            'status' => ['nullable','in:Active,Inactive'],
            'inistitute_name'=> ['nullable'],
			'other_info'=> ['nullable'],
			'url'=> ['nullable'],
            'serial' => ['nullable','integer'],

        ];
    }
}
