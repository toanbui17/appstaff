@extends('layouts.admin')
@section('title')
    {{$title}}
@endsection
@section('conten_ad')
<div class="container">
    <div class="category row">
        <div class="category_conten col-md-12">
            <div class="conten_box">
                <div class="conten_hear">
                    <h3 class="conten_name">
                        {{request()->path()}}
                    </h3>
                </div>
                <div class="body_box home1">
                    <div class="conten_body">
                        <h1>Create personnel</h1>
                        <!-- kiem tra error -->
                        @error('msg')
                            <div class="error">
                                {{$message}}
                            </div>
                        @enderror
                        @error('good')
                        <div class="good">
                            {{$message}}
                        </div>
                    @enderror
                        @if (empty($dataUser->personnel->office))
                        <form action="{{route('createPersonnel',$dataUser->id)}}" method="post" class="add_personnel" enctype="multipart/form-data">
                            @csrf
                            <div class="form">
                                <div class="mb_3">
                                    <label for="" class="name_input">ten user:</label>
                                    <label for="" class="name_input_label">{{$dataUser->name}}</label>
                                    <label for="" class="name_input">email user:</label>
                                    <label for="" class="name_input_label">{{$dataUser->email}}</label>
                                    <label for="" class="name_input">lever:</label><span>chon lever de xac nhan chuc vu</span>
                                    <select name="office" id="office">
                                        <option value='{{$dataUser->lever}}'> {{$dataUser->lever}}</option>
                                        <option value="CEO">0</option>
                                        <option value="Truong Phong HCNS">1</option>
                                        <option value="nhan vien kinh doanh">2</option>
                                        <option value="nhan vien HCNS">3</option>
                                    </select>
                                </div>
                                @error('lever')
                                    <span class="error lg">{{$message}}</span>
                                @enderror
                                <label for="" class="name_input">age:</label>
                                <input type="year" name="age" class="input_user" value="{{old('age')}}">
                                @error('age')
                                    <span class="error lg">{{$message}}</span>
                                @enderror
                                <label for="" class="name_input">image:</label>
                                <input type="file" name="image" class="input_user">
                                @error('image')
                                    <span class="error lg">{{$message}}</span>
                                @enderror
                                <label for="" class="name_input">number phone:</label>
                                <input type="text" class="input_user" name="number_phone" value="{{old('nuber_phone')}}">
                                @error('number_phone')
                                    <span class="error lg">{{$message}}</span>
                                @enderror
                                <label for="" class="name_input">address:</label>
                                <input type="text" name="address" class="input_user" value="{{old('address')}}">
                                @error('number_phone')
                                    <span class="error lg">{{$message}}</span>
                                @enderror
                                <input type="hidden" name="_method" value="post" class="hear_f">
                                <input type="hidden" name="remember_token" value="{{csrf_token()}}" class="tk">
                            </div>
                            <div class="footer_login_auth">
                                <button type="submit" class="btn_input">add user</button>
                            </div>
                        </form>
                        @else
                        <div class="data_nul" colspan="10">user da co thong tin</div>     
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection