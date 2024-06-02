<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class StoreChamberRequest extends FormRequest
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
            'title'=> ['required','string','max:255','unique:chambers,title'],
            'status' => ['nullable','in:Active,Inactive'],
            'location'=> ['nullable'],
			'other_info'=> ['nullable'],
			'map_link'=> ['nullable'],
			'website_link'=> ['nullable'],
            'serial' => ['nullable','integer'],

        ];
    }
}
