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
                                <a href="dashboard.html">سابقه خرید</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">سابقه خرید</h1>
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
                                <a href="customer-dashboard.html">
                                    <span class="lnr lnr-briefcase"></span>سابقه خرید</a>
                            </li>
                            <li class="active">
                                <a href="customer-downloads.html">
                                    <span class="lnr lnr-download"></span>دانلود ها </a>
                            </li>
                            <li>
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
                        <div class="modules__content">
                            <div class="table_module">
                                <div class="table_header">
                                    <h3>سابقه سفارشات</h3>
                                </div>
                                <div class="table-responsive">
                                    <table class="table withdraw__table">
                                        <thead>
                                            <tr>
                                                <th>پکیج</th>
                                                <th>لینک</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($orders as $order)
                                            <tr>
                                                <td>{{$order->packages[0]->package_title}}</td>
                                                <td class="bold">
                                                    <a href="{{route('invoices.lists',['id'=>$order->id])}}">نمایش</a>
                                                </td>
                                            </tr>
                                               @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.dashboard_menu_area -->
    </section>
    <!--================================
            END DASHBOARD AREA
    =================================-->

    <!--================================





@endsection