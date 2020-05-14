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
                            <a href="dashboard.html">داشبورد </a>
                        </li>
                    </ul>
                </div>
                <h1 class="page-title">خرید ها </h1>
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
<section class="dashboard-area dashboard_purchase dir-rtl">
    <div class="dashboard_menu_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="dashboard_menu">
                        <li >
                            <a href="dashboard.html">
                                <span class="lnr lnr-home"></span>داشبورد </a>
                        </li>
                        <li>
                            <a href="dashboard-setting.html">
                                <span class="lnr lnr-cog"></span>تنظیمات</a>
                        </li>
                        <li class="active">
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
                    <div class="filter-bar clearfix filter-bar2">

                        <div class="dashboard__title pull-right">
                            <h3>خرید های شما </h3>
                        </div>

                        <div class="pull-left">
                            <div class="filter__option filter--text">
                                <p>
                                    <span>230</span> محصولات خریداری شده</p>
                            </div>

                            <div class="filter__option filter--select">
                                <div class="select-wrap">
                                    <select name="price">
                                        <option value="low">قیمت  :از کم به زیاد </option>
                                        <option value="high">قیمت : از زیاد به کم </option>
                                    </select>
                                    <span class="lnr lnr-chevron-down"></span>
                                </div>
                            </div>
                            <div class="filter__option filter--select">
                                <div class="select-wrap">
                                    <select name="price">
                                        <option value="12">12 مورد در هر صفحه </option>
                                        <option value="15">15 مورد در هر صفحه </option>
                                        <option value="25">25  مورد در هر صفحه </option>
                                    </select>
                                    <span class="lnr lnr-chevron-down"></span>
                                </div>
                            </div>
                        </div>
                        <!-- end /.pull-right -->
                    </div>
                    <!-- end /.filter-bar -->
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <div class="product_archive">
                <div class="title_area">
                    <div class="row">
                        <div class="col-md-5">
                            <h4>عنوان</h4>
                        </div>
                        <div class="col-md-3">
                            <h4 class="add_info">کاربر</h4>
                        </div>
                        <div class="col-md-2">
                            <h4>اولویت </h4>
                        </div>
                        <div class="col-md-2">
                            <h4>وضعیت </h4>
                        </div>
                        <div class="col-md-2">
                            <h4>دانلود </h4>
                        </div>
                    </div>
                </div>

                <div class="row">
                    

                    <div class="col-md-12">
                        <div class="single_product clearfix">
                            <div class="row">
                                <div class="col-lg-5 col-md-5">
                                    <div class="product__description">
                                        <img src="/assets/images/new/pur2.jpg" alt="Purchase image">
                                        <div class="short_desc">
                                            <h4>{{$ticket->title}}</h4>
                                            <p>{{$ticket->text}}</p>
                                        </div>
                                    </div>
                                    <!-- end /.product__description -->
                                </div>
                                <!-- end /.col-md-5 -->

                                <div class="col-lg-3 col-md-3 col-6 xs-fullwidth">
                                    <div class="product__additional_info">
                                        <ul>
                                            <li>
                                                <p>
                                                    <span>تاریخ : </span> 17 اردیبهشت 97</p>
                                            </li>
                                            <li class="license">
                                                <p>
                                                    <span>مجوز:</span> ---</p>
                                            </li>
                                            <li>
                                                <p>
                                                    <span>طراح :</span> دامن دریا </p>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="images/new/catword.png" alt="">ورد پرس </a>
                                            </li>
                                        </ul>                                    </div>
                                    <!-- end /.product__additional_info -->
                                </div>
                                <!-- end /.col-md-3 -->

                                <div class="col-lg-4 col-md-4 col-6 xs-fullwidth">
                                    <div class="product__price_download">
                                        <div class="item_price v_middle">
                                            <span>39 تومان </span>
                                        </div>
                                        <div class="item_action v_middle">
                                            @if($ticket->hasFile())
                           
                         <a href="{{$ticket->file()}}" class="btn btn--md btn--round">دانلود </a>

                                   @endif
                                           
                                            <a href="#" class="btn btn--md btn--round btn--white rating--btn">
                                                <div class="rating product--rating">
                                                    <ul>
                                                        <li>
                                                            <span class="fa fa-star"></span>
                                                        </li>
                                                        <li>
                                                            <span class="fa fa-star"></span>
                                                        </li>
                                                        <li>
                                                            <span class="fa fa-star"></span>
                                                        </li>
                                                        <li>
                                                            <span class="fa fa-star"></span>
                                                        </li>
                                                        <li>
                                                            <span class="fa fa-star"></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>
                                            <!-- end /.rating_btn -->
                                        </div>
                                        <!-- end /.item_action -->
                                    </div>
                                    <!-- end /.product__price_download -->
                                </div>
                                <!-- end /.col-md-4 -->
                            </div>
                        </div>
                        <!-- end /.single_product -->
                    </div>
              
                  

                  

                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.product_archive2 -->
        </div>
        <!-- end /.container -->
    </div>
    <!-- end /.dashboard_menu_area -->
</section>
<!--================================
        END DASHBOARD AREA
=================================-->








@endsection