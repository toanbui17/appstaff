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
                        <h1>information personnel</h1>
                        @if (!empty($dataUser->personnel->office))
                        <div class="mb_4">
                            <label for="" class="name_input">ten user:</label>
                            <label for="" class="name_input_label">{{$dataUser->name}}</label>
                            <label for="" class="name_input">email user:</label>
                            <label for="" class="name_input_label">{{$dataUser->email}}</label>
                            <label for="" class="name_input">lever:</label>
                            <label for="" class="name_input_label">{{$dataUser->lever}}</label>
                            <label for="" class="name_input">office:</label>
                            <label for="" class="name_input_label">{{$dataUser->personnel->office}}</label>
                            <label for="" class="name_input">age:</label>
                            <label for="" class="name_input_label">{{$dataUser->personnel->age}}</label>
                            <label for="" class="name_input">image:</label>
                            <img src="/upload/{{$dataUser->personnel->image}}" alt="" width="150" height="150">
                            <label for="" class="name_input">number phone:</label>
                            <label for="" class="name_input_label">{{$dataUser->personnel->number_phone}}</label>
                            <label for="" class="name_input">address:</label>
                            <label for="" class="name_input_label">{{$dataUser->personnel->address}}</label>
                        </div>
                        @else
                            <div class="data_nul" colspan="10">user chua co thong tin</div>     
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection