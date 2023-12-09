<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;


class NasikotakUpdateRequest extends FormRequest
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
        return [
            'nama_nasi' => 'required',
            'harga_nasi' => 'required',
            'spesial' => 'required',
            'jumlah_porsi' => 'required',
            'ongkir' => 'required',
            'status' => 'required',
            'deskripsi' => 'required',
            'extra_minum' => 'required',
            'extra_sendok' => 'required',
        ];
    }
}
