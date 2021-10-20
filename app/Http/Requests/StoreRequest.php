<?php

namespace App\Http\Requests;

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
     * @return array
     */
    public function rules()
    {
        return [
            'theme' => 'required|string',
            'text' => 'required|string',
            'file' => 'required|file',
        ];
    }

    public function messages()
    {
        return [
            'theme.required' => 'Поле небходимо заполнить',
            'theme.string' => 'Поле небходимо заполнить по строчному типу',
            'text.required' => 'Поле небходимо заполнить',
            'text.string' => 'Поле небходимо заполнить по строчному типу',
            'file.required' => 'Поле небходимо заполнить',
            'file.file' => 'Небходимо выбрать файл',
        ];
    }
}
