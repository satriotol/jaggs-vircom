<?php

namespace App\Http\Requests\Tatacara;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTataCaraRequest extends FormRequest
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
            // 'nomor' => 'required|numeric|unique:tata_caras,nomor,'.$this->nomor,
            'description' => 'required'
        ];
    }
}
