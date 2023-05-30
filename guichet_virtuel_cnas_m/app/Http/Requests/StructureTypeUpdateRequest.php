<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StructureTypeUpdateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => "min:4|required|alpha"
        ];
    }
}
