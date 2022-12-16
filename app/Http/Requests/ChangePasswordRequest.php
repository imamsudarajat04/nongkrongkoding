<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
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
        return [
            'oldPassword'     => 'required',
            'password'        => ['required', 'regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/', 'same:confirmPassword'],
            'confirmPassword' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'oldPassword.required'     => 'Kolom Password Lama wajib diisi.',
            'password.required'        => 'Kolom Password Baru wajib di isi',
            'password.regex'           => 'Format Password Tidak sesuai',
            'password.same'            => 'Password Baru dan Konfirmasi Password tidak sesuai',
            'confirmPassword.required' => 'Konfirmasi Password Tidak boleh kosong',
        ];
    }
}
