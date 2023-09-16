@extends('layouts.admin')
@section('title')
    {{$title}}
@endsection
@section('conten_ad')
<div class="container">
    <div class="category row">
        <div class="category_box col-md-4">
            <div class="category_list">
                <h3 class="category_hearder">account</h3>
                <ul class="list_category">
                    <li class="category_item">
                        <a href="{{route('ProductAdd')}}" class="category_link"><span class="category_name">Create a product</span></a>
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
                <div class="body_box home1">
                    <div class="conten_body">
                        <h1>app product</h1>
                        <!-- kiem tra error -->
                        @error('msg')
                            <div class="error">
                                {{$message}}
                            </div>
                        @enderror
                        @if(!empty($data))
                        @foreach ($dataId as $key => $it)
                        <form action="{{route('productUpdate')}}" method="post" class="" enctype="multipart/form-data" id="addstaff">
                            <div class="form">
                                <div class="nameinput">ten san pham</div>
                                <input type="text" name="name_pd" value="{{$it->name_pd}}" class="input_user">
                                @error('name_pd')
                                    <span class="error">{{$message}}</span>
                                @enderror
                                <div class="nameinput">so luong san pham con</div>
                                <input type="text" name="quantity_pd" value="{{$it->quantity_pd}}" class="input_user">
                                @error('quantity_pd')
                                    <span class="error">{{$message}}</span>
                                @enderror
                                <div class="nameinput">so luong san pham da ban</div>
                                <input type="text" name="sold_pd" value="{{$it->sold_pd}}" class="input_user">
                                @error('sold_pd')
                                    <span class="error">{{$message}}</span>
                                @enderror
                                <div class="nameinput">hinh anh san pham da ban</div>
                                <input type="file" name="image_pd" value="{{$it->image_pd}}" class="input_user">
                                @error('image_pd')
                                    <span class="error">{{$message}}</span>
                                @enderror
                                <div class="nameinput">gia san pham</div>
                                <input type="fload" name="price_pd" value="{{$it->price_pd}}" class="input_user">
                                @error('price_pd')
                                    <span class="error">{{$message}}</span>
                                @enderror
                                <div class="nameinput">mo ta san pham</div>
                                <input type="text" name="describe_pd"value="{{$it->describe_pd}}" class="input_user">
                                @error('describe_pd')
                                    <span class="error">{{$message}}</span>
                                @enderror
                                @endforeach
                                @endif
                                <input type="hidden" name="_method" value="post" class="hear_f">
                                <input type="hidden" name="_token" value="{{csrf_token()}}" class="tk">
                            </div>
                            <button type="submit" class="btn_input">update pproduct</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection