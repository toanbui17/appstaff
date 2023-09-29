@extends('layouts.base')
@section('title')
    {{$title}}
@endsection
@section('conten')
<div class="category_conten col-md-12 home">
    <div class="conten_box">
        <div class="conten_hear">
            <h3 class="conten_name">
                {{request()->path()}}
            </h3>
        </div>
        <div class="body_box home1">
            <div class="conten_body">
                <!-- thong bao khong co quyen then vao data tai staffRequest -->
                <div class="body_box">
                    <div class="conten_body">
                        <div class="box_tb">
                            <div class="box_table">
                                <table class="staff_table body_box">
                                    <thead>
                                        <tr>
                                            <th>stt</th>
                                            <th>ten sp</th>
                                            <th>sl con</th>
                                            <th>sl ban</th>
                                            <th>hinh anh sp</th>
                                            <th>gia sp</th>
                                            <th>mo ta sp</th>
                                            <!-- <th>anh</th> -->
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
                                            <td>view</td>
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
                @if (session('msg'))
                    <span class="error">{{session('msg')}}</span>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection