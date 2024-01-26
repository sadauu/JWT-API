<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCategoryRequest extends FormRequest
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
                'category' => ['required'],
            ];
        }else {
            return [
                'id' => ['sometimes', 'required'],
                'category' => ['sometimes', 'required'],
            ];
        }
    }
}
