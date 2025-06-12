<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'email' => 'required|email|max:100',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string|min:10|max:1000'
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'Nama depan wajib diisi.',
            'first_name.max' => 'Nama depan maksimal 50 karakter.',
            'last_name.required' => 'Nama belakang wajib diisi.',
            'last_name.max' => 'Nama belakang maksimal 50 karakter.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.max' => 'Email maksimal 100 karakter.',
            'phone.max' => 'Nomor telepon maksimal 20 karakter.',
            'message.required' => 'Pesan wajib diisi.',
            'message.min' => 'Pesan minimal 10 karakter.',
            'message.max' => 'Pesan maksimal 1000 karakter.'
        ];
    }
}
