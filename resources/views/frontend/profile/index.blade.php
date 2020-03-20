
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
                            <li class="active">
                                <a href="#">پروفایل طراح </a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">پروفایل طراح</h1>
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
        START AUTHOR AREA
    =================================-->
    <section class="author-profile-area dir-rtl">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <aside class="sidebar sidebar_author">
                        <div class="author-card sidebar-card">
                            <div class="author-infos">
                                <div class="author_avatar">
                                    <img src="{{asset('assets/images/new/author-avatar.jpg')}}" alt="Presenting the broken author avatar :D">
                                </div>

                                <div class="author">
                                    <h4>دامن دریا </h4>
                                    <p>شرع از :1 فروردین 98</p>
                                </div>
                                <!-- end /.author -->

                                <div class="author-badges">
                                    <ul class="list-unstyled">
                                        <li>
                                            <span data-toggle="tooltip" data-placement="bottom" title="Diamnond Author">
                                                <img src="{{asset('assets/images/new/svg/author_rank_diamond.svg')}}" alt="" class="svg">
                                            </span>
                                        </li>
                                        <li>
                                            <span data-toggle="tooltip" data-placement="bottom" title="Has sold more than $10k">
                                                <img src="{{asset('assets/images/new/svg/author_level_3.svg')}}" alt="" class="svg">
                                            </span>
                                        </li>
                                        <li>
                                            <span data-toggle="tooltip" data-placement="bottom" title="Referred 10+ members">
                                                <img src="{{asset('assets/images/new/svg/affiliate_level_1.svg')}}" alt="" class="svg">
                                            </span>
                                        </li>
                                        <li>
                                            <span data-toggle="tooltip" data-placement="bottom" title="Has Collected 2+ Items">
                                                <img src="{{asset('assets/images/new/svg/collection_level_1.svg')}}" alt="" class="svg">
                                            </span>
                                        </li>
                                        <li>
                                            <span data-toggle="tooltip" data-placement="bottom" title="Exclusive Author">
                                                <img src="{{asset('assets/images/new/svg/exclusive_author.svg')}}" alt="" class="svg">
                                            </span>
                                        </li>
                                        <li>
                                            <span data-toggle="tooltip" data-placement="bottom" title="Weekly Featured Author">
                                                <img src="{{asset('assets/images/new/svg/featured_author.svg')}}" alt="" class="svg">
                                            </span>
                                        </li>
                                        <li>
                                            <span data-toggle="tooltip" data-placement="bottom" title="Member for 2 Year">
                                                <img src="{{asset('assets/images/new/svg/members_years.svg')}}" alt="" class="svg">
                                            </span>
                                        </li>
                                        <li>
                                            <span data-toggle="tooltip" data-placement="bottom" title="The seller is recommended by authority">
                                                <img src="{{asset('assets/images/new/svg/recommended.svg')}}" alt="" class="svg">
                                            </span>
                                        </li>
                                        <li>
                                            <span data-toggle="tooltip" data-placement="bottom" title="Won a contest">
                                                <img src="{{asset('assets/images/new/svg/contest_winner.svg')}}" alt="" class="svg">
                                            </span>
                                        </li>
                                        <li>
                                            <span data-toggle="tooltip" data-placement="bottom" title="Helped to resolve copyright issues">
                                                <img src="{{asset('assets/images/new/svg/copyright.svg')}}" alt="" class="svg">
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end /.author-badges -->

                                <div class="social social--color--filled">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span class="fa fa-facebook"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="fa fa-twitter"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="fa fa-dribbble"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end /.social -->

                                <div class="author-btn">
                                    <a href="#" class="btn btn--md btn--round">دنبال کردن </a>
                                </div>
                                <!-- end /.author-btn -->
                            </div>
                            <!-- end /.author-infos -->


                        </div>
                        <!-- end /.author-card -->

                        <div class="sidebar-card author-menu">
                            <ul>
                                <li>
                                    <a href="#" class="active">پروفایل</a>
                                </li>
                                <li>
                                    <a href="author-items.html">آیتم های طراح </a>
                                </li>
                                <li>
                                    <a href="author-reviews.html">نظرات مشتریان</a>
                                </li>
                                <li>
                                    <a href="author-followers.html">دنبال کنندگان (67)</a>
                                </li>
                                <li>
                                    <a href="author-following.html">دنبال کردن (39)</a>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.author-menu -->

                        <div class="sidebar-card freelance-status">
                            <div class="custom-radio">
                                <input type="radio" id="opt1" class="" name="filter_opt" checked>
                                <label for="opt1">
                                    <span class="circle"></span>در دسترس برای کار آزاد</label>
                            </div>
                        </div>
                        <!-- end /.author-card -->

                        <div class="sidebar-card message-card">
                            <div class="card-title">
                                <h4>ارتباط با طراح</h4>
                            </div>

                            <div class="message-form">
                                <form action="#">
                                    <div class="form-group">
                                        <textarea name="message" class="text_field" id="author-message" placeholder="پیغام شما ..."></textarea>
                                    </div>

                                    <div class="msg_submit">
                                        <button type="submit" class="btn btn--md btn--round">ارسال پیغام </button>
                                    </div>
                                </form>
                                <p> لطفا برای تماس با این طراح
                                    <a href="#">وارد</a> شوید .</p>
                            </div>
                            <!-- end /.message-form -->
                        </div>
                        <!-- end /.freelance-status -->
                    </aside>
                </div>
                <!-- end /.sidebar -->

                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="author-info mcolorbg4">
                                <p>مجموع آیتم ها</p>
                                <h3>4,369</h3>
                            </div>
                        </div>
                        <!-- end /.col-md-4 -->

                        <div class="col-md-4 col-sm-4">
                            <div class="author-info pcolorbg">
                                <p>مجموع فروش </p>
                                <h3>36,957</h3>
                            </div>
                        </div>
                        <!-- end /.col-md-4 -->

                        <div class="col-md-4 col-sm-4">
                            <div class="author-info scolorbg">
                                <p>مجموع امتیازها</p>
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
                                            <span class="fa fa-star-half-o"></span>
                                        </li>
                                    </ul>
                                    <span class="rating__count">(26)</span>
                                </div>
                            </div>
                        </div>
                        <!-- end /.col-md-4 -->

                        <div class="col-md-12 col-sm-12">
                            <div class="author_module">
                                <img src="images/new/authcvr.jpg" alt="author image">
                            </div>

                            <div class="author_module about_author">
                                <h2>درباره
                                    <span>دامن دریا </span>
                                </h2>
                                <p class="text-justify">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>
                                <p  class="text-justify">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>
                            </div>
                        </div>
                    </div>
                    <!-- end /.row -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="product-title-area">
                                <div class="product__title">
                                    <h2>محصولات جدید</h2>
                                </div>

                                <a href="#" class="btn btn--sm">مشاهده تمام موارد </a>
                            </div>
                            <!-- end /.product-title-area -->
                        </div>
                        <!-- end /.col-md-12 -->

                        <!-- start .col-md-4 -->
                        <div class="col-lg-6 col-md-6">
                            <!-- start .single-product -->
                            <div class="product product--card product--card-small">

                                <div class="product__thumbnail">
                                    <img src="{{asset('assets/images/new/p1.jpg')}}" alt="Product Image">
                                    <div class="prod_btn">
                                        <a href="single-product.html" class="transparent btn--sm btn--round">اطلاعات بیشتر </a>
                                        <a href="single-product.html" class="transparent btn--sm btn--round">مشاهده </a>
                                    </div>
                                    <!-- end /.prod_btn -->
                                </div>
                                <!-- end /.product__thumbnail -->

                                <div class="product-desc">
                                    <a href="#" class="product_title">
                                        <h4>قالب شخصی مشاور </h4>
                                    </a>
                                    <ul class="titlebtm">
                                        <li>
                                            <img class="auth-img" src="{{asset('assets/images/new/auth3.jpg')}}" alt="author image">
                                            <p>
                                                <a href="#">دامن دریا </a>
                                            </p>
                                        </li>
                                        <li class="out_of_class_name">
                                            <div class="sell">
                                                <p>
                                                    <span class="lnr lnr-cart"></span>
                                                    <span>27</span>
                                                </p>
                                            </div>
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
                                                        <span class="fa fa-star-half-o"></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>

                                </div>
                                <!-- end /.product-desc -->

                                <div class="product-purchase">
                                    <div class="price_love">
                                        <span>250 تومان </span>
                                    </div>
                                    <a href="#">
                                        <span class="lnr lnr-book"></span>افزونه </a>
                                </div>
                                <!-- end /.product-purchase -->
                            </div>
                            <!-- end /.single-product -->
                        </div>
                        <!-- end /.col-md-4 -->

                        <!-- start .col-md-4 -->
                        <div class="col-lg-6 col-md-6">
                            <!-- start .single-product -->
                            <div class="product product--card product--card-small">

                                <div class="product__thumbnail">
                                    <img src="{{asset('assets/images/new/p1.jpg')}}" alt="Product Image">
                                    <div class="prod_btn">
                                        <a href="single-product.html" class="transparent btn--sm btn--round">اطلاعات بیشتر </a>
                                        <a href="single-product.html" class="transparent btn--sm btn--round">مشاهده </a>
                                    </div>
                                    <!-- end /.prod_btn -->
                                </div>
                                <!-- end /.product__thumbnail -->

                                <div class="product-desc">
                                    <a href="#" class="product_title">
                                        <h4>قالب شخصی مشاور </h4>
                                    </a>
                                    <ul class="titlebtm">
                                        <li>
                                            <img class="auth-img" src="{{asset('assets/images/new/auth3.jpg')}}" alt="author image">
                                            <p>
                                                <a href="#">دامن دریا </a>
                                            </p>
                                        </li>
                                        <li class="out_of_class_name">
                                            <div class="sell">
                                                <p>
                                                    <span class="lnr lnr-cart"></span>
                                                    <span>27</span>
                                                </p>
                                            </div>
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
                                                        <span class="fa fa-star-half-o"></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>

                                </div>
                                <!-- end /.product-desc -->

                                <div class="product-purchase">
                                    <div class="price_love">
                                        <span>250 تومان </span>
                                    </div>
                                    <a href="#">
                                        <span class="lnr lnr-book"></span>افزونه </a>
                                </div>
                                <!-- end /.product-purchase -->
                            </div>
                            <!-- end /.single-product -->
                        </div>
                        <!-- end /.col-md-4 -->

                        <!-- start .col-md-4 -->
                        <div class="col-lg-6 col-md-6">
                            <!-- start .single-product -->
                            <div class="product product--card product--card-small">

                                <div class="product__thumbnail">
                                    <img src="{{asset('assets/images/new/p1.jpg')}}" alt="Product Image">
                                    <div class="prod_btn">
                                        <a href="single-product.html" class="transparent btn--sm btn--round">اطلاعات بیشتر </a>
                                        <a href="single-product.html" class="transparent btn--sm btn--round">مشاهده </a>
                                    </div>
                                    <!-- end /.prod_btn -->
                                </div>
                                <!-- end /.product__thumbnail -->

                                <div class="product-desc">
                                    <a href="#" class="product_title">
                                        <h4>قالب شخصی مشاور </h4>
                                    </a>
                                    <ul class="titlebtm">
                                        <li>
                                            <img class="auth-img" src="{{asset('assets/images/new/auth3.jpg')}}" alt="author image">
                                            <p>
                                                <a href="#">دامن دریا </a>
                                            </p>
                                        </li>
                                        <li class="out_of_class_name">
                                            <div class="sell">
                                                <p>
                                                    <span class="lnr lnr-cart"></span>
                                                    <span>27</span>
                                                </p>
                                            </div>
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
                                                        <span class="fa fa-star-half-o"></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>

                                </div>
                                <!-- end /.product-desc -->

                                <div class="product-purchase">
                                    <div class="price_love">
                                        <span>250 تومان </span>
                                    </div>
                                    <a href="#">
                                        <span class="lnr lnr-book"></span>افزونه </a>
                                </div>
                                <!-- end /.product-purchase -->
                            </div>
                            <!-- end /.single-product -->
                        </div>
                        <!-- end /.col-md-4 -->

                        <!-- start .col-md-4 -->
                        <div class="col-lg-6 col-md-6">
                            <!-- start .single-product -->
                            <div class="product product--card product--card-small">

                                <div class="product__thumbnail">
                                    <img src="{{asset('assets/images/new/p1.jpg')}}" alt="Product Image">
                                    <div class="prod_btn">
                                        <a href="single-product.html" class="transparent btn--sm btn--round">اطلاعات بیشتر </a>
                                        <a href="single-product.html" class="transparent btn--sm btn--round">مشاهده </a>
                                    </div>
                                    <!-- end /.prod_btn -->
                                </div>
                                <!-- end /.product__thumbnail -->

                                <div class="product-desc">
                                    <a href="#" class="product_title">
                                        <h4>قالب شخصی مشاور </h4>
                                    </a>
                                    <ul class="titlebtm">
                                        <li>
                                            <img class="auth-img" src="{{asset('assets/images/new/auth3.jpg')}}" alt="author image">
                                            <p>
                                                <a href="#">دامن دریا </a>
                                            </p>
                                        </li>
                                        <li class="out_of_class_name">
                                            <div class="sell">
                                                <p>
                                                    <span class="lnr lnr-cart"></span>
                                                    <span>27</span>
                                                </p>
                                            </div>
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
                                                        <span class="fa fa-star-half-o"></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>

                                </div>
                                <!-- end /.product-desc -->

                                <div class="product-purchase">
                                    <div class="price_love">
                                        <span>250 تومان </span>
                                    </div>
                                    <a href="#">
                                        <span class="lnr lnr-book"></span>افزونه </a>
                                </div>
                                <!-- end /.product-purchase -->
                            </div>
                            <!-- end /.single-product -->
                        </div>
                        <!-- end /.col-md-4 -->
                    </div>
                    <!-- end /.row -->
                </div>
                <!-- end /.col-md-8 -->

            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END AUTHOR AREA
    =================================-->


    <section class="call-to-action bgimage dir-rtl">
        <div class="bg_image_holder">
            <img src="images/new/calltobg.jpg" alt="">
        </div>
        <div class="container content_above">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-wrap">
                        <h1 class="text--white">آماده پیوستن به ما هستید !</h1>
                        <h4 class="text--white">بیش از 25،000 طراح و توسعهدهنده به ما اعتماد دارند.</h4>
                        <a href="#" class="btn btn--lg btn--round btn--white callto-action-btn">امروز به ما بپیوندید</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================================
        END CALL TO ACTION AREA
    =================================-->










@endsection