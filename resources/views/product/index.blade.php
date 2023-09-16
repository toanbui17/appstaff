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
                                <table class="staff_table">
                                    <thead>
                                        <tr>
                                            <th>stt</th>
                                            <th>ten</th>
                                            <th>so luong</th>
                                            <th>da ban</th>
                                            <th>hinh anh</th>
                                            <th>gia</th>
                                            <th>mo ta</th>
                                            <th>ngay tao</th>
                                            <th>ngay sua</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(!empty($data))
                                            @foreach ($data as $key => $it)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$it->name_pd}}</td>
                                            <td>{{$it->quantity_pd}}</td>
                                            <td>{{$it->sold_pd}}</td>
                                            <td>{{$it->image_pd}}</td>
                                            <td>{{$it->price_pd}}</td>
                                            <td>{{$it->describe_pd}}</td>
                                            <td>{{$it->created_at}}</td>
                                            <td>{{$it->updated_at}}</td>
                                            <td><a href="{{route('productDelete',['id'=>$it->id])}}" class="delete">delete</a></td>
                                            <td><a href="{{route('productEdit',['id'=>$it->id])}}" class="edit">edit</a></td>
                                        </tr>
                                        @endforeach
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