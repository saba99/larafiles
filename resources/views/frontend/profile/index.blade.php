
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
                           
                            <!-- end /.author-infos -->


                        </div>
                        <!-- end /.author-card -->

                        <div class="sidebar-card author-menu">
                            <ul>
                                <li>
                                    <a href="#" class="active">پروفایل</a>
                                </li>
                                <li>
                                    <a href="author-items.html">سفارش های من</a>
                                </li>
                                <li>
                                    <a href="author-reviews.html">دانلود های من </a>
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