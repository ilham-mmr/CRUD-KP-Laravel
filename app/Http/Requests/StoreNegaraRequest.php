<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNegaraRequest extends FormRequest
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
            'kode' => 'required|alpha',
            'kode_iso3' => 'required|alpha',
            'nama' => 'required',
            'nama_inggris' =>'required',
            'lat' => 'required|numeric',
            'lon' => 'required|numeric',
            'kode_telepon' =>'required|numeric',
            'mata_uang' => 'required|alpha|min:3'
        ];
    }
}
