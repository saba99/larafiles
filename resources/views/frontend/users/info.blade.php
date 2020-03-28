@extends('frontend.layout.master')


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
                                <a href="dashboard.html">اطلاعات حساب کاربری</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">اطلاعات حساب کاربری</h1>
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
                                <a href="customer-dashboard.html">
                                    <span class="lnr lnr-briefcase"></span>سابقه خرید</a>
                            </li>
                            <li >
                                <a href="customer-downloads.html">
                                    <span class="lnr lnr-download"></span>دانلود ها </a>
                            </li>
                            <li class="active">
                                <a href="customer-info.html">
                                    <span class="lnr lnr-cog"></span>اطلاعات حساب </a>
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

                <form action="{{route('users.post.info')}}"  method="POST" class="setting_form">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="information_module">
                                <a class="toggle_title">
                                    <h4>اطلاعات شخصی </h4>
                                </a>

                                <div class="information__set toggle_module">
                                    <div class="information_wrapper form--fields">
                                        <div class="form-group">
                                            <label for="name">نام </label>
                                            <input type="text" name="name" id="name" class="text_field" placeholder="نام" value="">
                                        </div>

                                        <div class="form-group">
                                            <label for="emailad">ایمیل</label>
                                            <input type="text"  name="email" id="emailad" class="text_field" placeholder="amir.d79@yahoo.com" value="">
                                        </div>
                                    </div>
                                    <!-- end /.information_wrapper -->
                                </div>
                                <!-- end /.information__set -->
                            </div>
                            <!-- end /.information_module -->

                            <div class="information_module">
                                <a class="toggle_title">
                                    <h4>تغییر آدرس </h4>
                                </a>

                                <div class="information__set toggle_module">
                                    <div class="information_wrapper form--fields">
                                        <div class="form-group">
                                            <label for="address1">آدرس </label>
                                            <input type="text" id="address1" name="address" class="text_field" placeholder="">
                                        </div>

                                  

                                        <div class="form-group">
                                            <label for="city">شهر
                                                <sup>*</sup>
                                            </label>
                                            <select name="city" id="city" class="text_field">
                                                @foreach($city as $city)
                                                <option value="{{$city->id}}">{{$city->name}}</option>
                                                
                                                @endforeach
                                            </select>
                                        </div>
                                          <div class="form-group">
                                            <label for="province">استان
                                                <sup>*</sup>
                                            </label>
                                            <select name="province" id="province" class="text_field">
                                                @foreach($province  as $province )
                                                <option value="{{$province->id}}">{{$province->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="zipcode">کد پستی
                                                <sup>*</sup>
                                            </label>
                                            <input type="text"  name="post_code" id="zipcode" class="text_field" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="country">کشور
                                                <sup>*</sup>
                                            </label>
                                            <select name="country" id="country" class="text_field">
                                                <option value="">هیچ کدام </option>
                                                <option value="1">ایران</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- end /.information__set -->
                            </div>
                            <!-- end /.information_module -->

                            <div class="dashboard_setting_btn">
                                <button type="submit" class="btn btn--round btn--md">ذخیره تغییرات</button>
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
            END DASHBOARD AREA
    =================================-->



@endsection