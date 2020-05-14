@extends('frontend.layout.master')


@section('styles')

<link rel="stylesheet" href="{{asset('assets/css/dropzone.css')}}">

@endsection 

@section('content')
                  


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
                            <a href="dashboard.html">داشبورد </a>
                        </li>
                    </ul>
                </div>
                <h1 class="page-title">داشبورد طراح </h1>
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
        START DASHBOARD AREA
=================================-->
<section class="dashboard-area dir-rtl">
    <div class="dashboard_menu_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="dashboard_menu">
                        <li >
                            <a href="dashboard.html">
                                <span class="lnr lnr-home"></span>داشبورد </a>
                        </li>
                        <li class="active">
                            <a href="dashboard-setting.html">
                                <span class="lnr lnr-cog"></span>تنظیمات</a>
                        </li>
                        <li>
                            <a href="dashboard-purchase.html">
                                <span class="lnr lnr-cart"></span>خرید
                                 
                            </a>
                        </li>
                        <li>
                            <a href="dashboard-add-credit.html">
                                <span class="lnr lnr-dice"></span>اضافه کردن اعتبار</a>
                        </li>
                        <li>
                            <a href="dashboard-statement.html">
                                <span class="lnr lnr-chart-bars"></span>بیانیه ها</a>
                        </li>
                        <li>
                            <a href="dashboard-upload.html">
                                <span class="lnr lnr-upload"></span>آپلود </a>
                        </li>
                        <li>
                            <a href="dashboard-manage-item.html">
                                <span class="lnr lnr-briefcase"></span>مدیریت آیتم</a>
                        </li>
                        <li>
                            <a href="dashboard-withdrawal.html">
                                <span class="lnr lnr-briefcase"></span>خروج</a>
                        </li>
                    </ul>
                    <!-- end /.dashboard_menu -->
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </div>
    <!-- end /.dashboard_menu_area -->

    <div class="dashboard_contents">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="dashboard_title_area">
                        <div class="dashboard__title">
                            <h3>تنظیمات حساب</h3>
                        </div>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <form action="#" class="setting_form">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="information_module">
                            <a class="toggle_title" href="#collapse2" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse1">
                                <h4>اطلاعات شخصی
                                    <span class="lnr lnr-chevron-down"></span>
                                </h4>
                            </a>

                            <div class="information__set toggle_module collapse show" id="collapse2">
                                <div class="information_wrapper form--fields">
                                    <div class="form-group">
                                        <label for="acname">نام حساب
                                            <sup>*</sup>
                                        </label>
                                        <input type="text" id="acname" class="text_field" placeholder="First Name" value="دامن دریا ">
                                    </div>

                                    <div class="form-group">
                                        <label for="usrname">نام کاربری
                                            <sup>*</sup>
                                        </label>
                                        <input type="text" id="usrname" class="text_field" placeholder="Account name" value="دامن دریا ">

                                    </div>

                                    <div class="form-group">
                                        <label for="emailad">ایمیل
                                            <sup>*</sup>
                                        </label>
                                        <input type="text" id="emailad" class="text_field" placeholder="Email address" value="amir.d79@yahoo.com">
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="password">کلمه عبور
                                                    <sup>*</sup>
                                                </label>
                                                <input type="password" id="password" class="text_field" placeholder="">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="conpassword">تاییدیه کلمه عبور
                                                    <sup>*</sup>
                                                </label>
                                                <input type="password" id="conpassword" class="text_field" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="website">وب سایت </label>
                                        <input type="password" id="website" class="text_field" placeholder="وب سایت ">
                                    </div>

                                    <div class="form-group">
                                        <label for="country">کشور
                                            <sup>*</sup>
                                        </label>
                                        <div class="select-wrap select-wrap2">
                                            <select name="country" id="country" class="text_field">
                                                <option value="">هیچ کدام </option>
                                                <option value="1">ایران </option>

                                            </select>
                                            <span class="lnr lnr-chevron-down"></span>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="prohead">سرصفحه مشخصات</label>
                                        <input type="text" id="prohead" class="text_field" placeholder="برای مثال : طراحی وب و خدمات توسعه">
                                    </div>

                                    <div class="form-group">
                                        <label for="authbio">نویسنده Bio</label>
                                        <textarea name="author_bio" id="authbio" class="text_field" placeholder="مختصر در مورد خود و یا حساب خود ..."></textarea>
                                    </div>
                                </div>
                                <!-- end /.information_wrapper -->
                            </div>
                            <!-- end /.information__set -->
                        </div>
                        <!-- end /.information_module -->

                        <div class="information_module">
                            <a class="toggle_title" href="#collapse1" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse1">
                                <h4>اطلاعات صورت حساب
                                    <span class="lnr lnr-chevron-down"></span>
                                </h4>
                            </a>

                            <div class="information__set toggle_module collapse" id="collapse1">
                                <div class="information_wrapper form--fields">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="first_name">نام
                                                    <sup>*</sup>
                                                </label>
                                                <input type="text" id="first_name" class="text_field" placeholder="نام " value="">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="last_name">نام خانواگی
                                                    <sup>*</sup>
                                                </label>
                                                <input type="text" id="last_name" class="text_field" placeholder="نام خانوادگی " value="">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end /.row -->

                                    <div class="form-group">
                                        <label for="email">نام شرکت
                                            <sup>*</sup>
                                        </label>
                                        <input type="text" id="email" class="text_field" placeholder="" value="">
                                    </div>

                                    <div class="form-group">
                                        <label for="email1">ایمیل
                                            <sup>*</sup>
                                        </label>
                                        <input type="text" id="email1" class="text_field" placeholder="ایمیل" value="">
                                    </div>

                                    <div class="form-group">
                                        <label for="country1">کشور
                                            <sup>*</sup>
                                        </label>
                                        <div class="select-wrap select-wrap2">
                                            <select name="country" id="country" class="text_field">
                                                <option value="">هیچ کدام </option>
                                                <option value="1">ایران </option>
                                            </select>
                                            <span class="lnr lnr-chevron-down"></span>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="address1">آدرس1</label>
                                        <input type="text" id="address1" class="text_field" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label for="address2">آدرس 2</label>
                                        <input type="text" id="address2" class="text_field" placeholder="">
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="city">شهر
                                                    <sup>*</sup>
                                                </label>
                                                <div class="select-wrap select-wrap2">
                                                    <select name="city" id="city" class="text_field">
                                                        <option value="">هیچ کدام </option>

                                                    </select>
                                                    <span class="lnr lnr-chevron-down"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="zipcode">کد پستی
                                                    <sup>*</sup>
                                                </label>
                                                <input type="text" id="zipcode" class="text_field" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end /.information__set -->
                        </div>
                        <!-- end /.information_module -->
                    </div>
                    <!-- end /.col-md-6 -->

                    <div class="col-lg-6">
                        <div class="information_module">
                            <a class="toggle_title" href="#collapse3" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse1">
                                <h4>تصویر نمایه
                                    <span class="lnr lnr-chevron-down"></span>
                                </h4>
                            </a>
                           <form method="post"  action="{{route('profile.upload')}}"  enctype="multipart/form-data">
                            <div class="information__set profile_images toggle_module collapse" id="collapse3">
                                <div class="information_wrapper">
                                    <div class="profile_image_area">
                                     
                                        <img src="" alt="Author profile area">
                                        <div class="img_info">
                                            <p class="bold">تصویر پروفایل</p>
                                            <p class="subtitle">ابعاد (100*100)</p>
                                        </div>
                                         <div class="form-group">
                                        <label for="cover_photo" class="upload_btn">
                                            <input type="file" name="filename" id="cover_photo">
                                           </div>
                                        </label> 
                                        <div class="form-group">
                                        <button class="btn btn--sm btn--round" type="submit" >آپلود تصویر </span>
                                       </div>
                                    </div>
                                </form>
                                    
                                    <form  action="{{route('profile.dropzone')}}" method="post" class="dropzone">
                                    {{-- <div class="prof_img_upload">
                                        <p class="bold">تصویر </p>
                                        <img src="/assets/images/new/cvrplc.jpg" alt="The great warrior of China">

                                        <div class="upload_title">
                                            <p>تصویر کاور </p>
                                            <label for="dp" class="upload_btn">
                                                <input type="file" id="dp">
                                                <span class="btn btn--sm btn--round" aria-hidden="true">آپلود تصویر </span>
                                            </label>
                                        </div>
                                    </div> --}}
                                </form>
                                </div>
                            </div>
                        </div>
                        <!-- end /.information_module -->

                        <div class="information_module">
                            <a class="toggle_title" href="#collapse5" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse1">
                                <h4>شبکه های مجازی
                                    <span class="lnr lnr-chevron-down"></span>
                                </h4>
                            </a>

                            <div class="information__set social_profile toggle_module collapse " id="collapse5">
                                <div class="information_wrapper">
                                    <div class="social__single">
                                        <div class="social_icon">
                                            <span class="fa fa-facebook"></span>
                                        </div>

                                        <div class="link_field">
                                            <input type="text" class="text_field" placeholder="برای مثال: www.facebook.com/damandarya">
                                        </div>
                                    </div>
                                    <!-- end /.social__single -->

                                    <div class="social__single">
                                        <div class="social_icon">
                                            <span class="fa fa-twitter"></span>
                                        </div>

                                        <div class="link_field">
                                            <input type="text" class="text_field" placeholder="برای مثال : www.twitter.com/damandarya">
                                        </div>
                                    </div>
                                    <!-- end /.social__single -->

                                    <div class="social__single">
                                        <div class="social_icon">
                                            <span class="fa fa-google-plus"></span>
                                        </div>

                                        <div class="link_field">
                                            <input type="text" class="text_field" placeholder="برای مثال : www.google.com/damandarya">
                                        </div>
                                    </div>
                                    <!-- end /.social__single -->

                                    <div class="social__single">
                                        <div class="social_icon">
                                            <span class="fa fa-behance"></span>
                                        </div>

                                        <div class="link_field">
                                            <input type="text" class="text_field" placeholder="برای مثال : www.behance.com/damandarya">
                                        </div>
                                    </div>
                                    <!-- end /.social__single -->

                                    <div class="social__single">
                                        <div class="social_icon">
                                            <span class="fa fa-dribbble"></span>
                                        </div>

                                        <div class="link_field">
                                            <input type="text" class="text_field" placeholder="برای مثال : www.dribbble.com/damandarya">
                                        </div>
                                    </div>
                                    <!-- end /.social__single -->
                                </div>
                                <!-- end /.information_wrapper -->
                            </div>
                            <!-- end /.social_profile -->
                        </div>
                        <!-- end /.information_module -->

                        <div class="information_module">
                            <a class="toggle_title" href="#collapse4" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse1">
                                <h4>تنظیمات ایمیل
                                    <span class="lnr lnr-chevron-down"></span>
                                </h4>
                            </a>

                            <div class="information__set mail_setting toggle_module collapse" id="collapse4">
                                <div class="information_wrapper">
                                    <div class="custom_checkbox">
                                        <input type="checkbox" id="opt1" class="" name="mail_rating_reminder" checked>
                                        <label for="opt1">
                                            <span class="shadow_checkbox"></span>
                                            <span class="radio_title">یادآورهای رتبه</span>
                                            <span class="desc">ارسال یک ایمیل به من یادآوری برای ارزیابی یک مورد پس از خرید</span>
                                        </label>
                                    </div>
                                    <!-- end /.custom-radio -->
                                    <div class="custom_checkbox">
                                        <input type="checkbox" id="opt1" class="" name="mail_rating_reminder" checked>
                                        <label for="opt1">
                                            <span class="shadow_checkbox"></span>
                                            <span class="radio_title">یادآورهای رتبه</span>
                                            <span class="desc">ارسال یک ایمیل به من یادآوری برای ارزیابی یک مورد پس از خرید</span>
                                        </label>
                                    </div>
                                    <!-- end /.custom-radio -->
                                    <div class="custom_checkbox">
                                        <input type="checkbox" id="opt1" class="" name="mail_rating_reminder" checked>
                                        <label for="opt1">
                                            <span class="shadow_checkbox"></span>
                                            <span class="radio_title">یادآورهای رتبه</span>
                                            <span class="desc">ارسال یک ایمیل به من یادآوری برای ارزیابی یک مورد پس از خرید</span>
                                        </label>
                                    </div>
                                    <!-- end /.custom-radio -->
                                    <div class="custom_checkbox">
                                        <input type="checkbox" id="opt1" class="" name="mail_rating_reminder" checked>
                                        <label for="opt1">
                                            <span class="shadow_checkbox"></span>
                                            <span class="radio_title">یادآورهای رتبه</span>
                                            <span class="desc">ارسال یک ایمیل به من یادآوری برای ارزیابی یک مورد پس از خرید</span>
                                        </label>
                                    </div>
                                    <!-- end /.custom-radio -->
                                    <div class="custom_checkbox">
                                        <input type="checkbox" id="opt1" class="" name="mail_rating_reminder" checked>
                                        <label for="opt1">
                                            <span class="shadow_checkbox"></span>
                                            <span class="radio_title">یادآورهای رتبه</span>
                                            <span class="desc">ارسال یک ایمیل به من یادآوری برای ارزیابی یک مورد پس از خرید</span>
                                        </label>
                                    </div>
                                    <!-- end /.custom-radio -->
                                    <div class="custom_checkbox">
                                        <input type="checkbox" id="opt1" class="" name="mail_rating_reminder" checked>
                                        <label for="opt1">
                                            <span class="shadow_checkbox"></span>
                                            <span class="radio_title">یادآورهای رتبه</span>
                                            <span class="desc">ارسال یک ایمیل به من یادآوری برای ارزیابی یک مورد پس از خرید</span>
                                        </label>
                                    </div>
                                    <!-- end /.custom-radio -->    <div class="custom_checkbox">
                                    <input type="checkbox" id="opt1" class="" name="mail_rating_reminder" checked>
                                    <label for="opt1">
                                        <span class="shadow_checkbox"></span>
                                        <span class="radio_title">یادآورهای رتبه</span>
                                        <span class="desc">ارسال یک ایمیل به من یادآوری برای ارزیابی یک مورد پس از خرید</span>
                                    </label>
                                </div>
                                    <!-- end /.custom-radio -->



                                </div>
                                <!-- end /.information_wrapper -->
                            </div>
                            <!-- end /.information_module -->
                        </div>
                        <!-- end /.information_module -->
                    </div>
                    <!-- end /.col-md-6 -->

                    <div class="col-md-12">
                        <div class="dashboard_setting_btn">
                            <button type="submit" class="btn btn--round btn--md">ذخیره تغیرات</button>
                        </div>
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->
            </form>
            <!-- end /form -->
        </div>
        <!-- end /.container -->
    </div>
    <!-- end /.dashboard_menu_area -->
</section>
<!--================================






@endsection


@section('scripts')

<script src="{{asset('assets/js/dropzone.min.js')}}"></script>

@endsection 