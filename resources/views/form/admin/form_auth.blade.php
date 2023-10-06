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
                        <h1>Create Auth</h1>
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
                                        <option value="0">lever 0 (Giam Doc)</option>
                                        <option value="1">lever 1 (Truong Phong HCNS)</option>
                                        <option value="2">lever 2 (KD)</option>
                                        <option value="3">lever 3 (HCNS)</option>
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