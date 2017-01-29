<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
      $regex = '/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/';
        return [
          'title' => 'required|min:6|max:100',
          'dis'  => 'required|min:30|max:140',
          'link_url' => 'required|regex:'.$regex,
          'image' => 'required|mimes:png,jpg,jpeg' 
        ];
    }
}
