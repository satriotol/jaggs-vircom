<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLombaRequest extends FormRequest
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
            'name'=>'required',
            'kategori_id'=>'required',
            'id_jenjang'=>'required',
            'description'=>'required',
            'hadiah'=>'required',
            'ketentuan' => 'required',
            'image'=>'nullable|image|max:1000',
            'video'=>'nullable|url',
            'link'=>'required|url',
            'start_date'=>'required|date',
            'end_date'=>'required|date'
        ];
    }
}
