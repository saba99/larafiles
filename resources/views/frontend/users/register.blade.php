{{--@extends('frontend.layouts.frontend')--}}

@extends('frontend.layout.master')
@section('content')


{{--<div class="col-xs-12 col-md-12 mt-4">


<div class="card">
    <div class="card-header alert-info">
       ورود به سایت 
    </div>
    <div class="card-body">
        @if(session('registerErr'))
<div calss="alert alert-danger">
<p>{{session('registerErr')}}</p>

</div>
        @endif
        <div class="row">
            <div class="col-xs-12 col-md-6 col-md-offset-3">
    <form method="post" action="{{route('account.post.register')}}">
            @csrf
             <div class="form-group">
    <label for="exampleInputEmail1">نام</label>
    <input type="text"  name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">ایمیل</label>
    <input type="email"  name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">رمز ورود</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
 
  <button type="submit" class="btn btn-success mt-3">ثبت نام </button>
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
                            <a href="dashboard.html">ثبت نام </a>
                        </li>
                    </ul>
                </div>
                <h1 class="page-title">ثبت نام </h1>
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
            START SIGNUP AREA
    =================================-->
    <section class="signup_area section--padding2 dir-rtl">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <form method="post" action="{{route('account.post.register')}}" >
                      @csrf
                        <div class="cardify signup_form">
                            <div class="login--header">
                                <h3>ایجاد حساب کاربری</h3>
                                <p>لطفا موارد زیر را با دقت تکمیل کنید.
                                </p>
                            </div>
                            <!-- end .login_header -->

                            <div class="login--form">

                                <div class="form-group">
                                    <label for="urname">نام </label>
                                    <input id="urname" name="name" type="text" class="text_field" placeholder="">
                                </div>

                                <div class="form-group">
                                    <label for="email_ad">ایمیل</label>
                                    <input id="email_ad" name="email" type="email" class="text_field" placeholder="">
                                </div>

                               {{--<div class="form-group">
                                    <label for="user_name">نام کاربری </label>
                                    <input id="user_name" name="username" type="text" class="text_field" placeholder="">
                                </div>--}} 

                                <div class="form-group">
                                    <label for="password">کلمه عبور </label>
                                    <input id="password" type="password" class="text_field" placeholder="">
                                </div>

                                {{-- <div class="form-group"> --}}
                                    {{-- <label for="con_pass">تایید رمز عبور</label> --}}
                                    {{-- <input id="con_pass" type="text" class="text_field" placeholder=""> --}}
                                {{-- </div> --}}

                                <button class="btn btn--md btn--round register_btn" type="submit">ثبت نام</button>

                                <div class="login_assist">
                                    <p>قبلا حساب کاربری ایجاد کرده اید ؟
                                        <a href="{{route('account.login')}}">ورود</a>
                                    </p>
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
            END SIGNUP AREA
    =================================-->

    <!--================================
@endsection