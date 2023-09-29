<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('/base.css') }}">
    <link rel="stylesheet" href="{{ url('/style.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <title>@yield('title') - quan ly nhan su</title>
</head>
<body>
    <div class="app">
        <header class="header_ad">
            <div class="grid">
                <nav class="navbar_ad">
                    <div class="navbar_list_ad">
                        <div class="navbar_item_ad"><h1>Quan Ly Nhan Su</h1></div>
                    </div>
                    <div class="start_ad">
                        <div class="navbar_list_ad">
                            <div class="navbar_item_ad">
                                <a href="{{route('homeAdmin')}}" class="navbar_link iconlg">
                                    <span class="navbar_icon_ad">Home</span>
                                </a>
                            </div>
                        </div>
                        <div class="navbar_list_ad">
                            <div class="navbar_item_ad">
                                @if (Auth::check())
                                <a href="{{route('adminInformation',['id'=>Auth::User()->id])}}" class="navbar_link iconlg">
                                    <span class="navbar_icon_ad">{{Auth::User()->name}}</span>
                                    @endif
                                </a>
                            </div>
                        </div>
                        <div class="box_search_ad">
                            <form method="get" action="{{route('productName')}}" class="search_ad">
                                <div class="contain_search_ad">
                                    <div class="form_search_ad">
                                        <div class="search_name_ad">
                                            <input tytle="text" name="key_word" class="search_label_ad" placeholder=" Ten San Pham">
                                        </div>
                                        <div class="boxx_btn">
                                            <button role="button" tytle="submit" class="search_button_ad">Tim Kiem</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <div class="container_ad">
            <div class="category_ad">
                <div class="category_list_ad">
                    <ul class="category_ad_list">
                        <a href="{{route('homeAdmin')}}" class="category_link_ad">
                            <li class="category_item_ad">
                                tong quan 
                            </li>
                        </a>    
                        <a href="{{route('create')}}" class="category_link_ad">
                            <li class="category_item_ad">
                                tao tai khoan
                            </li>
                        </a>
                        <a href="{{route('product')}}" class="category_link_ad">
                            <li class="category_item_ad">
                                san pham
                            </li>
                        </a>
                        <a href="" class="category_link_ad">
                            <li class="category_item_ad">
                                nhan vien
                            </li>
                        </a>
                        <a href="{{route('changePassword')}}" class="category_link_ad">
                            <li class="category_item_ad">
                                thay doi mat khau
                            </li>
                        </a>
                        <a href="{{route('editPersonnel',['id'=>Auth::user()->id])}}" class="category_link_ad">
                            <li class="category_item_ad">
                                chinh sua thong tin 
                            </li>
                        </a>
                        <li class="category-">
                            <form action="{{route('logOut')}}" method="post">
                                @csrf
                                <button type="submit">
                                    dang xuat
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
                @yield('conten_ad')
            </div>
        </div>
    </div>
</body>
</html>