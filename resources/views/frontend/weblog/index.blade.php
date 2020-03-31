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
                            <a href="#">وبلاگ نسخه 2</a>
                        </li>
                    </ul>
                </div>
                <h1 class="page-title">وبلاگ نسخه 2</h1>
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
               
                <!-- end /.single_blog -->
                 @foreach($posts as $post)
                <div class="single_blog blog--default">
                    <figure>
                        <img src="{{$post->photo ? $post->photo->path:"http://www.placehold.it/400"}}" class="img-responsive" style="width:900px;height:300px;" alt="Blog image">

                        <figcaption>
                            <div class="blog__content">
                                <a href="#" class="blog__title">
                                    <h4>{{$post->title}}</h4>
                                </a>

                                <div class="blog__meta mt-3">
                                    <div class="author">
                                        <span class="lnr lnr-user"></span>
                                        <p>ایجاد شده توسط 
                                            <a href="#">{{$post->user->name}} </a>
                                        </p>
                                    </div>
                                    <div class="date_time">
                                        <span class="lnr lnr-clock"></span>
                                        <p>{{$post->created_at}}
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

                            <div class="btn_text">
                                <p>
                                    {{ Str::limit($post->description,50) }} 
                                </p>
                                <a href="{{route('single.blog',['slug'=>$post->slug])}}" class="btn btn--md btn--round">اطلاعات بیشتر </a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                @endforeach
                <!-- end /.single_blog -->

               
                <!-- end /.single_blog -->

            </div>
            <!-- end /.col-md-8 -->

            <div class="col-lg-4">
                <aside class="sidebar sidebar--blog">
                    <div class="sidebar-card card--search card--blog_sidebar">
                        <div class="card-title">
                            <h4>جستحو در مقالات </h4>
                        </div>
                        <!-- end /.card-title -->

                        <div class="card_content">
                            <form action="{{route('posts.search',['query'])}}" method="GET">
                                <div class="searc-wrap">
                                    <input type="text" placeholder="عنوان مقاله را وارد کنید...">
                                    <button type="submit" class="search-wrap__btn">
                                        <span class="lnr lnr-magnifier"></span>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!-- end /.card_content -->
                    </div>
                    <!-- end /.sidebar-card -->

                    <div class="sidebar-card sidebar--post card--blog_sidebar">
                        <div class="card-title">
                            <!-- Nav tabs -->
                            <ul class="nav post-tab" role="tablist">
                                <li>
                                    <a href="#popular" class="active" id="popular-tab" aria-controls="popular" role="tab" data-toggle="tab" aria-selected="true">محبوب ترین ها </a>
                                </li>
                                <li>
                                    <a href="#latest" id="latest-tab" aria-controls="latest" role="tab" data-toggle="tab" aria-selected="false">اخرین مقالات </a>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.card-title -->

                        <div class="card_content">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active fade show" id="popular" aria-labelledby="popular-tab">
                                    {{-- <ul class="post-list">
                                        <li>
                                            <div class="thumbnail_img">
                                                <img src="images/new/blog_thumb1.jpg" alt="blog thumbnail">
                                            </div>
                                            <div class="title_area">
                                                <a href="#">
                                                    <h4>5 بهترین پلاگین اعتبار سنجی فرم جی کوئری </h4>
                                                </a>
                                                <div class="date_time">
                                                    <span class="lnr lnr-clock"></span>
                                                    <p>5 خرداد 97</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="thumbnail_img">
                                                <img src="images/new/blog_thumb2.jpg" alt="blog thumbnail">
                                            </div>
                                            <div class="title_area">
                                                <a href="#">
                                                    <h4>بهترین  پلاگین رایگان  گالری عکس </h4>
                                                </a>
                                                <div class="date_time">
                                                    <span class="lnr lnr-clock"></span>
                                                    <p>5 خرداد 97</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="thumbnail_img">
                                                <img src="images/new/blog_thumb2.jpg" alt="blog thumbnail">
                                            </div>
                                            <div class="title_area">
                                                <a href="#">
                                                    <h4>10  قالب جوملا رایگان!
                                                         
                                                    </h4>
                                                </a>
                                                <div class="date_time">
                                                    <span class="lnr lnr-clock"></span>
                                                    <p>5 خرداد 97</p>
                                                </div>
                                            </div>
                                        </li> <li>
                                        <div class="thumbnail_img">
                                            <img src="images/new/blog_thumb2.jpg" alt="blog thumbnail">
                                        </div>
                                        <div class="title_area">
                                            <a href="#">
                                                <h4>10  قالب جوملا رایگان!
                                                     
                                                </h4>
                                            </a>
                                            <div class="date_time">
                                                <span class="lnr lnr-clock"></span>
                                                <p>5 خرداد 97</p>
                                            </div>
                                        </div>
                                    </li>
                                    </ul> --}}
                                    <!-- end /.post-list -->
                                </div>
                                <!-- end /.tabpanel -->

                                <div role="tabpanel" class="tab-pane fade" id="latest" aria-labelledby="latest-tab">
                                    <ul class="post-list">
                                        <li>
                                            @foreach($newPosts as $newpost)
                                            <div class="thumbnail_img">
                                                <img src="{{$newpost->photo->path}}" alt="blog thumbnail">
                                            </div>
                                            <div class="title_area">
                                                <a href="#">
                                                    <h4>{{$newpost->title}}
                                                         
                                                    </h4>
                                                </a>
                                                <div class="date_time">
                                                    <span class="lnr lnr-clock"></span>
                                                    <p>5 خرداد 97</p>
                                                </div>
                                            </div>
                                        </li>
                                      @endforeach
                                    </ul>                                    <!-- end /.post-list -->
                                </div>
                                <!-- end /.tabpanel -->
                            </div>
                            <!-- end /.tab-content -->
                        </div>
                        <!-- end /.card_content -->
                    </div>
                    <!-- end /.sidebar-card -->

                    <div class="sidebar-card card--blog_sidebar card--category">
                        <div class="card-title">
                            <h4>دسته بندی </h4>
                        </div>
                        <div class="collapsible-content">
                            <ul class="card-content">
                                @foreach($category as $category)
                                <li>
                                    <a href="#">
                                        <span class="lnr lnr-chevron-right"></span>{{$category->name}}
                                        <span class="item-count">35</span>
                                    </a>
                                </li>
                               @endforeach
                            </ul>
                        </div>
                        <!-- end /.collapsible_content -->
                    </div>
                    <!-- end /.sidebar-card -->

                    <!-- end /.sidebar-card -->

                 
                    <!-- end /.banner -->
                </aside>
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

<!--================================










@endsection