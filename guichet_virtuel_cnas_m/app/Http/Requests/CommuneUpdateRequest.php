<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommuneUpdateRequest extends FormRequest
{
     public function rules()
     {
         return [
             'name' => 'required|min:4|',
             'code' => 'required|min:2|'
         ];
     }
}
