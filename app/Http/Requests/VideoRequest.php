<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class VideoRequest extends FormRequest
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
            'name'              => 'required|',
            'image'             => 'required|',
            'thumbnail'         => 'required|',
            'description'       => 'required|',
            'linkYoutube'       => 'required|',
            'categoryvideo_id'  => 'required|',
            'price'             => 'required|'
        ];
    }

    public function messages()
    {
        return [
            'name.required'     => 'Kolom nama video wajib diisi.',
        ];
    }
}
