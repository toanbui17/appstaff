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
                            <div class="box_table">
                                <table class="staff_table">
                                    <thead>
                                        <tr>
                                            <th>stt</th>
                                            <th>ten nv</th>
                                            <th>email nv</th>
                                            <th>lever</th>
                                            <th>ngay tao</th>
                                            <th>ngay sua</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(!empty($dataUser))
                                            @foreach ($dataUser as $key => $it)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$it->name}}</td>
                                            <td>{{$it->email}}</td>
                                            <td>{{$it->lever}}</td>
                                            <td>{{$it->created_at}}</td>
                                            <td>{{$it->updated_at}}</td>
                                            <td><a href="{{route('addPersonnel',['id'=>$it->id])}}">create</a></td>
                                            <td><a href="{{route('editPersonnel',['id'=>$it->id])}}" class="editPersonnel">edit</a></td>
                                            <td><a href="" class="editPersonnel">delete</a></td>                                           
                                            <td><a href="{{route('personnelId',['id'=>$it->id])}}" class="editPersonnel">view</a></td>
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