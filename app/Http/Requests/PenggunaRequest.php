<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class PenggunaRequest extends FormRequest
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
        // dd(Auth::user());
        if(in_array($this->method(), ['PUT','PATCH'])) {
            $rules = [
                'name'            => 'required|regex:/^[\pL\s\-]+$/u',
                'email'           => 'email|unique:users,email,'.Auth::user()->id,
                // 'password'        => ['regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/', 'same:confirmPassword'],
                'password'        => ['same:confirmPassword'],
                'telphone'        => ['required', 'regex:/^(^\+62|62|^08)(\d{3,4}-?){2}\d{3,4}$/', 'min:11'],
                'avatar'          => 'file|mimes:png,jpg,jpeg|max:5120',
                'roles'           => 'required',
            ];
        }
        else
        {
            $rules = [
                'name'            => 'required|regex:/^[\pL\s\-]+$/u',
                'email'           => 'required|email|unique:users,email',
                'password'        => ['regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/', 'same:confirmPassword'],
                'confirmPassword' => 'required',
                'telphone'        => ['required', 'regex:/^(^\+62|62|^08)(\d{3,4}-?){2}\d{3,4}$/', 'min:11'],
                'avatar'          => 'required|file|mimes:png,jpg,jpeg|max:5120',
                'roles'           => 'required',
            ];
        }

        return $rules;
    }

    public function messages() {
        return [
            'name.required'            => 'Nama Lengkap tidak boleh kosong',
            'name.regex'               => 'Nama Lengkap hanya boleh berisi Huruf',
            'email.required'           => 'Email tidak boleh kosong',
            'email.unique'             => 'Email sudah digunakan oleh pengguna lain',
            'password.required'        => 'Password tidak boleh kosong',
            'password.regex'           => 'Password Format Password Tidak sesuai (Contoh: Ayam123!)',
            'password.same'            => 'Konfirmasi Password tidak sama',
            'confirmPassword.required' => 'Konfirmasi Password tidak boleh kosong',
            'telphone.required'        => 'Nomor Handphone tidak boleh kosong',
            'telphone.regex'           => 'Format Nomor Handphone 812-3123-232',
            'avatar.required'          => 'Avatar/Profile tidak boleh kosong',
            'avatar.file'              => 'Avatar harus berupa file',
            'avatar.mimes'             => 'Avatar harus berformat png, jpg, jpeg',
            'avatar.max'               => 'Ukuran file avatar harus 5MB',
            'roles.required'           => 'Jabatan tidak boleh kosong',
        ];
    }
}
