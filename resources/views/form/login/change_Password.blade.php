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
                        <h1 class="header_login">change password</h1>
                        @error('msg')
                            <div class="error lg">
                                {{$message}}
                            </div>
                        @enderror
                        @error('good')
                            <div class="good lg">
                                {{$message}}
                            </div>
                        @enderror
                        <form action="{{route('updatePassword')}}" method="post" class="">
                            <div class="form">
                                @csrf
                                <label for="" class="name_input">old password</label>
                                <input type="password" name="old_password" class="input_user" value="{{old('name')}}">
                                @error('old_password')
                                    <span class="error lg">{{$message}}</span>
                                @enderror
                                <label for="" class="name_input">new password</label>
                                <input type="password" name="new_password" class="input_user">
                                @error('new_password')
                                    <span class="error lg">{{$message}}</span>
                                @enderror
                                <label for="" class="name_input">confirm password</label>
                                <input type="password" name="confirm_password" class="input_user">
                                @error('confirm_password')
                                    <span class="error lg">{{$message}}</span>
                                @enderror
                                <input type="hidden" name="_method" value="post" class="hear_f">
                                <input type="hidden" name="remember_token" value="{{csrf_token()}}" class="tk">
                            </div>
                            <div class="footer_change">
                                <button type="submit" class="btn_input">change password</button>
                            </div>
    
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection