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
                                        <div class="user_if">
                                            <div class="title_data">ten nhan vien</div>
                                            <div class="data_user">{{$dataJoin->name}}</div>
                                            <div class="title_data">email nhan vien</div>
                                            <div class="data_user">{{$dataJoin->email}}</div>
                                            <div class="title_data">chuc vu nhan vien</div>
                                            <div class="data_user">{{$dataJoin->personnel->office}}</div>
                                            <div class="title_data">noi sinh nhan vien</div>
                                            <div class="data_user">{{$dataJoin->personnel->address}}</div>
                                            <div class="title_data">tuoi nhan vien</div>
                                            <div class="data_user">{{$dataJoin->personnel->age}}</div>
                                            <div class="title_data">so dien thoai nhan vien</div>
                                            <div class="data_user">{{$dataJoin->personnel->number_phone}}</div>
                                            <div class="title_data">hinh anh nhan vien</div>
                                            <img src="/upload/{{$dataJoin->personnel->image}}" alt="" width="100" height="100">
                                            <div class="title_data">thoi gian khoi tao thong tin</div>
                                            <div class="data_user">{{$dataJoin->personnel->created_at}}</div>
                                            <div class="title_data">thoi gian cap nhat thong tin</div>
                                            <div class="data_user">{{$dataJoin->personnel->updated_at}}</div>
                                        </div>
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