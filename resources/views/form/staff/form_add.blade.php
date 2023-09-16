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
                    <li class="category_item">
                        <a href="" class="category_link"><span class="category_name so">Sign out</span></a>
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
                        <h1>app staff</h1>
                        <!-- kiem tra error -->
                        @error('msg')
                            <div class="error">
                                {{$message}}
                            </div>
                        @enderror
                        <form action="{{route('staffStore')}}" method="post" class="" enctype="multipart/form-data" id="addstaff">
                            <div class="form">
                                <div class="nameinput">ten nhan vien</div>
                                <input type="text" name="name" class="input_user">
                                @error('name')
                                    <span class="error">{{$message}}</span>
                                @enderror
                                <div class="nameinput">email nhan vien</div>
                                <input type="email" name="email" class="input_user">
                                @error('email')
                                    <span class="error">{{$message}}</span>
                                @enderror
                                <div class="nameinput">chuc vu nhan vien</div>
                                <input type="text" name="position" class="input_user">
                                @error('position')
                                    <span class="error">{{$message}}</span>
                                @enderror
                                <div class="nameinput">que quan nhan vien</div>
                                <input type="text" name="place_of_birth" class="input_user">
                                @error('place_of_birth')
                                    <span class="error">{{$message}}</span>
                                @enderror
                                <div class="nameinput">nam sinh</div>
                                <input type="year" name="year_of_birth" class="input_user">
                                @error('year_of_birth')
                                    <span class="error">{{$message}}</span>
                                @enderror
                                <div class="nameinput">image nhan vien</div>
                                <input type="file" name="image" class="input_user">
                                @error('image')
                                    <span class="error">{{$message}}</span>
                                @enderror
                                <div class="nameinput">phone</div>
                                <input type="text" name="phone" class="input_user">
                                @error('password')
                                    <span class="error">{{$message}}</span>
                                @enderror
                                <div class="nameinput">password</div>
                                <input type="text" name="password" class="input_user">
                                @error('password')
                                    <span class="error">{{$message}}</span>
                                @enderror
                                <input type="hidden" name="_method" value="post" class="hear_f">
                                <input type="hidden" name="_token" value="{{csrf_token()}}" class="tk">
                            </div>
                            <button type="submit" class="btn_input">add staff</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection