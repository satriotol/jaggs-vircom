<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCompanyRequest extends FormRequest
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
            'name' => 'required',
            'address' => 'required',
            'email' => 'required',Rule::unique('companys')->ignore($this->id,'email'),
            'phone_number' => 'required|numeric',
            'description' => 'required',
            'vision' => 'required',
            'mission' => 'required',
            'image_desc' => 'nullable|mimes:png,jpg|max:5000',
            'video_profile' => 'url|nullable',
            'instagram'=>'url|nullable',
            'youtube'=>'url|nullable',
        ];
    }
}
