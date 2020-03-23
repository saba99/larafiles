{{-- @extends('frontend.layouts.frontend') --}}

@extends('frontend.layout.master')
@section('content')


{{--<div class="col-xs-12 col-md-12 mt-4">


<div class="card">
    <div class="card-header alert-info">
       ورود به سایت 
    </div>
    <div class="card-body">
        @if(session('loginErr'))
<div calss="alert alert-danger">
<p>{{session('loginErr')}}</p>

</div>
        @endif
        <div class="row">
          <div class="col-xs-12 col-md-6 col-md-offset-3">
        <form method="post" action="{{route('account.post.login')}}">
            @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">ایمیل</label>
    <input type="email"  name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">رمز ورود</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
   <div class="form-check">
    <input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">مرا به خاطر بسپار</label>
  </div> 
  <button type="submit" class="btn btn-primary mt-3">ذخیره</button>
</form>
          </div>
        </div>

    </div>
   
</div>

</div>--}}
<!--================================
    START BREADCRUMB AREA
=================================-->
<section class="breadcrumb-area dir-rtl">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb">
                    <ul>
                        <li>
                            <a href="index.html">خانه</a>
                        </li>
                        <li>
                            <a href="dashboard.html">ورود </a>
                        </li>
                    </ul>
                </div>
                <h1 class="page-title">ورود </h1>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>
<!--================================
    END BREADCRUMB AREA
=================================-->

<!--================================
        START LOGIN AREA
=================================-->
<section class="login_area section--padding2 dir-rtl">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <form method="post" action="{{route('account.post.login')}}">
                  @csrf
                    <div class="cardify login">
                        <div class="login--header">
                            <h3>خوش آمدید</h3>
                            <p>شما می توانید با نام کاربری خود وارد شوید</p>
                        </div>
                        <!-- end .login_header -->

                        <div class="login--form">
                            {{-- <div class="form-group">
                                <label for="user_name">نام کاربری</label>
                                <input id="user_name" type="text" class="text_field" placeholder="">
                            </div> --}}
                             <div class="form-group">
                        <label for="exampleInputEmail1">ایمیل</label>
                              <input type="email"  name="email" class="text_field" id="exampleInputEmail1" aria-describedby="emailHelp" >
  
                                       </div>
                            <div class="form-group">
                                <label for="pass">کلمه عبور </label>
                                <input id="pass" type="text" class="text_field" placeholder="">
                            </div>

                            <div class="form-group">
                                <div class="custom_checkbox">
                                    <input type="checkbox" name="remember" id="ch2">
                                    <label for="ch2">
                                        <span class="shadow_checkbox"></span>
                                        <span class="label_text">مرا به خاطر بسپار </span>
                                    </label>
                                </div>
                            </div>

                            <button class="btn btn--md btn--round" type="submit">ورود </button>
                             <a href="{{route('social-login.redirect','github')}}" class="btn btn--md  btn-warning btn--round" type="submit">ورود با گیت هاب </a>
                            <div class="login_assist">
                                <p class="recover">
                                    <a href="pass-recovery.html">نام کاربری </a> یا
                                    <a href="pass-recovery.html">کلمه عبور </a> فراموش کرده اید ؟</p>
                                <p class="signup">هنوز
                                    <a href="{{route('account.register')}}">ثبت نام </a>  نکرده اید ؟</p> 

                                   
                            </div>
                        </div>
                        <!-- end .login--form -->
                    </div>
                    <!-- end .cardify -->
                </form>
            </div>
            <!-- end .col-md-6 -->
        </div>
        <!-- end .row -->
    </div>
    <!-- end .container -->
</section>
<!--================================
        END LOGIN AREA
=================================-->


@endsection