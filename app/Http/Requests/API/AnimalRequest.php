<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class AnimalRequest extends FormRequest
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
            "name" => ["required", "string"],
            "type" => ["required", "string"],
            "weight" => ["required", "numeric"],
            "height" => ["required"],
            "biteyness" => ["required"],
            "treatments" => ["required", "array"], // check tags is an array
            "treatments.*" => ["string", "max:30"], // check members of tags are strings
        ];
    }
}
