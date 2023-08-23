<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    public function attributes()
    {
        return [
            'title' => 'Sarlavha',
            'short_content' => 'Qisqacha mazmun',
            'content' => 'Maqola',
            'price' => 'narhi',
            'photo' => 'Rasm'
        ];
    }

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [

            'title'=>'required|max:255',
            'short_content'=>'required',
            'content'=>'required',
            'price' => 'required',
            'photo' => 'nullable | image|max:2048'



        ];
    }

}
