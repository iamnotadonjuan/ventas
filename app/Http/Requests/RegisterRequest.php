<?php

namespace Ventas\Http\Requests;

use Ventas\Http\Requests\Request;

class RegisterRequest extends Request
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
     * @return array
     */
    public function rules()
    {
        return [
              'Name' => 'required|min:3|max:50',
              'Email' => 'required|email|unique:usuarios,usua_emai',
              'Password' => 'required',
              'Address' => 'required|min:5|max:60',
              'Phone' => 'required|min:7|max:20'
        ];
    }
}
