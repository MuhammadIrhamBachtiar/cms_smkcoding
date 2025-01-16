<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            'status' => 'required|boolean',
            'publish_date' => 'required|date'
        ];

        // Only validate image on create or when image is being updated
        if ($this->isMethod('POST') || $this->hasFile('img')) {
            $rules['img'] = 'required|image|mimes:png,jpg,jpeg,webp|max:2048';
        }

        // Handle slug validation differently for create and update
        if ($this->isMethod('PUT') || $this->isMethod('PATCH')) {
            $rules['slug'] = 'nullable|string|max:255|unique:articles,slug,' . $this->article;
        } else {
            $rules['slug'] = 'nullable|string|max:255|unique:articles,slug';
        }

        return $rules;
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'category_id.required' => 'Kategori harus dipilih',
            'category_id.exists' => 'Kategori tidak valid',
            'title.required' => 'Judul artikel wajib diisi',
            'title.max' => 'Judul tidak boleh lebih dari 255 karakter',
            'desc.required' => 'Deskripsi artikel wajib diisi',
            'img.required' => 'Gambar artikel wajib diupload',
            'img.image' => 'File harus berupa gambar',
            'img.mimes' => 'Format gambar harus png, jpg, jpeg, atau webp',
            'img.max' => 'Ukuran gambar maksimal 2MB',
            'status.required' => 'Status artikel wajib dipilih',
            'status.boolean' => 'Status harus berupa true atau false',
            'publish_date.required' => 'Tanggal publikasi wajib diisi',
            'publish_date.date' => 'Format tanggal publikasi tidak valid',
            'slug.unique' => 'Slug artikel sudah digunakan'
        ];
    }
}