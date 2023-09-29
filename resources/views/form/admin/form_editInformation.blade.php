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
                        {{$title}}
                    </h3>
                </div>
                <div class="body_box">
                    <div class="conten_body">
                        <div class="box_tb">
                            <div class="box_table">
                                <div class="staff_tb">
                                    @if(!empty($dataJoin))
                                    <div class="user_cl">
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <div class="user_if">
                                                <div class="title_data">ten nhan vien</div>
                                                <input class="input_user"value="{{$dataJoin->name}}">
                                                <div class="title_data">email nhan vien</div>
                                                <input class="input_user"value="{{$dataJoin->email}}">
                                                <div class="title_data">chuc vu nhan vien</div>
                                                <input class="input_user"value="{{$dataJoin->personnel->office}}">
                                                <div class="title_data">noi sinh nhan vien</div>
                                                <input class="input_user"value="{{$dataJoin->personnel->address}}">
                                                <div class="title_data">tuoi nhan vien</div>
                                                <input class="input_user"value="{{$dataJoin->personnel->age}}">
                                                <div class="title_data">so dien thoai nhan vien</div>
                                                <input class="input_user"value="{{$dataJoin->personnel->number_phone}}">
                                                <div class="title_data">hinh anh nhan vien</div>
                                                <input value="{{asset('/upload/'.$dataJoin->personnel->image)}}" type="file" class="input_user">
                                                <input type="text" class="input_user" name="image" value="{{$dataJoin->personnel->image}}">
                                            </div>
                                            <div class="footer_updaate">
                                                <button type="submit" class="upadte_user">update information</button>
                                            </div>
                                        </form>
                                    </div>
                                    @else
                                        <div class="data_nul" colspan="10">null</div>     
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection