<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Booxingreq extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'id'=>['required','max:20'],
            'name'=>['required','max:255'],
            'alamat'=>['required','max:255'],
            'no_hp'=>['required'],
            'paket'=>['required','max:255'],
            'tgl_booxing'=>['required']
        ];
    }
}
