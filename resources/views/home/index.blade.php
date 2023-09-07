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
    @yield('conten_login')
</div>
@endsection