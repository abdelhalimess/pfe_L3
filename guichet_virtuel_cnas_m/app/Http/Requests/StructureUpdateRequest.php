<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StructureUpdateRequest extends FormRequest
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
            'name' => 'required|min:4|',
            'state_id' => 'numeric|required',
            'structure_type_id' => 'numeric|required',
        ];
    }

    public function messages()
{
    return [
        'name.required' => 'The name field is required.',
        'state_id.numeric' => 'The state ID must be numeric.',
        'state_id.required' => 'The state ID is required.',
        'structure_type_id.numeric' => 'The structure type ID must be numeric.',
        'structure_type_id.required' => 'The structure type ID is required.',
    ];
}
}
