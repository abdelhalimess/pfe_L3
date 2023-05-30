<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StateUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|min:4|',
            'code' => 'required|min:2|'
        ];
    }
}
