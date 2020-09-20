<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'name_video' => "required|string|max:25|unique:posts",
            'category' => "required",
            "order" => "required|integer|unique:posts",
            "description" => 'required|max:255|string',
            "video" => "required|mimes:mp4,mkv|max:20480"
        ];
    }
}
