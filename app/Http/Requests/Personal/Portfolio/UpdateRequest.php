<?php

namespace App\Http\Requests\Personal\Portfolio;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required | string',
            'tag' => 'required | string',
            'current_price' => 'nullable | numeric',
            'logo' => 'nullable | file',
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'Це поле потрібно заповнити',
            'title.string'=>'Це поле повенне бути текстове',
            'tag.required'=>'Це поле потрібно заповнити',
            'tag.string'=>'Це поле повенне бути текстове',
            'current_price.double'=>'Це поле повенне бути числового формату',
            'logo.file'=>'Необхідно обрати файл',
        ];
    }
}
