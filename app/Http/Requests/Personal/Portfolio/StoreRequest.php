<?php

namespace App\Http\Requests\Personal\Portfolio;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'crypto_id' => 'required | integer',
            'buy_price' => 'required | numeric',
            'amount' => 'required | numeric',
        ];
    }

    public function messages()
    {
        return [
            'crypto_id.required'=>'Це поле потрібно заповнити',
            'crypto_id.integer'=>'Це поле повенне бути цілочисельним',
            'buy_price.numeric'=>'Це поле повенне бути числового формату',
            'amount.numeric'=>'Це поле повенне бути числового формату',
        ];
    }
}
