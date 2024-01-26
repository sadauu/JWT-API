<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $method = $this->method();

        if($method == 'PUT') {
            return [
                'id' => ['required'],
                'category_id' => ['required'],
                'title' => ['required'],
                'description' => ['required'],
                'post_body' => ['required'],
            ];
        }else {
            return [
                'id' => ['sometimes', 'required'],
                'category_id' => ['sometimes', 'required'],
                'title' => ['sometimes', 'required'],
                'description' => ['sometimes', 'required'],
                'post_body' => ['sometimes', 'required'],
            ];
        }
    }
}
