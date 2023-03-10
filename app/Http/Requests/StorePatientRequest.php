<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePatientRequest extends FormRequest
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
            'pet_name'=>'required',
            'powrent'=>'required',
            'breed'=>'required',
            'gender'=>'required',
            'date_of_birth'=>'required',
            'contact_phone'=>'required',
            'address'=>'required',
            'status'=>'required'
        ];
    }
}
