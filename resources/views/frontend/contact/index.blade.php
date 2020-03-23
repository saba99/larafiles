@extends('frontend.layout.master')


@section('content')

<!--================================
    START BREADCRUMB AREA
=================================-->
<section class="breadcrumb-area breadcrumb--center breadcrumb--smsbtl dir-rtl">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page_title">
                    <h3>ارتباط با ما</h3>
                    <p class="subtitle">جای درستی آمدی</p>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li>
                            <a href="index.html">خانه</a>
                        </li>
                        <li class="active">
                            <a href="#">ارتباط با ما</a>
                        </li>
                    </ul>
                </div>
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
    START AFFILIATE AREA
=================================-->
<section class="contact-area section--padding dir-rtl">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <!-- start col-md-12 -->
                    <div class="col-md-12">
                        <div class="section-title">
                            <h1>چطور میتوانیم
                                <span class="highlighted">کمک</span>   کنیم؟
                            </h1>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                        </div>
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="contact_tile">
                            <span class="tiles__icon lnr lnr-map-marker"></span>
                            <h4 class="tiles__title">آدرس دفتر</h4>
                            <div class="tiles__content">
                                <p>ایران ، یزد ، کاشانی </p>
                            </div>
                        </div>
                    </div>
                    <!-- end /.col-lg-4 col-md-6 -->

                    <div class="col-lg-4 col-md-6">
                        <div class="contact_tile">
                            <span class="tiles__icon lnr lnr-phone"></span>
                            <h4 class="tiles__title">تلفن </h4>
                            <div class="tiles__content">
                                <p>98901-32-34-324 + </p>
                                <p>98901-235-81-97 + </p>
                            </div>
                        </div>
                        <!-- end /.contact_tile -->
                    </div>
                    <!-- end /.col-lg-4 col-md-6 -->

                    <div class="col-lg-4 col-md-6">
                        <div class="contact_tile">
                            <span class="tiles__icon lnr lnr-inbox"></span>
                            <h4 class="tiles__title">ایمیل</h4>
                            <div class="tiles__content">
                                <p>AMIR.D79@YAHOO.COM</p>

                            </div>
                        </div>
                        <!-- end /.contact_tile -->
                    </div>
                    <!-- end /.col-lg-4 col-md-6 -->

                    <div class="col-md-12">
                        <div class="contact_form cardify">
                            <div class="contact_form__title">
                                <h3>پیغام خود را بنویسید </h3>
                            </div>

                            <div class="row">
                                <div class="col-md-8 offset-md-2">
                                    <div class="contact_form--wrapper">
                                        <form  action="{{route('frontend.post.contact')}}"   method="post">
                                             @csrf 
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input id="fname"  name="first_name" type="text" placeholder="نام ">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input id="lname" name="last_name" type="text" placeholder="نام خانوادگی">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="email" name="email" placeholder="ایمیل">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" name="phone" placeholder="تلفن ">
                                                    </div>
                                                </div>
                                            </div>

                                            <textarea cols="30" rows="10" name="description" placeholder="متن خود را بنویسید "></textarea>

                                            <div class="sub_btn">
                                                <button type="submit" class="btn btn--round btn--default">ارسال </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- end /.col-md-8 -->
                            </div>
                            <!-- end /.row -->
                        </div>
                        <!-- end /.contact_form -->
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->
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
        START
=================================-->
<div id="map"></div>
<!-- end /.map -->
<!--================================
        END FAQ AREA
=================================-->











@endsection