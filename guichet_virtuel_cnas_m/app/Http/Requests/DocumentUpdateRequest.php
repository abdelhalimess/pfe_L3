<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocumentUpdateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|min:4',

        ];
    }
}
