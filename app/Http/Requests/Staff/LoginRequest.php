<?php

namespace App\Http\Requests\Staff;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //khai bao rules
            'email'=>'required|email:rfc,dns',
            'password'=>'required|current_password',
        ];
    }

    public function messages(){
        return[
            'required'=>'chua nhap thong tin',
            'email:rfc,dns'=>'khong dung dang email',
            //'current_password'=>'ma khau khong dung'
        ];
    }

    //sau khi su ly validation
    public function withValidator($validation){
        $validation->after(function ($validation){
                // if($this->somethingElse){
    
                // }
            if($validation->errors()->count()>0){
                $validation->errorS()->add('msg','kiem tra lai thong tin nhap');
            }
        });
    }

    //chuyen huong khi k co  quyen
    public function failedAuthorization(){
        //chuyen huong
        //throw new HttpResponseException(redirect('home')->with('msg', 'ban khong co quyen truy'));
        
    }
}
