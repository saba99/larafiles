@extends('frontend.layout.master')


@section('content') 


<!--================================
    START SEARCH AREA
=================================-->
<section class="search-wrapper dir-rtl">
    <div class="search-area2 bgimage">
        <div class="bg_image_holder">
            <img src="{{asset('assets/images/new/search.jpg')}}" alt="">
        </div>
        <div class="container content_above">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="search">
                        <div class="search__title">
                            <h3>
                                <span>35,270</span>  قالب وب سایت از جامعه خلاق ما</h3>
                        </div>
                        <div class="search__field">
                            <form action="#">
                                <div class="field-wrapper">
                                    <input class="relative-field rounded" type="text" placeholder="چستجو در محصولات ">
                                    <button class="btn btn--round" type="submit">جستجو </button>
                                </div>
                            </form>
                        </div>
                        <div class="breadcrumb">
                            <ul>
                                <li>
                                    <a href="#">خانه</a>
                                </li>
                                <li class="active">
                                    <a href="#">همه محصولات</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </div>
    <!-- end /.search-area2 -->
</section>
<!--================================
    END SEARCH AREA
=================================-->


<!--================================
       START FILTER AREA
   =================================-->
<div class="filter-area dir-rtl ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="filter-bar filter--bar2">
                    <div class="pull-right">
                        <div class="filter__option filter--select">
                            <div class="select-wrap">
                                <select name="price">
                                    <option value="low">قیمت  :از کم به زیاد </option>
                                    <option value="high">قیمت :از زیاد به کم </option>
                                </select>
                                <span class="lnr lnr-chevron-down"></span>
                            </div>
                        </div>
                        <div class="filter__option filter--select">
                            <div class="select-wrap">
                                <select name="price">
                                    <option value="12">12 آیتم در هر صفحه</option>
                                    <option value="15">12 آیتم در هر صفحه</option>
                                    <option value="25">12 آیتم در هر صفحه</option>
                                </select>
                                <span class="lnr lnr-chevron-down"></span>
                            </div>
                        </div>
                        <div class="filter__option filter--layout">
                            <a href="category-grid.html">
                                <div class="svg-icon">
                                    <img class="svg" src="{{asset('assets/images/svg/grid.svg')}}" alt="it's just a layout control folks!">
                                </div>
                            </a>
                            <a href="category-list.html">
                                <div class="svg-icon">
                                    <img class="svg" src="{{asset('assets/images/svg/list.svg')}}" alt="it's just a layout control folks!">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end filter-bar -->
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end filter-bar -->
    </div>
</div>
<!--================================
    END FILTER AREA
=================================-->


    <!--================================
        START PRODUCTS AREA
    =================================-->
    <section class="products section--padding2 dir-rtl ">
        <!-- start container -->
        <div class="container">

            <!-- start .row -->
            <div class="row">
                <!-- start .col-md-3 -->
                <div class="col-lg-3">
                    <!-- start aside -->
                    <aside class="sidebar product--sidebar">
                        <div class="sidebar-card card--category">
                            <a class="card-title" href="#collapse1" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse1">
                                <h4>دسته بندی پکیج ها
                                    <span class="lnr lnr-chevron-down"></span>
                                    
                                </h4>
                            </a>
                            <div class="collapse show collapsible-content" id="collapse1">
                                <ul class="card-content">
                                      @foreach($category  as $category)  
                                    <li>
                                        <a href="{{route('frontend.categories.item',[$category->id])}}">
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

                        <div class="sidebar-card card--filter">
                            <a class="card-title" href="#collapse2" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse2">
                                <h4>فیلتر محصولات
                                    <span class="lnr lnr-chevron-down"></span>
                                </h4>
                            </a>
                            <div class="collapse show collapsible-content" id="collapse2">
                                <ul class="card-content">

                                    <li>
                                        <div class="custom-checkbox2">
                                            <input type="checkbox" id="opt2" class="" name="filter_opt">
                                            <label for="opt2">
                                                <span class="circle"></span>محصولات محبوب </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox2">
                                            <input type="checkbox" id="opt3" class="" name="filter_opt">
                                            <label for="opt3">
                                                <span class="circle"></span>جدید ترین محصولات </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox2">
                                            <input type="checkbox" id="opt4" class="" name="filter_opt">
                                            <label for="opt4">
                                                <span class="circle"></span>پر فروش ترین ها </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox2">
                                            <input type="checkbox" id="opt5" class="" name="filter_opt">
                                            <label for="opt5">
                                                <span class="circle"></span>بهترین امتیاز ها </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox2">
                                            <input type="checkbox" id="opt6" class="" name="filter_opt">
                                            <label for="opt6">
                                                <span class="circle"></span>پشتیبانی رایگان </label>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <!-- end /.sidebar-card -->

                        <div class="sidebar-card card--slider">
                            <a class="card-title" href="#collapse3" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse3">
                                <h4>فیلتر قیمت
                                    <span class="lnr lnr-chevron-down"></span>
                                </h4>
                            </a>
                            <div class="collapse show collapsible-content" id="collapse3">
                                <div class="card-content">
                                    <div class="range-slider price-range"></div>

                                    <div class="price-ranges">
                                        <span class="from rounded">30 تومان </span>
                                        <span class="to rounded">4000 تومان </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end /.sidebar-card -->
                    </aside>
                    <!-- end aside -->
                </div>
                <!-- end /.col-md-3 -->

                <!-- start col-md-9 -->
                <div class="col-lg-9">
                    <!-- start .single-product -->
                    
                    <!-- end /.single-product -->
                    <!-- start .single-product -->
                    <div class="product product--list product--list-small">
                       @foreach($category_packages as $package)
                       
                        <div class="product__thumbnail">
                            <img src="{{asset('assets/images/new/pl1.jpg')}}" alt="Product Image">
                            <div class="prod_btn">
                                <a href="single-product.html" class="transparent btn--sm btn--round">اطلاعات بیشتر </a>
                                <a href="single-product.html" class="transparent btn--sm btn--round">مشاهده</a>
                            </div>
                            <!-- end /.prod_btn -->
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class="product__details">
                            <div class="product-desc">
                                <a href="#" class="product_title">
                                    <h4>{{$package->package_title}}</h4>
                                </a>
                                <p>{{$package->package_description}}</p>

                                <ul class="titlebtm">
                                    <li class="product_cat">
                                        <a href="#">
                                            <span class="lnr lnr-book"></span>افزونه ها </a>
                                    </li>
                                </ul>
                                <!-- end /.titlebtm -->
                            </div>
                            <!-- end /.product-desc -->

                            <div class="product-meta">
                                <div class="author">
                                    <img class="auth-img" src="{{asset('assets/images/new/auth3.jpg')}}" alt="author image">
                                    <p>
                                        <a href="#">دامن دریا </a>
                                    </p>
                                </div>
                                <!-- end /.author -->

                                <div class="love-comments">
                                    <p>
                                        <span class="lnr lnr-heart"></span> 90 </p>
                                    <p>
                                        <span class="lnr lnr-bubble"></span> 90 </p>
                                </div>
                                <!-- end /.love-comments -->

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
                                    <span class="rating__count">(34)</span>
                                </div>
                                <!-- end /.rating -->
                            </div>
                            <!-- end /.product-meta -->

                            <div class="product-purchase">
                                <div class="price_love">
                                    <span>{{$package->package_price}} تومان</span>
                                </div>
                                <div class="sell">
                                    <p>
                                        <span class="lnr lnr-cart"></span>
                                        <span>16</span>
                                    </p>
                                </div>
                            </div>
                            <!-- end /.product-purchase -->
                        </div> @endforeach
                    </div>
                   
                    <!-- end /.single-product -->          <!-- start .single-product -->
                    <div class="product product--list product--list-small">

                        <div class="product__thumbnail">
                            <img src="{{asset('assets/images/new/pl1.jpg')}}" alt="Product Image">
                            <div class="prod_btn">
                                <a href="single-product.html" class="transparent btn--sm btn--round">اطلاعات بیشتر </a>
                                <a href="single-product.html" class="transparent btn--sm btn--round">مشاهده</a>
                            </div>
                            <!-- end /.prod_btn -->
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class="product__details">
                            <div class="product-desc">
                                <a href="#" class="product_title">
                                    <h4>قالب وفروشگاهی ورد پرس</h4>
                                </a>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>

                                <ul class="titlebtm">
                                    <li class="product_cat">
                                        <a href="#">
                                            <span class="lnr lnr-book"></span>افزونه ها </a>
                                    </li>
                                </ul>
                                <!-- end /.titlebtm -->
                            </div>
                            <!-- end /.product-desc -->

                            <div class="product-meta">
                                <div class="author">
                                    <img class="auth-img" src="{{asset('assets/images/new/auth3.jpg')}}" alt="author image">
                                    <p>
                                        <a href="#">دامن دریا </a>
                                    </p>
                                </div>
                                <!-- end /.author -->

                                <div class="love-comments">
                                    <p>
                                        <span class="lnr lnr-heart"></span> 90 </p>
                                    <p>
                                        <span class="lnr lnr-bubble"></span> 90 </p>
                                </div>
                                <!-- end /.love-comments -->

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
                                    <span class="rating__count">(34)</span>
                                </div>
                                <!-- end /.rating -->
                            </div>
                            <!-- end /.product-meta -->

                            <div class="product-purchase">
                                <div class="price_love">
                                    <span>10 تومان</span>
                                </div>
                                <div class="sell">
                                    <p>
                                        <span class="lnr lnr-cart"></span>
                                        <span>16</span>
                                    </p>
                                </div>
                            </div>
                            <!-- end /.product-purchase -->
                        </div>
                    </div>
                    <!-- end /.single-product -->          <!-- start .single-product -->
                    <div class="product product--list product--list-small">

                        <div class="product__thumbnail">
                            <img src="{{asset('assets/images/new/pl1.jpg')}}" alt="Product Image">
                            <div class="prod_btn">
                                <a href="single-product.html" class="transparent btn--sm btn--round">اطلاعات بیشتر </a>
                                <a href="single-product.html" class="transparent btn--sm btn--round">مشاهده</a>
                            </div>
                            <!-- end /.prod_btn -->
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class="product__details">
                            <div class="product-desc">
                                <a href="#" class="product_title">
                                    <h4>قالب وفروشگاهی ورد پرس</h4>
                                </a>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>

                                <ul class="titlebtm">
                                    <li class="product_cat">
                                        <a href="#">
                                            <span class="lnr lnr-book"></span>افزونه ها </a>
                                    </li>
                                </ul>
                                <!-- end /.titlebtm -->
                            </div>
                            <!-- end /.product-desc -->

                            <div class="product-meta">
                                <div class="author">
                                    <img class="auth-img" src="{{asset('assets/images/new/auth3.jpg')}}" alt="author image">
                                    <p>
                                        <a href="#">دامن دریا </a>
                                    </p>
                                </div>
                                <!-- end /.author -->

                                <div class="love-comments">
                                    <p>
                                        <span class="lnr lnr-heart"></span> 90 </p>
                                    <p>
                                        <span class="lnr lnr-bubble"></span> 90 </p>
                                </div>
                                <!-- end /.love-comments -->

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
                                    <span class="rating__count">(34)</span>
                                </div>
                                <!-- end /.rating -->
                            </div>
                            <!-- end /.product-meta -->

                            <div class="product-purchase">
                                <div class="price_love">
                                    <span>10 تومان</span>
                                </div>
                                <div class="sell">
                                    <p>
                                        <span class="lnr lnr-cart"></span>
                                        <span>16</span>
                                    </p>
                                </div>
                            </div>
                            <!-- end /.product-purchase -->
                        </div>
                    </div>
                    <!-- end /.single-product -->

                </div>
                <!-- end /.col-md-9 -->
            </div>
            <!-- end /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="pagination-area pull-left">
                        <nav class="navigation pagination" role="navigation">
                            <div class="nav-links">
                                <a class="next page-numbers" href="#">
                                    <span class="lnr lnr-arrow-right"></span>
                                </a>

                                <a class="page-numbers current" href="#">1</a>
                                <a class="page-numbers" href="#">2</a>
                                <a class="page-numbers" href="#">3</a>
                                <a class="prev page-numbers" href="#">
                                    <span class="lnr lnr-arrow-left"></span>
                                </a>

                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END PRODUCTS AREA
    =================================-->

    <!--================================
        START SEARCH AREA
    =================================-->
    <section class="search-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                </div>
            </div>
        </div>
    </section>
    <!--================================
       END SEARCH AREA
    =================================-->

    <!--================================
        START CALL TO ACTION AREA
    =================================-->
    <section class="call-to-action bgimage dir-rtl">
        <div class="bg_image_holder">
            <img src="assets/images/new/calltobg.jpg" alt="">
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