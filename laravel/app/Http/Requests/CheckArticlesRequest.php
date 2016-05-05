<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CheckArticlesRequest extends Request
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
            //thi?t l?p các rule cho form
            'name' => 'required|min:6', // field name b?t bu?c nh?p và ph?i có t?i thi?u 6 k? t?
            'created_at' => 'required|date' // field created_at b?t bu?c nh?p và ph?i có ğ?nh d?ng ki?u date
            ];
    }
}
