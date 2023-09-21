@extends('layouts.admin')
@section('title')
    {{$title}}
@endsection
@section('conten_ad')
<div class="container">
    <div class="category row">
        <div class="category_box col-md-4">
            <div class="category_list">
                <h3 class="category_hearder">account</h3>
                <ul class="list_category">
                    <li class="category_item">
                        <a href="{{route('staffAdd')}}" class="category_link"><span class="category_name">Create an account</span></a>
                    </li>
                    <li class="category_item">
                        <a href="" class="category_link"><span class="category_name">Change password</span></a>
                    </li>
                    <li class="category_item">
                        <a href="" class="category_link"><span class="category_name">Forgot password</span></a>
                    </li>
                    <li class="category_item">
                        <a href="" class="category_link"><span class="category_name">Edit information</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="category_conten col-md-8">
            <div class="conten_box">
                <div class="conten_hear">
                    <h3 class="conten_name">
                        {{request()->path()}}
                    </h3>
                </div>
                <div class="body_box home1">
                    <div class="conten_body">
                        <h1>Create Auth</h1>
                        <!-- kiem tra error -->
                        @error('msg')
                            <div class="error">
                                {{$message}}
                            </div>
                        @enderror
                        <form action="{{route('createAuth')}}" method="post" class="">
                            @csrf
                            <div class="form">
                                <label for="" class="name_input">ten tai khoan</label>
                                <input type="text" name="name" class="input_user" value="{{old('name')}}">
                                @error('name')
                                    <span class="error lg">{{$message}}</span>
                                @enderror
                                <label for="" class="name_input">tai khoan email</label>
                                <input type="email" name="email" class="input_user" value="{{old('email')}}">
                                @error('email')
                                    <span class="error lg">{{$message}}</span>
                                @enderror
                                <div class="mb_3">
                                    <label for="" class="name_input">lever</label>
                                    <select name="lever" id="">
                                        <option value=>lever </option>
                                        <option value="1">lever 1</option>
                                        <option value="2">lever 2</option>
                                    </select>
                                </div>
                                @error('lever')
                                    <span class="error lg">{{$message}}</span>
                                @enderror
                                <label for="" class="name_input">mat khau</label>
                                <input type="password" name="password" class="input_user">
                                @error('password')
                                    <span class="error lg">{{$message}}</span>
                                @enderror
                                <input type="hidden" name="_method" value="post" class="hear_f">
                                <input type="hidden" name="remember_token" value="{{csrf_token()}}" class="tk">
                            </div>
                            <div class="footer_login_auth">
                                <button type="submit" class="btn_input">create Auth</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection