<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClientRequest extends FormRequest
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
            //
            'name'=>'string|required|max:255',
            'cedula'=>'string|required|unique:clients,cedula,'.
            $this->route('client')->id.'|max:8',
            'rif'=>'string|required|unique:clients,rif,'.
            $this->route('client')->id.'|max:11',
            'address'=>'string|required|max:255',
            'phone'=>'string|required|unique:clients,address,'.
            $this->route('client')->id.'|max:9',
            'email'=>'string|required|unique:clients,email,'.
            $this->route('client')->id.'|max:255|email:rfc,dns',

        ];
    }
    public function messages(){
        return [
            'name.required'=>'Este campo es requerido',
            'name.string'=>'El valor no es correcto',
            'name.max'=>'Solo se permite 255 caracteres',

            'cedula.required'=>'Este campo es requerido',
            'cedula.string'=>'El valor no es correcto',
            'cedula.max'=>'Solo se permite 8 caracteres',
            'cedula.min'=>'Se requiere 8 caracteres',
            'cedula.unique'=>'Esta cedula ya se encuentra registrada',

            'rif.required'=>'Este campo es requerido',
            'rif.string'=>'El valor no es correcto',
            'rif.max'=>'Solo se permite 11 caracteres',
            'rif.unique'=>'Estea RIF ya se encuentra registrada',


            'address.required'=>'Este campo es requerido',
            'address.max'=>'Solo se permite 11 caracteres',

            'phone.required'=>'Este campo es requerido',
            'phone.string'=>'El valor no es correcto',
            'phone.max'=>'Solo se permite 9 caracteres',
            'phone.min'=>'Se requiere 9 caracteres',
            'phone.unique'=>'Este telefono ya se encuentra registrada',


            'email.string'=>'El valor no es correcto',
            'email.max'=>'Solo se permite 255 caracteres',
            'email.email'=>'No es un correo electronico',
            'email.unique'=>'La direccion de correo electronico ya se encuentra registrada',


        ];
    }
}
