@extends('home.index')
@section('title')
    {{$title}}
@endsection
@section('conten_login')
    <div class="login_lo">
        <div class="moda_login">
            <div class="moda_body">
                <div class="login_body">
                    <h1 class="header_login">login post</h1>
                    @error('msg')
                        <div class="error lg">
                            {{$message}}
                        </div>
                    @enderror
                    <form action="{{route('login.get')}}" method="post" class="">
                        <div class="form">
                            <label for="" class="name_input">tai khoan email</label>
                            <input type="email" name="email" class="input_user" value="{{old('name')}}">
                            @error('email')
                                <span class="error lg">{{$message}}</span>
                            @enderror
                            <label for="" class="name_input">mat khau</label>
                            <input type="password" name="password" class="input_user">
                            @error('password')
                                <span class="error lg">{{$message}}</span>
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