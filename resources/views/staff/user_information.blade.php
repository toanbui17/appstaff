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
                                    <h1>add information</h1>
                                    @error('msg')
                                    <div class="error">
                                        {{$message}}
                                    </div>
                                    @enderror
                                    @if(!empty($dataJoin->personnel->office))
                                    <div class="user_cl">
                                        <div class="user_if">
                                            <div class="title_data">ten nhan vien</div>
                                            <div class="data_user">{{$dataJoin->name}}</div>
                                                  @error('name_pd')
                                                  <span class="error">{{$message}}</span>
                                                  @enderror

                                            <div class="title_data">email nhan vien</div>
                                            <div class="data_user">{{$dataJoin->email}}</div>
                                                  @error('name_pd')
                                                  <span class="error">{{$message}}</span>
                                                  @enderror

                                            <div class="title_data">chuc vu nhan vien</div>
                                            <div class="data_user">{{$dataJoin->personnel->office}}</div>
                                                  @error('name_pd')
                                                  <span class="error">{{$message}}</span>
                                                  @enderror

                                            <div class="title_data">noi sinh nhan vien</div>
                                            <div class="data_user">{{$dataJoin->personnel->address}}</div>
                                                  @error('name_pd')
                                                  <span class="error">{{$message}}</span>
                                                  @enderror

                                            <div class="title_data">tuoi nhan vien</div>
                                            <div class="data_user">{{$dataJoin->personnel->age}}</div>
                                                  @error('name_pd')
                                                  <span class="error">{{$message}}</span>
                                                  @enderror

                                            <div class="title_data">so dien thoai nhan vien</div>
                                            <div class="data_user">{{$dataJoin->personnel->number_phone}}</div>
                                                  @error('name_pd')
                                                  <span class="error">{{$message}}</span>
                                                  @enderror

                                            <div class="title_data">hinh anh nhan vien</div>
                                            <img src="/upload/{{$dataJoin->personnel->image}}" alt="" width="150" height="150">
                                                  @error('name_pd')
                                                  <span class="error">{{$message}}</span>
                                                  @enderror

                                            <div class="title_data">thoi gian khoi tao thong tin</div>
                                            <div class="data_user">{{$dataJoin->personnel->created_at}}</div>
                                                  @error('name_pd')
                                                  <span class="error">{{$message}}</span>
                                                  @enderror

                                            <div class="title_data">thoi gian cap nhat thong tin</div>
                                            <div class="data_user">{{$dataJoin->personnel->updated_at}}</div>
                                              @error('name_pd')
                                              <span class="error">{{$message}}</span>
                                              @enderror
                                            </div>
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
        </div>
    </div>
</div>
@endsection