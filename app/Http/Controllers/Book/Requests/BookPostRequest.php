<?php

namespace App\Http\Controllers\Book\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookPostRequest extends FormRequest
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
            'user_id' => 'required|numeric', 
            'title' => 'required|string|max:255', 
            'editorial' => 'required|string|max:255', 
            'year' => 'required|numeric', 
            'number' => 'required|numeric', 
        ];
    }
}
