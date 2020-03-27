
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
                            <a href="#">خانه</a>
                        </li>

                        <li class="active" >
                            <a href="#">سبد خرید</a>
                        </li>
                    </ul>
                </div>
                <h1 class="page-title">سبد خرید </h1>
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
    <section class="cart_area section--padding2 bgcolor dir-rtl">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product_archive added_to__cart">
                        <div class="title_area text-center">
                            <div class="row">
                                 {{-- <div class="col-md-2">  
                                    <span>شناسه</span>
                                </div>  --}}
                                <div class="col-md-4">
                                    <h6>محدودیت دانلود روزانه</h6>
                                </div>
                                <div class="col-md-2">
                                    <h5 class="add_info">تعداد روز ها</h5>
                                </div>
                                <div class="col-md-2">
                                    <h5 class="add_info">عنوان</h5>
                                </div>
                                <div class="col-md-2">
                                    <h5>قیمت </h5>
                                </div>
                                
                                <div class="col-md-2">
                                    <h4>حذف</h4>
                                </div>
                            </div>
                        </div>

                        <div class="row text-center">
                            <div class="col-md-12">
                                <div class="single_product clearfix">
                                    <div class="col-lg-5 col-md-7 v_middle">
                                       
                                        <div class="product__description">
                                            {{-- <img src="images/new/pur1.jpg" alt="Purchase image"> --}}
                                            {{-- <div class="short_desc "> --}}
                                                <tr>
                                                  <td>
                                                       <a href="single-product.html">
                                                  {{$plan->plan_limit_download_count}}    
                                                </a>
                                                 
                                            </td>
                                                 <td> <a style="padding-right: 280px;margin-right:50px;">
                                                       {{$plan->plans_days_count}}  
                                                 </a></td>
                                                
                                            {{-- </div> --}}
                                        </div>
                                       
                                        <!-- end /.product__description -->
                                    </div>
                                    
                                    <!-- end /.col-md-5 -->

                                    <div class="col-lg-3 col-md-2 v_middle">
                                        <div class="product__additional_info">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        
                                                        {{$plan->plan_title}}
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- end /.product__additional_info -->
                                    </div>
                                    <!-- end /.col-md-3 -->
                                    

                                    <div class="col-lg-4 col-md-3 v_middle">
                                        <div class="product__price_download">
                                            <div class="item_price v_middle">
                                                <span>{{number_format($plan->plan_price)}} تومان</span>
                                            </div>
                                            <div class="item_action v_middle">
                                                <a href="#" class="remove_from_cart">
                                                    <span class="lnr lnr-trash"></span>
                                                </a>
                                            </div>
                                            <!-- end /.item_action -->
                                        </div>
                                        <!-- end /.product__price_download -->
                                    </div>
                                    <!-- end /.col-md-4 -->
                                </div>
                                <!-- end /.single_product -->
                            </div>
                        
                    </div>
                        <!-- end /.row -->
 
                    <div class="row mt-4">
                            <div class="col-md-6 offset-md-6">
                                {{--  <form action="{{route('frontend.subscribes.register',$plan->id)}}" method="post">   --}}
                                    <form action="{{route('order.verify')}}" method="post"> 
                                    {{--  <form action="{{route('payment.start',$plan->id)}}" method="post">  --}}
                                    @csrf
                                    <input type="hidden"  name="plan_id" value="{{$plan->id}}">
                                <div class="cart_calculation">
                                    <div class="cart--subtotal">
                                        <p>
                                            <span>زیرمجموعه سبد خرید</span>120 تومان</p>
                                    </div>
                                    <div class="cart--total">
                                        <p>
                                            <span>مجموع</span>120 تومان </p>
                                    </div>

                                    {{-- <a href="checkout.html" class="btn btn--round btn--md checkout_link">ادامه به پرداخت</a> --}}
                                     <button  class="btn btn--round btn--md checkout_link"  type="submit">
                                        خرید این طرح 
                                      </button>
                                       
                                </div>
                            </form>
                            </div>
                         
                            <!-- end .col-md-12 -->
                        </div>
                        <!-- end .row -->
                    </div>
                    <!-- end /.product_archive2 -->
                </div>
                <!-- end .col-md-12 -->
            </div>
            <!-- end .row -->

        </div>
        <!-- end .container -->
    </section>
    <!--================================
            END DASHBOARD AREA
    =================================-->







@endsection