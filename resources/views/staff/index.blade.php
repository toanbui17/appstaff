@extends('layouts.admin')
@section('title')
    {{$title}}
@endsection
@section('conten_ad')
<div class="container">
    <div class="category row">
        <div class="category_box col-md-4">
            <div class="category_list">
                <h3 class="category_hearder">staff</h3>
                <ul class="list_category">
                    <li class="category_item">
                        <a href="" class="category_link"><span class="category_name">Create an account</span></a>
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
                            <div class="box_table">
                                <table class="staff_table">
                                    <thead>
                                        <tr>
                                            <th>stt</th>
                                            <th>ten nv</th>
                                            <th>email nv</th>
                                            <th>chuc vu</th>
                                            <th>noi sinh</th>
                                            <th>nam sinh</th>
                                            <th>so dt</th>
                                            <th>hinh anh nv</th>
                                            <th>ngay tao</th>
                                            <th>ngay sua</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(!empty($data))
                                            @foreach ($data as $key => $it)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$it->name}}</td>
                                            <td>{{$it->email}}</td>
                                            <td>{{$it->position}}</td>
                                            <td>{{$it->place_of_birth}}</td>
                                            <td>{{$it->year_of_birth}}</td>
                                            <td>{{$it->phone}}</td>
                                            <td>{{$it->image}}</td>
                                            <td>{{$it->created_at}}</td>
                                            <td>{{$it->updated_at}}</td>
                                            <td>delete</td>
                                            <td>edit</td>
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