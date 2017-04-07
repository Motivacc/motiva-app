<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ApplicationFromRequest extends Request
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
            'workbefore' => 'required',
            'payrange'   => 'required',
            'desireposition' => 'required',
            'name' => 'required',
            'psourname' => 'required',
            'msourname' => 'required',
            'dob' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'state' => 'required',
            'city' => 'required',
            'street' => 'required',
            'streetnumber' => 'required',
            'zipcode' => 'required',
            'mobilephone' => 'required',
            'emergencyphone' => 'required',
            'relationphoneEmergency' => 'required',


        ];
    }
}
