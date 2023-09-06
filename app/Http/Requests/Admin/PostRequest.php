<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class PostRequest extends FormRequest
{

    //thuc hien kiem tra validate

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
            //khai bao roles
            'name_pd'=>'required',
            'quantity_pd'=>'required',
            'sold_pd'=>'required',
            'image_pd' => '|file|size:512',
            'price_pd'=>'float|required',
            'describe_pd'=>'required',
            'created_at' => 'date_format:y-m-d',
            'updated_at' => 'date_format:y-m-d',
        ];
    }

    public function messages()
    {
        //khoi to messages
        return[
            'requirred'=>'khong duoc de rong!',
            'date'=>'nhap lai ngay thang',
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
        throw new HttpResponseException(redirect('home')->with('msg', 'ban khong co quyen truy'));
        
    }
}
        