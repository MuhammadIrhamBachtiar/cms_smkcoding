<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Tentukan apakah pengguna diizinkan untuk membuat permintaan ini.
     */
    public function authorize(): bool
    {
        return true; // Pastikan ini true agar request bisa diakses oleh siapa saja
    }

    /**
     * Aturan validasi yang berlaku untuk permintaan ini.
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:3|max:255', // Pastikan name adalah string dan minimal 3 karakter
            'email' => 'required|email|unique:users,email,' . $this->user, // Memastikan email unik, kecuali untuk user yang sedang diedit
            'password' => 'required|string|min:8|confirmed', // Password minimal 8 karakter dan konfirmasi password
            'password_confirmation' => 'required|string|min:8', // Konfirmasi password harus diisi dan memiliki panjang yang sama
        ];
    }

    /**
     * Pesan validasi kustom (optional).
     */
    public function messages()
    {
        return [
            'name.required' => 'Nama wajib diisi.',
            'name.min' => 'Nama harus memiliki minimal 3 karakter.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah digunakan oleh pengguna lain.',
            'password.required' => 'Password wajib diisi.',
            'password.min' => 'Password harus memiliki minimal 8 karakter.',
            'password.confirmed' => 'Password dan konfirmasi password tidak cocok.',
            'password_confirmation.required' => 'Konfirmasi password wajib diisi.',
            'password_confirmation.min' => 'Konfirmasi password harus memiliki minimal 8 karakter.',
        ];
    }
}
