<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HardwareFormRequest extends FormRequest
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
            'ID'=>'required',
            'DEVICEID'=>'required|max:50',
            'NAME'=>'required|max:100',
            'WORKGROUP'=>'required|max:50',
            'OSNAME'=>'max:100'
            
        ];
    }
}
