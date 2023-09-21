@extends('layouts.admin')
@section('title')
    {{$title}}
@endsection
@section('conten_ad')
<div class="category_conten_ad col-md-12 admin">
    <div class="conten_box_ad">
        <div class="conten_hear_ad">
            <h3 class="conten_name">
                {{request()->path()}}
            </h3>
        </div>
        <div class="body_box home1">
            <div class="conten_body">
                <p class="admin_body">wellcome to app database manager</p>
                <!-- thong bao khong co quyen then vao data tai staffRequest -->
                @error('msg')
                <div class="error">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>
    </div>
    @yield('conten_login')
</div>
@endsection