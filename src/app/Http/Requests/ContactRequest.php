<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email'],
            'tel' => ['required', 'numeric', 'digits_between:10,11'],
            'last-name' =>['required', 'string'],
            'first-name' =>['required', 'string'],
            'gender' =>['required'],
            'address' => ['required'],
            
        ];
    }

    public function attributes()
    {
        return [
            'お名前' => 'お名前',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'お名前を入力してください',
            'last-name.required' =>'姓を入力してください',
            'first-name.required' =>'名を入力してください',
            'gender.required' =>'性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスは「ユーザー名@ドメイン」形式で入力してください',
            'tel.required' => '電話番号を入力してください',
            'tel.digits_between' => '電話番号を10桁から11桁の間で入力してください',
            'building.required' =>'住所を入力してください',

        ];
    }

}
