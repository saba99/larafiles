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
                <h1 class="page-title">صورت حساب</h1>
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
                        <li class="active">
                            <a href="dashboard.html">
                                <span class="lnr lnr-home"></span>داشبورد </a>
                        </li>
                        <li>
                            <a href="{{route('user.info')}}">
                                <span class="lnr lnr-cog"></span>اطلاعات حساب کاربری</a>
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
                        <div class="pull-right">
                            <div class="dashboard__title">
                                <h3>صورت حساب</h3>
                            </div>
                        </div>

                        <div class="pull-left">
                            <a href="#" class="btn btn--round print_btn">
                                <span class="lnr lnr-printer"></span>چاپ </a>
                            <a href="#" class="btn btn--round btn--sm">دانلود </a>
                        </div>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <div class="row">
                <div class="col-md-12">
                    
                    <div class="invoice">
                        <div class="invoice__head">
                            <div class="invoice_logo">
                                <img src="/images/new/logo.png" alt="">
                            </div>

                            <div class="info">
                                <h4>جزئیات صورت حساب </h4>
                                <p>سفارش با کد  185626</p>
                            </div>
                        </div>
                        <!-- end /.invoice__head -->

                        <div class="invoice__meta ">
                            <div class="address">
                                <h5 class="bold">{{$order->user->name}} </h5>
                                <p>  </p>
                               
                                <p>ایران </p>
                            </div>

                            <div class="date_info">
                                <p>
                                    <span>تاریخ صورت حساب </span>{{$order->created_at}}</p>
                                <p>
                                    <span>تاریخ تحویل</span>21 فروردین 98</p>
                                <p class="status">
                                    <span>وضعیت </span>فروش </p>
                            </div>
                        </div>
                        <!-- end /.invoice__meta -->

                        <div class="invoice__detail">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>تاریخ </th>
                                        <th>کاربر</th>
                                        <th>عنوان پکیج</th>
                                       
                                        <th>کد پستی </th>
                                        <th>مجموع </th>
                                    </tr>
                                    </thead>


                                    <tbody>
                                    <tr>
                                        <td>20 فروردین 98</td>
                                        <td class="author">{{$order->user->name}}</td>
                                        <td class="detail">
                                            <a href="#">{{$order->packages[0]->package_title}} </a>
                                        </td>
                                        <td>{{$order->user->addresses[0]->post_code}}</td>
                                        <td> {{$order->packages[0]->package_price}} تومان </td>
                                       
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="pricing_info">
                                <p>تخفیف : 0 تومان </p>
                                <p class="bold">مجموع : {{$order->amount}}</p>
                            </div>
                        </div>
                        <!-- end /.invoice_detail -->
                    </div>
                    
                    <!-- end /.invoice -->


                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </div>
    <!-- end /.dashboard_menu_area -->
</section>
<!--================================
        END DASHBOARD AREA
=================================-->


@endsection

