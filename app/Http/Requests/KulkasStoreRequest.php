<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KulkasStoreRequest extends FormRequest
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
            'nomor_asset' => 'required|unique:kulkas|max:7',
            'nomor_seri' => 'required|unique:kulkas|min:5',
            'id_tipe' => 'required',
            'id_kondisi' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nomor_asset.required' => 'Nomor asset tidak boleh kosong',
            'nomor_asset.unique' => 'Nomor asset sudah terdaftar',
            'nomor_asset.max' => 'Maksimal 7 karakter',
            'nomor_seri.required'  => 'Nomor seri tidak boleh kosong',
            'nomor_seri.unique' => 'Nomor seri sudah terdaftar',
            'nomor_seri.min' => 'Minimal 5 karakter',
            'id_tipe.required' => 'Tipe tidak boleh kosong',
            'id_kondisi.required' => 'Tipe tidak boleh kosong',
        ];
    }
}
