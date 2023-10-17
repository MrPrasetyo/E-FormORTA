<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class formortarequest extends FormRequest
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
            //
            'nama-orta' => 'required|string',
            'date-orta' => 'required|date',
            'alamat-orta' => 'required|string',
            // Domisili
            'provinsiSelect' => 'required|',
            'kotaSelect' => 'required',
            'kecamatanSelect' => 'required',
            'kelurahanSelect' => 'required',
            // telepon
            'nomorrumah-orta' => 'required',
            'nomorkantor-orta' => 'required',
            // nomor
            'nomorhp_orta' => 'required',
            'nomorwa-orta' => 'required',
            // email
            'email-orta' => 'required',
            // alias
            'radioalias' => 'required',
            // donasi
            'checkDonasi' => 'required', 
            'selamabulan' => 'required',
            'RadioCaraPembayaran' => 'required',
            // Teknis Pembayaran
            'teknis_donasi' => 'required', 
            'setiapTanggal' => 'required', 
            // Foto
            'fotobukti' => 'required', 
        ];
    }
}
