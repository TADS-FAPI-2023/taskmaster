<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FileRequest extends FormRequest
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
            'filename'      => 'required|mimes:jpeg,jpg,png,gif,pdf,doc,docx,txt,php,sql,html,js',
            'description'   => 'required|max:300'
        ];
    }
}

