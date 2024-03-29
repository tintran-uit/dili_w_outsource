<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductRequest extends \Backpack\CRUD\app\Http\Requests\CrudRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:2|max:255',
            'slug' => 'unique:products,slug,'.\Request::get('id'),
            // 'meta_title' => 'required|min:2',
            // 'meta_description' => 'required|min:2',
            'description' => 'required|min:2',
            'price' => 'required|integer',
            // 'categories' => 'required',
            // 'brand_id' => 'required',
           'img' => 'required',
           // 'images' => 'required',
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }
}
