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
                                <a href="dashboard.html">انجمن پشتیبانی </a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">انجمن پشتیبانی </h1>
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
    <section class="support_threads_area section--padding2 dir-rtl">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="forum_detail_area ">
                        <div class="cardify forum--issue">
                            <div class="title_vote clearfix">
                                <h3>پاسخگو وب سایت منو بالا و پایین</h3>

                                <div class="vote">
                                    <a href="#">
                                        <span class="lnr lnr-thumbs-up"></span>
                                    </a>
                                    <a href="#">
                                        <span class="lnr lnr-thumbs-down"></span>
                                    </a>
                                </div>
                                <!-- end .vote -->
                            </div>
                            <!-- end .title_vote -->
                            <div class="suppot_query_tag">
                                <a href="#" class="user">
                                    <img class="poster_avatar" src="images/new/support_avat1.png" alt="Support Avatar"> علی تقی پور</a>
                                <span>درخواست 3 هفنه قبل </span>
                                <span class="support_tag">موضوع بحث</span>
                            </div>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                        </div>
                        <!-- end .forum_issue -->


                        <div class="forum--replays cardify">
                            <div class="area_title">
                                <h4>3 پاسخ </h4>
                            </div>
                            <!-- end .area_title -->

                            <div class="forum_single_reply">
                                <div class="reply_avatar">
                                    <img src="images/new/notification_head2.png" alt="reply avatar">
                                </div>

                                <div class="reply_content">
                                    <div class="name_vote">
                                        <div class="pull-right">
                                            <h4>دامن دریا
                                                    <span>مدیر </span>
                                            </h4>
                                            <p>پاسخ داده شده 3 روز پیش</p>
                                        </div>
                                        <!-- end .pull-left -->

                                        <div class="vote">
                                            <a href="#" class="active">
                                                <span class="lnr lnr-thumbs-up"></span>
                                            </a>
                                            <a href="#" class="">
                                                <span class="lnr lnr-thumbs-down"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end .vote -->
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.  </p>
                                </div>
                                <!-- end .reply_content -->
                            </div>
                            <!-- end .forum_single_reply -->
                            <div class="forum_single_reply">
                                <div class="reply_avatar">
                                    <img src="images/new/notification_head2.png" alt="reply avatar">
                                </div>

                                <div class="reply_content">
                                    <div class="name_vote">
                                        <div class="pull-right">
                                            <h4>دامن دریا
                                                <span>مدیر </span>
                                            </h4>
                                            <p>پاسخ داده شده 3 روز پیش</p>
                                        </div>
                                        <!-- end .pull-left -->

                                        <div class="vote">
                                            <a href="#" class="active">
                                                <span class="lnr lnr-thumbs-up"></span>
                                            </a>
                                            <a href="#" class="">
                                                <span class="lnr lnr-thumbs-down"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end .vote -->
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.  </p>
                                </div>
                                <!-- end .reply_content -->
                            </div>
                            <!-- end .forum_single_reply -->
                            <div class="forum_single_reply">
                                <div class="reply_avatar">
                                    <img src="images/new/notification_head2.png" alt="reply avatar">
                                </div>

                                <div class="reply_content">
                                    <div class="name_vote">
                                        <div class="pull-right">
                                            <h4>دامن دریا
                                                <span>مدیر </span>
                                            </h4>
                                            <p>پاسخ داده شده 3 روز پیش</p>
                                        </div>
                                        <!-- end .pull-left -->

                                        <div class="vote">
                                            <a href="#" class="active">
                                                <span class="lnr lnr-thumbs-up"></span>
                                            </a>
                                            <a href="#" class="">
                                                <span class="lnr lnr-thumbs-down"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end .vote -->
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.  </p>
                                </div>
                                <!-- end .reply_content -->
                            </div>
                            <!-- end .forum_single_reply -->


                            <div class="comment-form-area">
                                <h4>پیام بگذارید</h4>
                                <!-- comment reply -->
                               
                                <div class="media comment-form support__comment">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object" src="images/new/m7.png" alt="Commentator Avatar">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <form action="{{route('ticket.create')}}" class="comment-reply-form">
                                            <div id="trumbowyg-demo"></div>
                                            <button class="btn btn--sm btn--round">ارسال نظر </button>
                                        </form>
                                    </div>
                                </div>
                                <!-- comment reply -->
                            </div>
                        </div>
                        <!-- end .forum_replays -->
                    </div>
                    <!-- end .forum_detail_area -->
                </div>
                <!-- end .col-md-8 -->

                <div class="col-lg-4">
                    <aside class="sidebar support--sidebar">
                        <a href="login.html" class="login_promot">
                            <span class="lnr lnr-lock"></span>برای پرسش وارد شوید </a>

                        <div class="sidebar-card card--forum_categories">
                            <div class="card-title">
                                <h4>دسته بندی انجمن</h4>
                            </div>
                            <div class="collapsible-content">
                                <ul class="card-content">
                                    <li>
                                        <a href="#">
                                            <span class="lnr lnr-chevron-right"></span>وردپرس
                                            <span class="item-count">35</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="lnr lnr-chevron-right"></span>پشتیبانی مرکزی
                                            <span class="item-count"> 45</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="lnr lnr-chevron-right"></span>موضوعات عمومی
                                            <span class="item-count">13</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="lnr lnr-chevron-right"></span>پیش فروش
                                            <span class="item-count">08</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="lnr lnr-chevron-right"></span>خرید
                                            <span class="item-count">34</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="lnr lnr-chevron-right"></span>صورتحساب
                                            <span class="item-count">78</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="lnr lnr-chevron-right"></span>مشتریان
                                            <span class="item-count">26</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end /.collapsible_content -->
                        </div>
                        <!-- end .card--forum_categories -->

                        <div class="sidebar-card card--top_discussion">
                            <div class="card-title">
                                <h4>بحث های برتر</h4>
                            </div>
                            <div class="collapsible-content">
                                <ul class="card-content">
                                    <li>
                                        <a href="#">
                                            <span></span>مشکل انتقال کمیسیون (12 ساعت)</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span></span>داشبورد به روزرسانی نمی شود (9 ساعت)</a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <span></span>لایحه مورد نیاز پس از خرید (3روز)</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span></span>چگونه تم را نصب کنیم؟ (7روز )
                                             
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class=""></span>فرم تماس با کار (9روز)</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end /.collapsible_content -->
                        </div>
                        <!-- end .card--forum_categories -->
                    </aside>
                    <!-- end .sidebar -->
                </div>
                <!-- end .col-md-4 -->
            </div>
            <!-- end .row -->
        </div>
        <!-- end .container -->
    </section>
    <!--================================
            END DASHBOARD AREA
    =================================-->

    <!--================================











@endsection