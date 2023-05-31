<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StructureStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'min:4|required|alpha|unique:structures',
            'state_id' => 'required|integer',
            'structure_type_id' => 'required|integer',
            'address' => 'required|min:10|max:100',
        ];
    }

    public function messages()
{
    return [
        'name.required' => 'The name field is required.',
        'name.string' => 'The name field must be a string.',
        'state_id.required' => 'The state ID field is required.',
        'state_id.integer' => 'The state ID field must be an integer.',
        'structure_type_id.required' => 'The structure type ID field is required.',
        'structure_type_id.integer' => 'The structure type ID field must be an integer.',
        'address.required' => 'The structure address field is required.',
    ];
}
}
