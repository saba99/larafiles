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
                                <a href="index.html">خانه </a>
                            </li>
                            <li class="active">
                                <a href="#">طرح قیمت گذاری </a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">طرح قیمت گذاری </h1>
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
        START PRICING AREA
    =================================-->
    <section class="pricing_area section--padding dir-rtl">
        <div class="container">
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h1>
                            <span class="highlighted">قیمت</span>
                             عادلانه و ساده
                        </h1>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                    </div>
                    <!-- end /.section-title -->
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <div class="row"  style="justify-content: space-evenly">
                {{--  <div class="col-lg-4 col-md-6">  --}}
                    @foreach($plans as $plan)
                    <div class="pricing red">
                        <h4 class="pricing--title">{{$plan->plan_title}}</h4>
                        <p class="pricing--price">
                            <span class="ammount">{{number_format($plan->plan_price)}}تومان</span>/ماهیانه </p>

                        <div class="pricing--features">
                            <ul>
                                <li>
                                    عضویت <strong>3 ماه</strong>
                                </li>
                                <li>
                                    <strong> </strong>
                                    <span class="lnr lnr-question-circle" data-toggle="tooltip" data-placement="top" title="لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است."></span>
                                </li>
                               
                                <li>فضای مجاز  :  {{$plan->plan_limit_download_count}}</li>
                                <li>
                                    پشتیبانی فنی <strong>1 دامنه </strong>
                                    <span class="lnr lnr-question-circle" data-toggle="tooltip" data-placement="top" title="لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است."></span>
                                </li>
                               
                                <li>
                                    شامل <strong>دمو</strong>
                                    <span class="lnr lnr-question-circle" data-toggle="tooltip" data-placement="top" title="لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است."></span>
                                </li>
                                <li>نسخه ی نمایشی</li>
                            </ul>
                        </div>
                        <!-- end /.pricing--features -->

                        <a href="{{route('frontend.subscribes.index',$plan->id)}}" class="pricing--btn">خرید و شروع </a>
                        <!-- end /.pricing--btn -->
                    </div>
                    
                    <!-- end /.pricing -->
                {{--  </div>  --}}
                @endforeach
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END PRICING AREA
    =================================-->


    <!--================================
        START FOOTER AREA
    =================================-->






@endsection 