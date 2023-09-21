<div class="check_email">
    <div class="text_box">
        <h2 class="head_notification">< xin chao {{$user->name}}/h2>
        <p class="text_notification">
            chao ban {{$user->name}}, ma co hieu luc trong 20 gio
        </p>
        <p class="text_notification">
            <a href="{{route('getPassword',['user'=>$user->id,'token'=>$user->token])}}" class="link_password">
                link lay lai password
            </a>
        </p>
        <h3>nhan vien cong ty</h3>
    </div>
</div>