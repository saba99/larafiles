@extends('frontend.layout.master')


@section('content')

 <!--================================
        START BREADCRUMB AREA
    =================================-->
    
    @if(Session::has('success'))

<div class="alert alert-success">

  <ul class="list-unstyled">
    <li>{{Session('success')}}</li>
  </ul>
</div>

@endif

    <section class="breadcrumb-area dir-rtl">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb">
                        <ul>
                            <li>
                                <a href="#">خانه</a>
                            </li>
                            <li>
                                <a href="#">وردپرس</a>
                            </li>
                            <li class="active">
                                <a href="#">قالب وردپرس</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">وب پرس ، قالب چند فروشندگی وردپرس</h1>
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


    <!--============================================
        START SINGLE PRODUCT DESCRIPTION AREA
    ==============================================-->
    <section class="single-product-desc dir-rtl">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="item-preview">
                        <div class="item__preview-slider">
                            <div class="prev-slide">
                                <img src="/assets/images/new/itprv.jpg" alt="Keep calm this isn't the end of the world, the preview is just missing.">
                            </div>
                            <div class="prev-slide">
                                <img src="/assets/images/new/itprv.jpg" alt="Keep calm this isn't the end of the world, the preview is just missing.">
                            </div>
                            <div class="prev-slide">
                                <img src="/assets/images/new/itprv.jpg" alt="Keep calm this isn't the end of the world, the preview is just missing.">
                            </div>
                            <div class="prev-slide">
                                <img src="/assets/assets/images/new/itprv.jpg" alt="Keep calm this isn't the end of the world, the preview is just missing.">
                            </div>
                            <div class="prev-slide">
                                <img src="/assets/assets/images/new/itprv.jpg" alt="Keep calm this isn't the end of the world, the preview is just missing.">
                            </div>
                            <div class="prev-slide">
                                <img src="/assets/images/new/itprv.jpg" alt="Keep calm this isn't the end of the world, the preview is just missing.">
                            </div>
                            <div class="prev-slide">
                                <img src="/assets/images/new/itprv.jpg" alt="Keep calm this isn't the end of the world, the preview is just missing.">
                            </div>
                            <div class="prev-slide">
                                <img src="/assets/images/new/itprv.jpg" alt="Keep calm this isn't the end of the world, the preview is just missing.">
                            </div>
                            <div class="prev-slide">
                                <img src="/assets/images/new/itprv.jpg" alt="Keep calm this isn't the end of the world, the preview is just missing.">
                            </div>
                            <div class="prev-slide">
                                <img src="/assets/images/new/itprv.jpg" alt="Keep calm this isn't the end of the world, the preview is just missing.">
                            </div>
                        </div>
                        <!-- end /.item--preview-slider -->

                        <div class="item__preview-thumb">
                            <div class="prev-thumb">
                                <div class="thumb-slider">
                                    <div class="item-thumb">
                                        <img src="/assets/images/new/thumb1.jpg" alt="This is the thumbnail of the item">
                                    </div>
                                    <div class="item-thumb">
                                        <img src="/assets/images/new/thumb2.jpg" alt="This is the thumbnail of the item">
                                    </div>
                                    <div class="item-thumb">
                                        <img src="/assets/images/new/thumb3.jpg" alt="This is the thumbnail of the item">
                                    </div>
                                    <div class="item-thumb">
                                        <img src="/assets/images/new/thumb4.jpg" alt="This is the thumbnail of the item">
                                    </div>
                                    <div class="item-thumb">
                                        <img src="/assets/images/new/thumb5.jpg" alt="This is the thumbnail of the item">
                                    </div>
                                    <div class="item-thumb">
                                        <img src="/assets/images/new/thumb1.jpg" alt="This is the thumbnail of the item">
                                    </div>
                                    <div class="item-thumb">
                                        <img src="/assets/images/new/thumb2.jpg" alt="This is the thumbnail of the item">
                                    </div>
                                    <div class="item-thumb">
                                        <img src="/assets/images/new/thumb3.jpg" alt="This is the thumbnail of the item">
                                    </div>
                                    <div class="item-thumb">
                                        <img src="/assets/images/new/thumb4.jpg" alt="This is the thumbnail of the item">
                                    </div>
                                    <div class="item-thumb">
                                        <img src="/assets/images/new/thumb5.jpg" alt="This is the thumbnail of the item">
                                    </div>
                                </div>
                                <!-- end /.thumb-slider -->

                                <div class="prev-nav thumb-nav">
                                    <span class="lnr nav-right lnr-arrow-right"></span>

                                    <span class="lnr nav-left lnr-arrow-left"></span>
                                </div>
                                <!-- end /.prev-nav -->
                            </div>

                            <div class="item-action">
                                <div class="action-btns">
                                    <a href="#" class="btn btn--round btn--lg">مشاهده</a>
                                    <a href="#" class="btn btn--round btn--lg btn--icon">
                                        <span class="lnr lnr-heart"></span>افزودن به علاقه مندی ها </a>
                                </div>
                            </div>
                            <!-- end /.item__action -->
                        </div>
                        <!-- end /.item__preview-thumb-->


                    </div>
                    <!-- end /.item-preview-->

                    <div class="item-info">
                        <div class="item-navigation">
                            <ul class="nav nav-tabs">
                                <li>
                                    <a href="#product-details" class="active" aria-controls="product-details" role="tab" data-toggle="tab">جزئیات</a>
                                </li>
                                <li>
                                    <a href="#product-comment" aria-controls="product-comment" role="tab" data-toggle="tab">نظرات </a>
                                </li>
                                <li>
                                    <a href="#product-review" aria-controls="product-review" role="tab" data-toggle="tab">نظرات
                                        <span>(35)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#product-support" aria-controls="product-support" role="tab" data-toggle="tab">پشتیبانی</a>
                                </li>
                                <li>
                                    <a href="#product-faq" aria-controls="product-faq" role="tab" data-toggle="tab">راهنما </a>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.item-navigation -->

                        <div class="tab-content">
                            <div class="fade show tab-pane product-tab active" id="product-details">
                                <div class="tab-content-wrapper">
                                    <h1>قالب وردپرس </h1>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>
                                    <h2>ویژگی ها با تصویر:</h2>
                                    <img src="images/new/prodesc.jpg" alt="This is product description thumbnail">

                                    <h2>ویژگی ها با فهرست HTML نامرتب:</h2>
                                    <ul>
                                        <li>شش تم مختلف برای اسلایدر محصول</li>
                                        <li>محصولات کشویی ویژه دسته بندی های انتخاب شده.</li>
                                        <li>محصولات فرم کشویی دسته خاص از محصولات است.</li>
                                    </ul>

                                    <h2>ویژگی ها با لیست HTML مرتب شده اند:</h2>
                                    <ol>
                                        <li>شش تم مختلف برای اسلایدر محصول</li>
                                        <li>محصولات کشویی ویژه دسته بندی های انتخاب شده.</li>
                                        <li>محصولات فرم کشویی دسته خاص از محصولات است.</li>
                                    </ol>

                                    <h2>ویژگی ها با ویدئو:</h2>
                                    <iframe width="100" height="400" src="https://www.youtube.com/embed/w2zIUJrglR4" allowfullscreen></iframe>
                                </div>
                            </div>
                            <!-- end /.tab-content -->

                            <div class="fade tab-pane product-tab" id="product-comment">
                                <div class="thread">
                                    <ul class="media-list thread-list">
                                        <li class="single-thread">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="images/new/m1.png" alt="Commentator Avatar">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <div>
                                                        <div class="media-heading">
                                                            <a href="author.html">
                                                                <h4>علی</h4>
                                                            </a>
                                                            <span>9 ساعت پیش </span>
                                                        </div>
                                                        <span class="comment-tag buyer">خریدار</span>
                                                        <a href="#" class="reply-link">پاسخ </a>
                                                    </div>
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.  </p>
                                                </div>
                                            </div>

                                            <!-- nested comment markup -->
                                            <ul class="children">
                                                <li class="single-thread depth-2">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <a href="#">
                                                                <img class="media-object" src="images/new/m2.png" alt="Commentator Avatar">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="media-heading">
                                                                <h4>رضا</h4>
                                                                <span>6 ساعت پیش</span>
                                                            </div>
                                                            <span class="comment-tag author">طراح</span>
                                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.  </p>
                                                        </div>
                                                    </div>

                                                </li>
                                                <li class="single-thread depth-2">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <a href="#">
                                                                <img class="media-object" src="images/new/m2.png" alt="Commentator Avatar">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="media-heading">
                                                                <h4>رضا</h4>
                                                                <span>6 ساعت پیش</span>
                                                            </div>
                                                            <span class="comment-tag author">طراح</span>
                                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.  </p>
                                                        </div>
                                                    </div>

                                                </li>

                                            </ul>

                                            <!-- comment reply -->
                                            <div class="media depth-2 reply-comment">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="images/new/m2.png" alt="Commentator Avatar">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <form action="#" class="comment-reply-form">
                                                        <textarea class="bla" name="reply-comment" placeholder="Write your comment..."></textarea>
                                                        <button class="btn btn--md btn--round">Post Comment</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- comment reply -->
                                        </li>
                                        <!-- end single comment thread /.comment-->
                                        <li class="single-thread">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="images/new/m3.png" alt="Commentator Avatar">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <div>
                                                        <div class="media-heading">
                                                            <a href="author.html">
                                                                <h4>تقی</h4>
                                                            </a>
                                                            <span>5 ساعت پیش </span>
                                                        </div>
                                                        <a href="#" class="reply-link">پاسخ </a>
                                                    </div>
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                                </div>
                                            </div>

                                            <!-- comment reply -->
                                            <div class="media depth-2 reply-comment">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="images/new/m2.png" alt="Commentator Avatar">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <form action="#" class="comment-reply-form">
                                                        <textarea name="reply-comment" placeholder="نظر خود را بنویسید "></textarea>
                                                        <button class="btn btn--sm btn--round">ارسال نظر </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- comment reply -->
                                        </li>
                                        <!-- end single comment thread /.comment-->
                                        <li class="single-thread">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="images/new/m3.png" alt="Commentator Avatar">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <div>
                                                        <div class="media-heading">
                                                            <a href="author.html">
                                                                <h4>تقی</h4>
                                                            </a>
                                                            <span>5 ساعت پیش </span>
                                                        </div>
                                                        <a href="#" class="reply-link">پاسخ </a>
                                                    </div>
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                                </div>
                                            </div>

                                            <!-- comment reply -->
                                            <div class="media depth-2 reply-comment">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="images/new/m2.png" alt="Commentator Avatar">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <form action="#" class="comment-reply-form">
                                                        <textarea name="reply-comment" placeholder="نظر خود را بنویسید "></textarea>
                                                        <button class="btn btn--sm btn--round">ارسال نظر </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- comment reply -->
                                        </li>
                                        <!-- end single comment thread /.comment-->
                                        <li class="single-thread">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="images/new/m3.png" alt="Commentator Avatar">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <div>
                                                        <div class="media-heading">
                                                            <a href="author.html">
                                                                <h4>تقی</h4>
                                                            </a>
                                                            <span>5 ساعت پیش </span>
                                                        </div>
                                                        <a href="#" class="reply-link">پاسخ </a>
                                                    </div>
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                                </div>
                                            </div>

                                            <!-- comment reply -->
                                            <div class="media depth-2 reply-comment">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="images/new/m2.png" alt="Commentator Avatar">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <form action="#" class="comment-reply-form">
                                                        <textarea name="reply-comment" placeholder="نظر خود را بنویسید "></textarea>
                                                        <button class="btn btn--sm btn--round">ارسال نظر </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- comment reply -->
                                        </li>
                                        <!-- end single comment thread /.comment-->


                                    </ul>
                                    <!-- end /.media-list -->

                                    <div class="pagination-area pagination-area2">
                                        <nav class="navigation pagination" role="navigation">
                                            <div class="nav-links">
                                                <a class="page-numbers current" href="#">1</a>
                                                <a class="page-numbers" href="#">2</a>
                                                <a class="page-numbers" href="#">3</a>
                                                <a class="prev page-numbers" href="#">
                                                    <span class="lnr lnr-arrow-left"></span>
                                                </a>
                                            </div>
                                        </nav>
                                    </div>
                                    <!-- end /.comment pagination area -->

                                    <div class="comment-form-area">
                                        <h4> پیام بگذارید</h4>
                                        <!-- comment reply -->
                                        <div class="media comment-form">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="images/new/m7.png" alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <form action="#" class="comment-reply-form">
                                                    <textarea name="reply-comment" placeholder="نظر خود را بنویسید ..."></textarea>
                                                    <button class="btn btn--sm btn--round">ارسال نظر </button>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- comment reply -->
                                    </div>
                                    <!-- end /.comment-form-area -->
                                </div>
                                <!-- end /.comments -->
                            </div>
                            <!-- end /.product-comment -->

                            <div class="fade tab-pane product-tab" id="product-review">
                                <div class="thread thread_review">
                                    <ul class="media-list thread-list">
                                        <li class="single-thread">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="images/new/m1.png" alt="Commentator Avatar">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <div class="clearfix">
                                                        <div class="pull-right">
                                                            <div class="media-heading">
                                                                <a href="author.html">
                                                                    <h4>کاربر تست </h4>
                                                                </a>
                                                                <span>1 ساعت پیش </span>
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
                                                            <span class="review_tag">پشتیبانی </span>
                                                        </div>
                                                        <a href="#" class="reply-link">پاسخ </a>
                                                    </div>
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                                </div>
                                            </div>

                                            <!-- comment reply -->
                                            <div class="media depth-2 reply-comment">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="images/new/m2.png" alt="Commentator Avatar">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <form action="#" class="comment-reply-form">
                                                        <textarea class="bla" name="reply-comment" placeholder="نظر خود را بنویسی "></textarea>
                                                        <button class="btn btn--md btn--round">ارسال نظر </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- comment reply -->
                                        </li>
                                        <!-- end single comment thread /.comment-->

                                        <li class="single-thread">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="images/new/m1.png" alt="Commentator Avatar">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <div class="clearfix">
                                                        <div class="pull-right">
                                                            <div class="media-heading">
                                                                <a href="author.html">
                                                                    <h4>کاربر تست </h4>
                                                                </a>
                                                                <span>1 ساعت پیش </span>
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
                                                            <span class="review_tag">پشتیبانی </span>
                                                        </div>
                                                        <a href="#" class="reply-link">پاسخ </a>
                                                    </div>
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                                </div>
                                            </div>

                                            <!-- comment reply -->
                                            <div class="media depth-2 reply-comment">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="images/new/m2.png" alt="Commentator Avatar">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <form action="#" class="comment-reply-form">
                                                        <textarea class="bla" name="reply-comment" placeholder="نظر خود را بنویسی "></textarea>
                                                        <button class="btn btn--md btn--round">ارسال نظر </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- comment reply -->
                                        </li>
                                        <!-- end single comment thread /.comment-->

                                        <li class="single-thread">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="images/new/m1.png" alt="Commentator Avatar">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <div class="clearfix">
                                                        <div class="pull-right">
                                                            <div class="media-heading">
                                                                <a href="author.html">
                                                                    <h4>کاربر تست </h4>
                                                                </a>
                                                                <span>1 ساعت پیش </span>
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
                                                            <span class="review_tag">پشتیبانی </span>
                                                        </div>
                                                        <a href="#" class="reply-link">پاسخ </a>
                                                    </div>
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                                </div>
                                            </div>

                                            <!-- comment reply -->
                                            <div class="media depth-2 reply-comment">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="images/new/m2.png" alt="Commentator Avatar">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <form action="#" class="comment-reply-form">
                                                        <textarea class="bla" name="reply-comment" placeholder="نظر خود را بنویسی "></textarea>
                                                        <button class="btn btn--md btn--round">ارسال نظر </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- comment reply -->
                                        </li>
                                        <!-- end single comment thread /.comment-->
                                        <li class="single-thread">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="images/new/m1.png" alt="Commentator Avatar">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <div class="clearfix">
                                                        <div class="pull-right">
                                                            <div class="media-heading">
                                                                <a href="author.html">
                                                                    <h4>کاربر تست </h4>
                                                                </a>
                                                                <span>1 ساعت پیش </span>
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
                                                            <span class="review_tag">پشتیبانی </span>
                                                        </div>
                                                        <a href="#" class="reply-link">پاسخ </a>
                                                    </div>
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                                </div>
                                            </div>
                                            <ul class="children">
                                                <li class="single-thread depth-2">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <a href="#">
                                                                <img class="media-object" src="images/new/m2.png" alt="Commentator Avatar">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="media-heading">
                                                                <h4>{{$user_name}}</h4>
                                                                <span>4 ساعت پیش </span>
                                                            </div>
                                                            <span class="comment-tag author">طراح </span>
                                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.  </p>
                                                        </div>
                                                    </div>

                                                </li>
                                            </ul>
                                            <!-- comment reply -->
                                            <div class="media depth-2 reply-comment">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="images/new/m2.png" alt="Commentator Avatar">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <form action="#" class="comment-reply-form">
                                                        <textarea class="bla" name="reply-comment" placeholder="نظر خود را بنویسی "></textarea>
                                                        <button class="btn btn--md btn--round">ارسال نظر </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- comment reply -->
                                        </li>
                                        <!-- end single comment thread /.comment-->


                                        <li class="single-thread">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="images/new/m1.png" alt="Commentator Avatar">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <div class="clearfix">
                                                        <div class="pull-right">
                                                            <div class="media-heading">
                                                                <a href="author.html">
                                                                    <h4>کاربر تست </h4>
                                                                </a>
                                                                <span>1 ساعت پیش </span>
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
                                                            <span class="review_tag">پشتیبانی </span>
                                                        </div>
                                                        <a href="#" class="reply-link">پاسخ </a>
                                                    </div>
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                                </div>
                                            </div>

                                            <!-- comment reply -->
                                            <div class="media depth-2 reply-comment">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="images/new/m2.png" alt="Commentator Avatar">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <form action="#" class="comment-reply-form">
                                                        <textarea class="bla" name="reply-comment" placeholder="نظر خود را بنویسی "></textarea>
                                                        <button class="btn btn--md btn--round">ارسال نظر </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- comment reply -->
                                        </li>
                                        <!-- end single comment thread /.comment-->
                                        <li class="single-thread">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="images/new/m1.png" alt="Commentator Avatar">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <div class="clearfix">
                                                        <div class="pull-right">
                                                            <div class="media-heading">
                                                                <a href="author.html">
                                                                    <h4>کاربر تست </h4>
                                                                </a>
                                                                <span>1 ساعت پیش </span>
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
                                                            <span class="review_tag">پشتیبانی </span>
                                                        </div>
                                                        <a href="#" class="reply-link">پاسخ </a>
                                                    </div>
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                                </div>
                                            </div>

                                            <!-- comment reply -->
                                            <div class="media depth-2 reply-comment">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="images/new/m2.png" alt="Commentator Avatar">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <form action="#" class="comment-reply-form">
                                                        <textarea class="bla" name="reply-comment" placeholder="نظر خود را بنویسی "></textarea>
                                                        <button class="btn btn--md btn--round">ارسال نظر </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- comment reply -->
                                        </li>
                                        <!-- end single comment thread /.comment-->
                                        <li class="single-thread">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="images/new/m1.png" alt="Commentator Avatar">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <div class="clearfix">
                                                        <div class="pull-right">
                                                            <div class="media-heading">
                                                                <a href="author.html">
                                                                    <h4>کاربر تست </h4>
                                                                </a>
                                                                <span>1 ساعت پیش </span>
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
                                                            <span class="review_tag">پشتیبانی </span>
                                                        </div>
                                                        <a href="#" class="reply-link">پاسخ </a>
                                                    </div>
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                                </div>
                                            </div>

                                            <!-- comment reply -->
                                            <div class="media depth-2 reply-comment">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="images/new/m2.png" alt="Commentator Avatar">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <form action="#" class="comment-reply-form">
                                                        <textarea class="bla" name="reply-comment" placeholder="نظر خود را بنویسی "></textarea>
                                                        <button class="btn btn--md btn--round">ارسال نظر </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- comment reply -->
                                        </li>
                                        <!-- end single comment thread /.comment-->
                                        <li class="single-thread">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="images/new/m1.png" alt="Commentator Avatar">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <div class="clearfix">
                                                        <div class="pull-right">
                                                            <div class="media-heading">
                                                                <a href="author.html">
                                                                    <h4>کاربر تست </h4>
                                                                </a>
                                                                <span>1 ساعت پیش </span>
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
                                                            <span class="review_tag">پشتیبانی </span>
                                                        </div>
                                                        <a href="#" class="reply-link">پاسخ </a>
                                                    </div>
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                                </div>
                                            </div>

                                            <!-- comment reply -->
                                            <div class="media depth-2 reply-comment">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="images/new/m2.png" alt="Commentator Avatar">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <form action="#" class="comment-reply-form">
                                                        <textarea class="bla" name="reply-comment" placeholder="نظر خود را بنویسی "></textarea>
                                                        <button class="btn btn--md btn--round">ارسال نظر </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- comment reply -->
                                        </li>
                                        <!-- end single comment thread /.comment-->
                                    </ul>
                                    <!-- end /.media-list -->

                                    <div class="pagination-area pagination-area2">
                                        <nav class="navigation pagination " role="navigation">
                                            <div class="nav-links">
                                                <a class="page-numbers current" href="#">1</a>
                                                <a class="page-numbers" href="#">2</a>
                                                <a class="page-numbers" href="#">3</a>
                                                <a class="prev page-numbers" href="#">
                                                    <span class="lnr lnr-arrow-left"></span>
                                                </a>
                                            </div>
                                        </nav>
                                    </div>
                                    <!-- end /.comment pagination area -->
                                </div>
                                <!-- end /.comments -->
                            </div>
                            <!-- end /.product-comment -->

                            <div class="fade tab-pane product-tab" id="product-support">
                                <div class="support">
                                    <div class="support__title">
                                        <h3>با نویسنده تماس بگیرید</h3>
                                    </div>
                                    <div class="support__form">
                                        <div class="usr-msg">
                                            <p>لطفا برای ارسال نظر
                                                <a href="login.html">وارد </a>شوید.</p>

                                            <form action="#" class="پشتیبانی_form">
                                                <div class="form-group">
                                                    <label for="subj">موضوع:</label>
                                                    <input type="text" id="subj" class="text_field" placeholder="موضوع خود را وارد کنید ">
                                                </div>

                                                <div class="form-group">
                                                    <label for="supmsg">متن : </label>
                                                    <textarea class="text_field" id="supmsg" name="supmsg" placeholder="متن خود را وارد کنید ..."></textarea>
                                                </div>
                                                <button type="submit" class="btn btn--lg btn--round">ارسال </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end /.product-support -->

                            <div class="fade tab-pane product-tab" id="product-faq">
                                <div class="tab-content-wrapper">
                                    <div class="panel-group accordion" role="tablist" id="accordion">
                                        <div class="panel accordion__single" id="panel-one">
                                            <div class="single_acco_title">
                                                <h4>
                                                    <a data-toggle="collapse" href="#collapse1" class="collapsed" aria-expanded="false" data-target="#collapse1" aria-controls="collapse1">
                                                        <span>نحوه نوشتن تغییرات برای به روز رسانی تم؟</span>
                                                        <i class="lnr lnr-chevron-down indicator"></i>
                                                    </a>
                                                </h4>
                                            </div>

                                            <div id="collapse1" class="panel-collapse collapse" aria-labelledby="panel-one" data-parent="#accordion">
                                                <div class="panel-body">
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end /.accordion__single -->

                                        <div class="panel accordion__single" id="panel-two">
                                            <div class="single_acco_title">
                                                <h4>
                                                    <a data-toggle="collapse" href="#collapse2" class="collapsed" aria-expanded="false" data-target="#collapse2" aria-controls="collapse2">
                                                        <span>نحوه نوشتن تغییرات برای به روز رسانی تم؟</span>
                                                        <i class="lnr lnr-chevron-down indicator"></i>
                                                    </a>
                                                </h4>
                                            </div>

                                            <div id="collapse2" class="panel-collapse collapse" aria-labelledby="panel-one" data-parent="#accordion">
                                                <div class="panel-body">
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel accordion__single" id="panel-three">
                                            <div class="single_acco_title">
                                                <h4>
                                                    <a data-toggle="collapse" href="#collapse3" class="collapsed" aria-expanded="false" data-target="#collapse3" aria-controls="collapse3">
                                                        <span>نحوه نوشتن تغییرات برای به روز رسانی تم؟</span>
                                                        <i class="lnr lnr-chevron-down indicator"></i>
                                                    </a>
                                                </h4>
                                            </div>

                                            <div id="collapse3" class="panel-collapse collapse" aria-labelledby="panel-one" data-parent="#accordion">
                                                <div class="panel-body">
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>
                                                </div>
                                            </div>
                                        </div>



                                        <!-- end /.accordion__single -->
                                        <!-- end /.accordion__single -->
                                    </div>
                                    <!-- end /.accordion -->
                                </div>

                            </div>
                            <!-- end /.product-faq -->
                        </div>
                        <!-- end /.tab-content -->
                    </div>
                    <!-- end /.item-info -->
                </div>
                <!-- end /.col-md-8 -->
           
                <div class="col-lg-4">
                    <aside class="sidebar sidebar--single-product">
                        <div class="sidebar-card card-pricing">
                            <div class="price">
                                <h1>
                                    20<sup>تومان</sup> -
                                    60 <sup>تومان</sup></h1>
                            </div>
                            <ul class="pricing-options">
                                <li>
                                    <div class="custom-radio">
                                        <input type="radio" id="opt1" class="" name="filter_opt" checked>
                                        <label for="opt1">
                                            <span class="circle"></span>مجوز یک سایت  –
                                            <span class="pricing__opt">100 تومان</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-radio">
                                        <input type="radio" id="opt2" class="" name="filter_opt">
                                        <label for="opt2">
                                            <span class="circle"></span>مجوز دو سایت –
                                            <span class="pricing__opt">400 تومان</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-radio">
                                        <input type="radio" id="opt3" class="" name="filter_opt">
                                        <label for="opt3">
                                            <span class="circle"></span>مجوز چند سایت –
                                            <span class="pricing__opt">400 تومان</span>
                                        </label>
                                    </div>
                                </li>
                            </ul>
                            <!-- end /.pricing-options -->
                                     {{--  @if(App\Utility\User::is_user_subscribed($current_user))   --}}
                            <div class="purchase-button">
                                
                                <a href="{{route('frontend.packages.download',[$package_item->id])}}" class="btn btn--lg btn--round">دانلود فایل</a>
                                  <a  data-fid="{{$package_item->id}}" class=" btn-warning btn btn--lg btn--round btn_report_file">گزارش خطا </a>
                                {{--  @else  --}}
                                <a href="{{route('frontend.plans.index',[$package_item->id])}}" class="btn btn--lg btn--round cart-btn">
                                    <span class="lnr lnr-cart"></span> افزودن به سبد خرید  </a>
                            </div> 
                             {{--  @endif  --}}
                        
                            <!-- end /.purchase-button -->
                        </div>
                        <!-- end /.sidebar--card -->

                        <div class="sidebar-card card--metadata">
                            <ul class="data">
                                <li>
                                    <p>
                                        <span class="lnr lnr-cart pcolor"></span>کل فروش</p>
                                    <span>426</span>
                                </li>
                                <li>
                                    <p>
                                        <span class="lnr lnr-heart scolor"></span>علاقه مندی ها</p>
                                    <span>240</span>
                                </li>
                                <li>
                                    <p>
                                        <span class="lnr lnr-bubble mcolor3"></span>نظرات</p>
                                    <span>35</span>
                                </li>
                            </ul>


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
                                <span class="rating__count">( 26 امتیاز )</span>
                            </div>
                            <!-- end /.rating -->
                        </div>
                        <!-- end /.sidebar-card -->

                        <div class="sidebar-card card--product-infos">
                            <div class="card-title">
                                <h4>مشاهده جزییات فایل </h4>
                            </div>

                            <ul class="infos">
                                <li>
                                    <p class="data-label">منتشر شده</p>
                                    <p class="info">{{$package_item->created_at}}</p>
                                </li>
                                <li>
                                    <p class="data-label">به روز رسانی</p>
                                    <p class="info">{{$package_item->updated_at}}</p>
                                </li>
                                <li>
                                    <p class="data-label">توضیحات</p>
                                    <p class="info">{{$package_item->package_description}}</p>
                                </li>
                                <li>
                                    <p class="data-label">دسته بندی </p>
                                    <p class="info">وردپرس</p>
                                </li>
                                <li>
                                    <p class="data-label">طرح </p>
                                    <p class="info">ریسپانسیو</p>
                                </li>
                                <li>
                                    <p class="data-label">فایل ها شامل</p>
                                    <p class="info">Html, CSS, JavaScript</p>
                                </li>
                                <li>
                                    <p class="data-label">مرورگر</p>
                                    <p class="info">IE10, IE11, Firefox, Safari, Opera, Chrome5</p>
                                </li>
                                <li>
                                    <p class="data-label">بوت استرپ</p>
                                    <p class="info">نسخه 4</p>
                                </li>
                                <li>
                                    <p class="data-label">برچسب ها
                                         
                                    </p>
                                    <p class="info">
                                        <a href="#">بوت استرپ 4</a>,
                                        <a href="#">html5</a>
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.aside -->

                        <div class="author-card sidebar-card ">
                            <div class="card-title">
                                <h4>اطلاعات توسعه دهنده
                                </h4>
                            </div>

                            <div class="author-infos">
                                <div class="author_avatar">
                                    <img src="assets/images/new/author-avatar.jpg" alt="Presenting the broken author avatar :D">
                                </div>

                                <div class="author">
                                    <h4>{{$user_name}} </h4>
                                    <p>شروع : {{\Morilog\Jalali\Jalalian::forge($package_item->created_at)->format('d-m-Y ')}}</p>
                                </div>
                                <!-- end /.author -->

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
                                    <a href="#" class="btn btn--sm btn--round">پروفایل</a>
                                    <a href="#" class="btn btn--sm btn--round">پیغام</a>
                                </div>
                                <!-- end /.author-btn -->
                            </div>
                            <!-- end /.author-infos -->


                        </div>
                        <!-- end /.author-card -->
                    </aside>
                    <!-- end /.aside -->
                </div>
            
                <!-- end /.col-md-4 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--===========================================
        END SINGLE PRODUCT DESCRIPTION AREA
    ===============================================-->

    <!--============================================
        START MORE PRODUCT ARE
    ==============================================-->
    <section class="more_product_area section--padding dir-rtl">
        <div class="container">
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h1>محصولات بیشتر از
                            <span class="highlighted">دامن دریا </span>
                        </h1>
                    </div>
                </div>
                <!-- end /.col-md-12 -->

                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <!-- start .single-product -->
                    <div class="product product--card product--card2">

                        <div class="product__thumbnail">
                            <img src="assets/images/new/p1.jpg" alt="Product Image">
                            <div class="prod_btn">
                                <a href="single-product.html" class="transparent btn--sm btn--round">اطلاعات بیشتر </a>
                                <a href="single-product.html" class="transparent btn--sm btn--round">مشاهده </a>
                            </div>
                            <!-- end /.prod_btn -->
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class="product-desc">
                            <a href="#" class="product_title">
                                <h4>قالب فروشگاهی حوملا </h4>
                            </a>

                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                        </div>
                        <!-- end /.product-desc -->

                        <ul class="titlebtm">
                            <li class="product_cat">
                                <a href="#">
                                    <span class="lnr lnr-book"></span>افزونه ها </a>
                            </li>
                            <li class="rating product--rating">
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
                            </li>
                        </ul>

                        <div class="product-purchase">
                            <div class="price_love">
                                <span>10 تومان  - 50 تومان </span>
                                <p>
                                    <span class="lnr lnr-heart"></span> 90</p>
                            </div>
                            <div class="sell">
                                <p>
                                    <span class="lnr lnr-cart"></span>
                                    <span>16</span></p>
                            </div>
                        </div>
                        <!-- end /.product-purchase -->
                    </div>
                    <!-- end /.single-product -->
                </div>
                <!-- end /.col-md-4 -->

                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <!-- start .single-product -->
                    <div class="product product--card product--card2">

                        <div class="product__thumbnail">
                            <img src="assets/images/new/p1.jpg" alt="Product Image">
                            <div class="prod_btn">
                                <a href="single-product.html" class="transparent btn--sm btn--round">اطلاعات بیشتر </a>
                                <a href="single-product.html" class="transparent btn--sm btn--round">مشاهده </a>
                            </div>
                            <!-- end /.prod_btn -->
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class="product-desc">
                            <a href="#" class="product_title">
                                <h4>قالب فروشگاهی حوملا </h4>
                            </a>

                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                        </div>
                        <!-- end /.product-desc -->

                        <ul class="titlebtm">
                            <li class="product_cat">
                                <a href="#">
                                    <span class="lnr lnr-book"></span>افزونه ها </a>
                            </li>
                            <li class="rating product--rating">
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
                            </li>
                        </ul>

                        <div class="product-purchase">
                            <div class="price_love">
                                <span>10 تومان  - 50 تومان </span>
                                <p>
                                    <span class="lnr lnr-heart"></span> 90</p>
                            </div>
                            <div class="sell">
                                <p>
                                    <span class="lnr lnr-cart"></span>
                                    <span>16</span></p>
                            </div>
                        </div>
                        <!-- end /.product-purchase -->
                    </div>
                    <!-- end /.single-product -->
                </div>
                <!-- end /.col-md-4 -->

                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <!-- start .single-product -->
                    <div class="product product--card product--card2">

                        <div class="product__thumbnail">
                            <img src="assets/images/new/p1.jpg" alt="Product Image">
                            <div class="prod_btn">
                                <a href="single-product.html" class="transparent btn--sm btn--round">اطلاعات بیشتر </a>
                                <a href="single-product.html" class="transparent btn--sm btn--round">مشاهده </a>
                            </div>
                            <!-- end /.prod_btn -->
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class="product-desc">
                            <a href="#" class="product_title">
                                <h4>قالب فروشگاهی حوملا </h4>
                            </a>

                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                        </div>
                        <!-- end /.product-desc -->

                        <ul class="titlebtm">
                            <li class="product_cat">
                                <a href="#">
                                    <span class="lnr lnr-book"></span>افزونه ها </a>
                            </li>
                            <li class="rating product--rating">
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
                            </li>
                        </ul>

                        <div class="product-purchase">
                            <div class="price_love">
                                <span>10 تومان  - 50 تومان </span>
                                <p>
                                    <span class="lnr lnr-heart"></span> 90</p>
                            </div>
                            <div class="sell">
                                <p>
                                    <span class="lnr lnr-cart"></span>
                                    <span>16</span></p>
                            </div>
                        </div>
                        <!-- end /.product-purchase -->
                    </div>
                    <!-- end /.single-product -->
                </div>
                <!-- end /.col-md-4 -->

            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.container -->
    </section>
    <!--============================================
        END MORE PRODUCT AREA
    ==============================================-->


    <!--================================
        START CALL TO ACTION AREA
    =================================-->
    <section class="call-to-action bgimage dir-rtl">
        <div class="bg_image_holder">
            <img src="/assets/images/new/calltobg.jpg" alt="">
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

    <!--================================








@endsection