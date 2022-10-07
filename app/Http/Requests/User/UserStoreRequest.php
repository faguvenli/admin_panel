<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'name' => 'required',
            'email' => ['required', 'unique:users,email,NULL,id,deleted_at,NULL'],
            'password' => ['required', 'min:6'],
            'role' => 'required'
        ];
    }

    public function attributes() {
        return [
            'name' => 'Kullanıcı Adı',
            'email' => 'E-posta',
            'password' => 'Parola'
        ];
    }
}
