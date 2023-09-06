<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('/base.css') }}">
    <link rel="stylesheet" href="{{ url('/style.css') }}">
    <title>@yield('title') - quan ly nhan su</title>
</head>
<body>
    <div class="app">
        <header class="header">
            <div class="grid">
                <nav class="navbar">
                    <div class="navbar_list">
                        <div class="navbar_item"><h1>Quan Ly Nhan Su</h1></div>
                    </div>
                    <div class="navbar_list_1">
                        <div class="navbar_item">
                            <a href="" class="navbar_link iconlg">
                                <span class="navbar_icon">Gioi Thieu</span>
                            </a>
                        </div>
                        <div class="navbar_item">
                            <a href="" class="navbar_link iconlg">
                                <span class="navbar_icon">Tin Tuc</span>
                            </a>
                        </div>
                        <div class="navbar_item">
                            <a href="" class="navbar_link iconlg">
                                <span class="navbar_icon">San Pham</span>
                            </a>
                        </div>
                        <div class="navbar_item">
                            <!--dung ham route de goi url bang name route-->
                            <a href="{{route('login')}}" class="navbar_link iconlg">
                                <span class="navbar_icon">Dang Nhap</span>
                            </a>
                        </div>
                    </div>
                </nav>
                <div class="start">
                    <div class="box_search">
                        <form method="get" action="{{route('nameproduct')}}" class="search">
                            <div class="contain_search">
                                <h3 class="slogan_search">Hay Tim Kiem Va Tan Huong </h3>
                                <div class="form_search">
                                    <div class="search_name">
                                        <input tytle="text" name="name_pd" class="search_label" placeholder=" Ten San Pham">
                                    </div>
                                    <input type="hidden" name="_method" value="get" class="hear_f">
                                    <input type="hidden" name="_token" value="<?php echo csrf_token()?>" class="tk">
                                    <button role="button" tytle="submit" class="search_button">Tim Kiem</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="category row">
                @yield('conten')
            </div>
        </div>
        <footer class="footer">
            <div class="box_footer">
                <div class="footer_list">
                    <div class="footer_item">
                        Gioi Thieu
                    </div>
                    <div class="footer_item">
                        Thong Tin Lien He
                    </div>
                    <div class="footer_item">
                        Ket Noi
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>