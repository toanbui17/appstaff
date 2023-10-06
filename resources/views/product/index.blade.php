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
                                            <td><img src="/upload/{{$it->image_pd}}" alt="" width="100" height="100"></td>
                                            <td>{{$it->price_pd}}</td>
                                            <td>{{$it->describe_pd}}</td>
                                            <td>{{$it->created_at}}</td>
                                            <td>{{$it->updated_at}}</td>
                                            <td><a href="{{route('productDelete',['id'=>$it->id])}}" class="delete">delete</a></td>
                                            <td><a href="{{route('productEdit',['id'=>$it->id])}}" class="edit">edit</a></td>
                                            <td><a href="{{route('productId',['id'=>$it->id])}}" class="edit">view</a></td>
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
                        <a href="{{route('productAdd')}}" class="category_link"><span class="category_name">Create a product</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection