@extends('home.index')
@section('title')
    {{$title}}
@endsection
@section('conten_login')
    <div class="login_lo">
        <div class="moda_login">
            <div class="moda_body">
                <div class="login_body">
                    <h1 class="header_login">for get password</h1>
                    <p>hay nhap email cua ban da co tren he thong</p>
                    @error('msg')
                        <div class="error lg">
                            {{$message}}
                        </div>
                    @enderror
                    <form action="{{route('forpostPassword')}}" method="post" class="">
                        <div class="form">
                            @csrf
                            <label for="" class="name_input">nhap tai khoan email</label>
                            <input type="email" name="email" class="input_user" value="{{old('name')}}">
                            @error('email')
                                <span class="error lg">{{$message}}</span>
                            @enderror
                            <input type="hidden" name="_method" value="post" class="hear_f">
                            <input type="hidden" name="remember_token" value="{{csrf_token()}}" class="tk">
                        </div>
                        <div class="footer_login">
                            <button type="submit" class="btn_input">gui</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection