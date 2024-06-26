<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
        return
            [
                'title' => 'required',
                'description' => 'required',
                'target_amount' => 'required',
                'amount_raised' => 'required',
                'category_id' => 'required',
                'user_id' => 'nullable',
                'image' => 'nullable',
            ];
    }
}
