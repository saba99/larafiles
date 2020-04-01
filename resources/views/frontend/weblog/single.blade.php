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
                        <li class="active">
                            <a href="#">صفحه پست </a>
                        </li>
                    </ul>
                </div>
                <h1 class="page-title">صفحه پست </h1>
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
        START LOGIN AREA
=================================-->
<section class="blog_area section--padding2 dir-rtl">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="single_blog blog--default">
                    <article>
                        <figure>
                            <img src="{{$posts->photo->path}}" alt="Blog image">
                        </figure>
                        <div class="blog__content">
                            <a href="#" class="blog__title">
                                <h4>وردپرس چیست؟</h4>
                            </a>

                            <div class="blog__meta mt-3">
                                <div class="author">
                                    <span class="lnr lnr-user"></span>
                                    <p>خرید از
                                        <a href="#">دامن دریا </a>
                                    </p>
                                </div>
                                <div class="date_time">
                                    <span class="lnr lnr-clock"></span>
                                    <p> 17 آبان 1397
                                    </p>
                                </div>
                                <div class="comment_view">
                                    <p class="comment">
                                        <span class="lnr lnr-bubble"></span>45</p>
                                    <p class="view">
                                        <span class="lnr lnr-eye"></span>345</p>
                                </div>
                            </div>
                        </div>

                        <div class="single_blog_content">
                            <p>
                               {{ ($posts->description) }} 
                                    </p>
                            <blockquote>


                                وردپرس با زبان برنامه نویسی قدرتمند و محبوب پی‌اچ‌پی (Php) نوشته شده است که توسط مای‌اس‌‌کیو‌ال (My Sql) پشتیبانی می‌شود، وردپرس یک نرم افزار تحت وب متن باز (Open Source) هست که بر مبنای اجازه نامه جی‌پی‌ال (GPL) منتشر می‌شود که در نتیجه اجازه نامه همه موارد استفاده از وردپرس کاملا رایگان می‌باشد که شما با خیال راحت می‌توانید تغییرات خود را بر روی وردپرس و کدهای آن اعمال نمایید.

                            </blockquote>

                            <h2>آیا همه اعضای تیم وردپرس در یک مکان فعالیت می‌کنند؟
                            </h2>
                            <p>در پاسخ به این پرسش می‌توان گفت تیم وردپرس کاملا مجازی می‌باشد، به این معنا که اعضای تیم وردپرس در نقاط گوناگون جهان هستند و مکان‌های آنلاینی نیز وجود دارد که اعضا می‌توانند در آنجا فعالیت کنند، برای نمونه در core.trac.wordpress.org می‌توانند اشکالات را گزارش و یا آن‌ها را رفع نمایند و یا در مستندات آنلاین وردپرس فعالیت کنند زمانی که عضوی در این مکان‌ها بصورت فعال حضور دارد کم‌کم شناخته شده و اگر واقعا نقش مفیدی را ایجاد کند توسط مدیران وردپرس برای پیوستن به تیم از او دعوت می‌شود، از همین رو در سراسر جهان پروژه متن باز وردپرس مورد استقبال کاربران قرار گرفت که در پی آن افرادی که به متن باز (Open Source) علاقه داشتند بصورت داوطلبانه فعالیت خود را برای توسعه و گسترش وردپرس آغاز کردند.

                            </p>
                            <h2>رقبای اصلی وردپرس کدام سیستم مدیریت محتواها هستند؟

                            </h2>
                            <ol>
                                <li>Drupal </li>
                                <li>Joomla</li>
                                <li>TYPO3</li>
                                <li>Wix</li>
                                <li>SquareSpace</li>
                            </ol>

                            <h1>چگونگی پیدایش وردپرس در ایران
                            </h1>
                            <img src="images/new/blogimg.jpg" alt="Blog image">

                            <p>در کشور عزیزمان ایران هم از اولین استفاده کنندگان وردپرس در بین وبلاگ نویسان ایرانی به وبلاگ‌های محسن طالب، گناهکار، virtual life و الوان‌وب می‌توان اشاره کرد. از همان زمان تلاش‌ها برای فارسی‌سازی وردپرس با ارایه فایل ترجمه زبان و پوسته‌های فارسی وردپرس توسط آقایان مانی منجمی، گناهکار، علی ستاری، مزدک آقاخانی مقدم، کامبیز مظفری، نوید کاشانی، بهرنگ یار احمدی، سعید زبردست، علی ایرانی، محمد میهن خواه و مهرداد رجبی آغاز شد که در همین راستا اعضای تیم وردپرس فارسی را می‌توان به عنوان پیش‌گامان و پیش‌تازان در فارسی سازی واژه‌های انگلیسی مرسوم در جهان مجازی و نیز رواج دادن واژه‌های پارسی به جای استفاده از واژه‌های عربی در بین کاربران اینترنتی معرفی کرد.</p>
                            <img src="images/new/nmg.jpg" alt="">

                            <h3>پشتیبانی وردپرس در ایران
                            </h3>
                            <p>با بالا رفتن آمار استفاده‌کنندگان وردپرس فارسی همان‌طور که انتظار می‌رفت تقاضاها نیز برای پشتیبانی از سیستم مدیریت محتوای وردپرس بیشتر شد که در طی این سال‌ها، پشتیبانی از وردپرس فارسی به بهترین شکل ممکن صورت گرفت و در همین راستا وظیفه‌ی خود دانستیم از طرف جمع کاربران وردپرس فارسی از زحمات گرانقدر آقایان : ایمان فخار، مرتضی گرانسایه، مصطفی صوفی، محسن غیاثی، پارسا کافی، مرتضی راکی (NESTED)، عبدالماجد شه بخش و سعید فرد که بدون هیچ گونه چشم داشت مادی در انجمن‌های پشتیبانی وردپرس پارسی فعالیت و همواره با صبر و شکیبایی به پرسش‌های کاربران پاسخ می‌دهند سپاسگزاری و قدردانی نماییم.

                            </p>

                            <div class="share_tags">
                                <div class="share">
                                    <p>این اعلان را به اشتراک گذارید</p>
                                    <div class="social_share active">
                                        <ul class="social_icons">
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
                                                    <span class="fa fa-google-plus"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="fa fa-linkedin"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end social_share -->
                                </div>
                                <!-- end bog_share_ara  -->

                                <div class="tags">
                                    <ul>
                                        <li>
                                            <a href="#">طراحی</a>
                                        </li>
                                        <li>
                                            <a href="#">ورد پرس</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- end /.single_blog -->

                <div class="author_info">
                    <div class="author__img">
                        <img src="images/new/authi.jpg" alt="Auth Image">
                    </div>

                    <div class="author__info">
                        <h4>درباره نویسنه </h4>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.

                        </p>
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
                                    <span class="fa fa-google-plus"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-linkedin"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end /.author_info -->

                <div class="comment_area">
                    <div class="comment__title">
                        <h4>نظرات </h4>
                    </div>

                    <div class="comment___wrapper">
                        <ul class="media-list">
                             @foreach($comments as $comment)
                            <li class="depth-1">
                                <div class="media">
                                    <div class="pull-right no-pull-xs">
                                        <a href="#" class="cmnt_avatar">
                                            <img src="/assets/images/new/comavatar.jpg" class="media-object" alt="Sample Image">
                                        </a>
                                    </div>
                                    <div class="media-body" >
                                        <div class="media_top">
                                            <div class="heading_left pull-right">
                                                <a href="#">
                                                   <h4 class="media-heading"></h4>
                                                </a>
                                                <span></span>
                                            </div>
                                            <a href="#" class="reply hidden-xs-m pull-left">پاسخ </a>
                                        </div>
                                        <p>
                                     {{$comment->description}}
                                        </p>
                                        <a href="#" class="reply visible-xs-m  pull-left">پاسخ </a>
                                    </div>
                                </div>

                                <ul class="children">
                                    <!-- Nested media object -->
                                    <li class="depth-2">
                                        <div class="media">
                                            <div class="pull-right no-pull-xs">
                                                <a href="#" class="cmnt_avatar">
                                                    <img src="/assets/images/new/comavatar2.jpg" class="media-object" alt="Sample Image">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="media_top">
                                                    <div class="heading_left pull-right">
                                                        <a href="#">
                                                            <h4 class="media-heading">کاربر تست </h4>
                                                        </a>
                                                        <span>1 فروردین 98</span>
                                                    </div>
                                                    <a href="#" class="reply hidden-xs-m pull-left">
                                                        پاسخ
                                                    </a>
                                                </div>
                                                <p>{{$comment->description}}

                                                </p>
                                                <a href="#" class="reply visible-xs-m pull-left">پاسخ </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            @endforeach 
                        </ul>
                    </div>
                    <!-- end /.comment___wrapper -->
                </div>
                <!-- end /.col-md-8 -->

                <div class="comment_area comment--form">
                    <!-- start reply_form -->
                    <div class="comment__title">
                        <h4>نظر خود را بنویسید </h4>
                    </div>
                    <div class="commnet_form_wrapper">
                        <div class="row">
                            <!-- start form -->
                            <form class="cmnt_reply_form" action="{{route('post.comment',$comment->id)}}" method="post">
                               @csrf
                               <input type="hidden" name="package_id" >
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="input_field" name="description" placeholder="متن خود را بنویسید " rows="10" cols="80"></textarea>
                                    </div>

                                    <button type="submit" class="btn btn--round btn--default" name="btn">ثبت نظر </button>
                                </div>
                            </form>
                            <!-- end form -->
                        </div>
                    </div>
                    <!-- end /.commnet_form_wrapper -->
                </div>
                <!-- end /.comment_area_wrapper -->
            </div>
            <!-- end /.col-md-8 -->

            <div class="col-lg-4">
                @include('frontend.weblog.search',['query'])
                <!-- end /.aside -->
            </div>
            <!-- end /.col-md-4 -->

        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>
<!--================================
        END LOGIN AREA
=================================-->












@endsection
