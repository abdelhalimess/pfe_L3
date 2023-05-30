<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StructureTypeStoreRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'min:4|alpha|required|unique:structure_types',
        ];
    }

}
