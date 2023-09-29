@extends('layouts.admin')
@section('title')
    {{$title}}
@endsection
@section('conten_ad')
<div class="container">
    <div class="category row">
        <div class="category_box col-md-4">
            <div class="category_list">
                <h3 class="category_hearder">product</h3>
                <ul class="list_category">
                    <li class="category_item">
                        <a href="{{route('productAdd')}}" class="category_link"><span class="category_name">Create a product</span></a>
                    </li>
                    <li class="category_item">
                        <a href="" class="category_link"><span class="category_name">update product</span></a>
                    </li>
                    <li class="category_item">
                        <a href="" class="category_link"><span class="category_name">Forgot password</span></a>
                    </li>
                    <li class="category_item">
                        <a href="" class="category_link"><span class="category_name">Edit information</span></a>
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
                <div class="body_box">
                    <div class="conten_body">
                        <div class="box_tb">
                        <!-- kiem tra error -->
                        @error('msg')
                        <div class="error">
                            {{$message}}
                        </div>
                        @enderror
                            <div class="box_table">
                                <h2 class="name_view">view {{$dataId->name_pd}}</h2>
                                <table class="staff_table">
                                    <thead>
                                        <tr>
                                            <th>ten</th>
                                            <th>so luong</th>
                                            <th>da ban</th>
                                            <th>hinh anh</th>
                                            <th>gia/ $</th>
                                            <th>mo ta</th>
                                            <th>ngay tao</th>
                                            <th>ngay sua</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(!empty($dataId))
                                        <tr>
                                            <td>{{$dataId->name_pd}}</td>
                                            <td>{{$dataId->quantity_pd}}</td>
                                            <td>{{$dataId->sold_pd}}</td>
                                            <td><img src="/upload/{{$dataId->image_pd}}" alt="" width="100" height="100"></td>
                                            <td>{{$dataId->price_pd}}</td>
                                            <td>{{$dataId->describe_pd}}</td>
                                            <td>{{$dataId->created_at}}</td>
                                            <td>{{$dataId->updated_at}}</td>
                                            <td><a href="{{route('productDelete',['id'=>$dataId->id])}}" class="delete">delete</a></td>
                                            <td><a href="{{route('productEdit',['id'=>$dataId->id])}}" class="edit">edit</a></td>
                                        </tr>
                                        @else
                                        <tr>
                                            <td colspan="10">null</td>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection