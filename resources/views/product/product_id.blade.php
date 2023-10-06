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
                                    @if(!empty($dataId))
                                    <div class="user_cl">
                                            <h2 class="head_user_name">{{$dataId->name_pd}}</h2>
                                            <div class="user_if">
                                                <div class="title_data">ten san pham</div>
                                                <div class="input_user_name">{{$dataId->name_pd}}</div>
                                                <div class="title_data">so luong con trong kho</div>
                                                <div class="input_user_name">{{$dataId->quantity_pd}}</div>
                                                <div class="title_data">so luong da ban</div>
                                                <div class="input_user_name">{{$dataId->sold_pd}}</div>
                                                <div class="title_data">hinh anh san pham</div>
                                                <img src="/upload/{{$dataId->image_pd}}" alt="" width="150" height="150">
                                                <div class="title_data">gia tien san pham</div>
                                                <div class="input_user_name">{{$dataId->price_pd}}</div>
                                                <div class="title_data">mo ta cua san pham</div>
                                                <div class="input_user_name">{{$dataId->describe_pd}}</div>
                                            </div>
                                        </form>
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