<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ProductRequest extends FormRequest
{

    //thuc hien kiem tra validate

    /**
     * Determine if the user is authorized to make this request.
     */
    //cap quyen truy cap true = co, false = khong
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //khai bao roles
            'name_pd'=>'required',
            'quantity_pd'=>'required',
            'sold_pd'=>'required',
            'image_pd' => 'file',
            'price_pd'=>'required',
            'describe_pd'=>'required',
            'created_at' => 'min:10',
            'updated_at' => 'min:10',
        ];
    }

    public function messages()
    {
        //khoi to messages
        return[
            'requirred'=>'khong duoc de rong!',
            //'file'=>'khong phai file anh',
            //'double:8.2'=>'khong dung gia',
            'min:10'=>'nhap lai ngay thang'
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
        