<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateLombaRequest extends FormRequest
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
            'id_kategori'=>'required',
            'id_jenjang'=>'required',
            'description'=>'required',
            'image'=>'nullable|image',
            'video'=>'nullable|mimes:mp4,mov,ogg,qt,jpg,png',
            'link'=>'required|url',
            'start_date'=>'required|date',
            'end_date'=>'required|date'
        ];
    }
}
