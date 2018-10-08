<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class ContactStoreRequest extends FormRequest
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
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'max:100',
            'g-recaptcha-response' => 'required|captcha'
        ];
    }

    public function messages(){
        return[
            'name.required' => '姓名不能空白！',
            'email.required' => '電子郵件不能空白！',
            'email.email' => '電子郵件格式錯誤！',
            'subject.required' => '主題不能空白！',
            'content.max' => '內容長度不能超過100個字！',
            'g-recaptcha-response' => [
                'required' => '請驗證我不是機器人',
                'captcha' => '機器人驗證錯誤，請重新嘗試',
            ],
        ];
    }
}
