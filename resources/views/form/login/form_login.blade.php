@extends('layouts.base')
@section('title')
    {{$title}}
@endsection
@section('conten')
<div class="category_conten col-md-12 home">
    <div class="conten_box">
        <div class="conten_hear">
            <h3 class="conten_name">
                {{request()->path()}}
            </h3>
        </div>
        <div class="body_box home1">
            <div class="conten_body">
                <p class="admin_body">wellcome to app database manager</p>
                <!-- thong bao khong co quyen then vao data tai staffRequest -->
                @if (session('msg'))
                    <span class="error">{{session('msg')}}</span>
                @endif
            </div>
        </div>
    </div>
</div>
    <div class="login_lo">
        <div class="moda_login">
            <div class="moda_body">
                <div class="login_body">
                    <h1 class="header_login">login post</h1>
                    <form action="{{route('login.get')}}" method="post" class="">
                        <div class="form">
                            <label for="" class="name_input">tai khoan email</label>
                            <input type="email" name="email" class="input_user" value="{{old('name')}}">
                            <label for="" class="name_input">mat khau</label>
                            <input type="password" name="password" class="input_user">
                            @error('name')
                                <span class="error">{{$message}}</span>
                            @enderror
                            <input type="hidden" name="_method" value="post" class="hear_f">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" class="tk">
                        </div>
                        <div class="footer_login">
                            <button type="submit" class="btn_input">login</button>
                            <a href="" class="link_die_login">quen mat khau</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection