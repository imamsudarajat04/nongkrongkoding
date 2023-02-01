<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        if(in_array($this->method(), ['PUT', 'PATCH'])) {
            $rules = [
                'name'       => 'required|regex:/^[\pL\s\-]+$/u',
                'permission' => 'required',
            ];
        }
        else
        {
            $rules = [
                'name'       => 'required|regex:/^[\pL\s\-]+$/u|unique:roles,name',
                'permission' => 'required',
            ];
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'name.required'       => 'Jabatan tidak boleh kosong',
            'name.regex'          => 'Jabatan hanya boleh berisi Huruf',
            'permission.required' => 'Hak Akses tidak boleh kosong',
        ];
    }
}
