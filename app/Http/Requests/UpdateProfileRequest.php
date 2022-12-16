<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
            'name'     => 'required|regex:/^[\pL\s\-]+$/u',
            'telphone' => ['required', 'regex:/^(\+62|62|0)8[1-9][0-9]{6,9}$/', 'min:11'],
            'avatar'   => 'image|mimes:jpeg,jpg,png,gif|max:3072',
        ];
    }

    public function messages()
    {
        return [
            'name.required'     => 'Kolom nama lengkap wajib diisi.',
            'name.regex'        => 'Format nama lengkap hanya boleh huruf.',
            'telphone.required' => 'Kolom nomor handphone wajib diisi.',
            'telphone.regex'    => 'Format nomor handphone salah.',
            'telphone.min'      => 'Minimal nomor handphone 11 digit.',
            'avatar.image'      => 'Profil avatar wajib foto/gambar',
            'avatar.mimes'      => 'Profil avatar wajib JPG, PNG & GIF',
            'avatar.max'        => 'Maksimal upload avatar 3MB',
        ];
    }
}
