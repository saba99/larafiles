@extends('frontend.layout.master')



@section('content')


START HERO AREA
=================================-->
<section class="hero-area bgimage dir-rtl">
    <div class="bg_image_holder">
        <img src="assets/images/new/hero_area_bg1.jpg" alt="background-image">
    </div>
    <!-- start hero-content -->
    <div class="hero-content content_above">
        <!-- start .contact_wrapper -->
        <div class="content-wrapper">
            <!-- start .container -->
            <div class="container">
                <!-- start row -->
                <div class="row">
                    <!-- start col-md-12 -->
                    <div class="col-md-12">
                        <div class="hero__content__title">
                            <h1>
                                <span class="light">خودت بساز </span>
                                <span class="bold">بازار محصولات دیجیتال</span>
                            </h1>
                            <p class="tagline"> یک قالب قدرتمند و قابل تنظیم برای محصولات خود </p>
                        </div>

                        <!-- start .hero__btn-area-->
                        <div class="hero__btn-area">
                            <a href="all-products.html" class="btn btn--round btn--lg">مشاهده تمام محصولات</a>
                            <a href="all-products.html" class="btn btn--round btn--lg">محصولات محبوب</a>
                        </div>
                        <!-- end .hero__btn-area-->
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end .contact_wrapper -->
    </div>
    <!-- end hero-content -->

    <!--start search-area -->
    <div class="search-area">
        <!-- start .container -->
        <div class="container">
            <!-- start .container -->
            <div class="row">
                <!-- start .col-sm-12 -->
                <div class="col-sm-12">
                    <!-- start .search_box -->
                    <div class="search_box" >
                        <form action="{{route('search')}}" method="post" class="search-form">
                            @csrf
                            <input type="text" name="search" id="query"  class="text_field" placeholder="جستجو در محصولات ...">
                            <div class="search__select select-wrap">

                               
                                <select name="category_id" class="select--field" id="blah">
                                  @foreach($categories as $category)
                                    
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                   
                                     @endforeach
                                </select>
                               
                                <span class="lnr lnr-chevron-down"></span>
                            </div>
                            <button type="submit" class="search-btn btn--lg">جستجو</button>
                        </form>
                    </div>
                    <!-- end ./search_box -->
                </div>
                <!-- end /.col-sm-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </div>
    <!--start /.search-area -->
</section>
<!--================================
END HERO AREA
=================================-->

<!--================================
START FEATURE AREA
=================================-->
<section class="features section--padding dir-rtl">
    <!-- start container -->
    <div class="container">
        <!-- start row -->
        <div class="row">
            <!-- start search-area -->
            <div class="col-lg-4 col-md-6">
                <div class="feature">
                    <div class="feature__img">
                        <img src="assets/images/new/feature1.png" alt="feature">
                    </div>
                    <div class="feature__title">
                        <h3>بهترین تحقیق UX</h3>
                    </div>
                    <div class="feature__desc">
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است. </p>
                    </div>
                </div>
                <!-- end /.feature -->
            </div>
            <!-- end /.col-lg-4 col-md-6 -->

            <!-- start search-area -->
            <div class="col-lg-4 col-md-6">
                <div class="feature">
                    <div class="feature__img">
                        <img src="assets/images/new/feature2.png" alt="feature">
                    </div>
                    <div class="feature__title">
                        <h3>کاملا پاسخگو</h3>
                    </div>
                    <div class="feature__desc">
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است. </p>
                    </div>
                </div>
                <!-- end /.feature -->
            </div>
            <!-- end /.col-lg-4 col-md-6 -->

            <!-- start search-area -->
            <div class="col-lg-4 col-md-6">
                <!-- end /.col-lg-4 col-md-6 -->>
                <div class="feature">
                    <div class="feature__img">
                        <img src="assets/images/new/feature3.png" alt="feature">
                    </div>
                    <div class="feature__title">
                        <h3>خرید و فروش به راحتی</h3>
                    </div>
                    <div class="feature__desc">
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است. </p>
                    </div>
                </div>
                <!-- end /.feature -->
            </div
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>
<!--================================
END FEATURE AREA
=================================-->


<!--================================
START FEATURED PRODUCT AREA
=================================-->
<section class="featured-products bgcolor  section--padding ">
    <!-- start /.container -->
    <div class="container">
        <!-- start row -->
        <div class="row">
            <!-- start col-md-12 -->
            <div class="col-md-12">
                <div class="product-title-area ">
                    <div class="product__title">
                        <h2>محصولات ویژه هفتگی</h2>
                    </div>

                    <div class="product__slider-nav rounded">
                        <span class="lnr lnr-chevron-left nav_left"></span>
                        <span class="lnr lnr-chevron-right nav_right"></span>
                    </div>
                </div>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->
    </div>

    <!-- start .featured-product-slider -->


    <div class="container">
        <div class="row">
            <div class="col-md-12 no0-padding">
                <div class="featured-product-slider prod-slider1">
                    <div class="featured__single-slider">
                        <div class="featured__preview-img">
                            <img src="assets/images/new/featprod.jpg" alt="Featured products">
                            <div class="prod_btn">
                                <a href="single-product.html" class="transparent btn--sm btn--round">اطلاعات بیشتر</a>
                                <a href="single-product.html" class="transparent btn--sm btn--round">نمایش </a>
                            </div>
                        </div>
                        <!-- end /.featured__preview-img -->

                        <div class="featured__product-description">
                            <div class="product-desc desc--featured">
                                <a href="single-product.html" class="product_title">
                                    <h4>نمونه کارها / قالب رزومه</h4>
                                </a>
                                <ul class="titlebtm">
                                    <li>
                                        <img class="auth-img" src="assets/images/auth.jpg" alt="author image">
                                        <p>
                                            <a href="#">دامن دریا </a>
                                        </p>
                                    </li>
                                    <li class="product_cat">
                                        <a href="#">
                                            <span class="lnr lnr-book"></span> ورد پرس </a>
                                    </li>
                                </ul>
                                <!-- end /.titlebtm -->

                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                    برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی
                                    می باشد. </p>
                            </div>
                            <!-- end /.product-desc -->

                            <div class="product_data">
                                <div class="tags tags--round">
                                    <ul>
                                        <li>
                                            <a href="#">وب سایت </a>
                                        </li>
                                        <li>
                                            <a href="#">افزونه </a>
                                        </li>
                                        <li>
                                            <a href="#">صفحه intro</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end /.tags -->
                                <div class="product-purchase featured--product-purchase">
                                    <div class="price_love">
                                        <span>  10 تومان -  50 تو مان</span>
                                        <p>
                                            <span class="lnr lnr-heart"></span> 90</p>
                                    </div>
                                    <div class="sell">
                                        <p>
                                            <span class="lnr lnr-cart"></span>
                                            <span>16</span>
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
                                                <span class="fa fa-star"></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end /.product-purchase -->
                            </div>
                        </div>
                        <!-- end /.featured__product-description -->
                    </div>
                    <!--end /.featured__single-slider-->

                    <div class="featured__single-slider">
                        <div class="featured__preview-img">
                            <img src="assets/images/new/featprod.jpg" alt="Featured products">
                            <div class="prod_btn">
                                <a href="single-product.html" class="transparent btn--sm btn--round">اطلاعات بیشتر</a>
                                <a href="single-product.html" class="transparent btn--sm btn--round">نمایش </a>
                            </div>
                        </div>
                        <!-- end /.featured__preview-img -->

                        <div class="featured__product-description">
                            <div class="product-desc desc--featured">
                                <a href="single-product.html" class="product_title">
                                    <h4>قالب فروشگاهی </h4>
                                </a>
                                <ul class="titlebtm">
                                    <li>
                                        <img class="auth-img" src="assets/images/auth.jpg" alt="author image">
                                        <p>
                                            <a href="#">دامن دریا </a>
                                        </p>
                                    </li>
                                    <li class="product_cat">
                                        <a href="#">
                                            <span class="lnr lnr-book"></span> ورد پرس </a>
                                    </li>
                                </ul>
                                <!-- end /.titlebtm -->

                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                    برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی
                                    می باشد.</p>
                            </div>
                            <!-- end /.product-desc -->

                            <div class="product_data">
                                <div class="tags tags--round">
                                    <ul>
                                        <li>
                                            <a href="#">وب سایت </a>
                                        </li>
                                        <li>
                                            <a href="#">افزونه </a>
                                        </li>
                                        <li>
                                            <a href="#">صفحه intro</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end /.tags -->
                                <div class="product-purchase featured--product-purchase">
                                    <div class="price_love">
                                        <span>  10 تومان -  50 تو مان</span>
                                        <p>
                                            <span class="lnr lnr-heart"></span> 90</p>
                                    </div>
                                    <div class="sell">
                                        <p>
                                            <span class="lnr lnr-cart"></span>
                                            <span>16</span>
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
                                                <span class="fa fa-star"></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end /.product-purchase -->
                            </div>
                        </div>
                        <!-- end /.featured__product-description -->
                    </div>
                    <!--end /.featured__single-slider-->

                    <div class="featured__single-slider">
                        <div class="featured__preview-img">
                            <img src="assets/images/new/featprod.jpg" alt="Featured products">
                            <div class="prod_btn">
                                <a href="single-product.html" class="transparent btn--sm btn--round">اطلاعات بیشتر</a>
                                <a href="single-product.html" class="transparent btn--sm btn--round">نمایش </a>
                            </div>
                        </div>
                        <!-- end /.featured__preview-img -->

                        <div class="featured__product-description">
                            <div class="product-desc desc--featured">
                                <a href="single-product.html" class="product_title">
                                    <h4>بازار دیجیتال</h4>
                                </a>
                                <ul class="titlebtm">
                                    <li>
                                        <img class="auth-img" src="assets/images/auth.jpg" alt="author image">
                                        <p>
                                            <a href="#">دامن دریا</a>
                                        </p>
                                    </li>
                                    <li class="product_cat">
                                        <a href="#">
                                            <span class="lnr lnr-book"></span> ورد پرس </a>
                                    </li>
                                </ul>
                                <!-- end /.titlebtm -->

                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                    برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی
                                    می باشد.</p>
                            </div>
                            <!-- end /.product-desc -->

                            <div class="product_data">
                                <div class="tags tags--round">
                                    <ul>
                                        <li>
                                            <a href="#">وب سایت </a>
                                        </li>
                                        <li>
                                            <a href="#">افزونه </a>
                                        </li>
                                        <li>
                                            <a href="#">صفحه intro</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end /.tags -->
                                <div class="product-purchase featured--product-purchase">
                                    <div class="price_love">
                                        <span>  10 تومان -  50 تو مان</span>
                                        <p>
                                            <span class="lnr lnr-heart"></span> 90</p>
                                    </div>
                                    <div class="sell">
                                        <p>
                                            <span class="lnr lnr-cart"></span>
                                            <span>16</span>
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
                                                <span class="fa fa-star"></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end /.product-purchase -->
                            </div>
                        </div>
                        <!-- end /.featured__product-description -->
                    </div>
                    <!--end /.featured__single-slider-->

                    <div class="featured__single-slider">
                        <div class="featured__preview-img">
                            <img src="assets/images/new/featprod.jpg" alt="Featured products">
                            <div class="prod_btn">
                                <a href="single-product.html" class="transparent btn--sm btn--round">اطلاعات بیشتر</a>
                                <a href="single-product.html" class="transparent btn--sm btn--round">نمایش </a>
                            </div>
                        </div>
                        <!-- end /.featured__preview-img -->

                        <div class="featured__product-description">
                            <div class="product-desc desc--featured">
                                <a href="single-product.html" class="product_title">
                                    <h4>بازار دیجیتال</h4>
                                </a>
                                <ul class="titlebtm">
                                    <li>
                                        <img class="auth-img" src="assets/images/auth.jpg" alt="author image">
                                        <p>
                                            <a href="#">دامن دریا</a>
                                        </p>
                                    </li>
                                    <li class="product_cat">
                                        <a href="#">
                                            <span class="lnr lnr-book"></span> ورد پرس </a>
                                    </li>
                                </ul>
                                <!-- end /.titlebtm -->

                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                    برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی
                                    می باشد.</p>
                            </div>
                            <!-- end /.product-desc -->

                            <div class="product_data">
                                <div class="tags tags--round">
                                    <ul>
                                        <li>
                                            <a href="#">وب سایت </a>
                                        </li>
                                        <li>
                                            <a href="#">افزونه </a>
                                        </li>
                                        <li>
                                            <a href="#">صفحه intro</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end /.tags -->
                                <div class="product-purchase featured--product-purchase">
                                    <div class="price_love">
                                        <span>  10 تومان -  50 تو مان</span>
                                        <p>
                                            <span class="lnr lnr-heart"></span> 90</p>
                                    </div>
                                    <div class="sell">
                                        <p>
                                            <span class="lnr lnr-cart"></span>
                                            <span>16</span>
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
                                                <span class="fa fa-star"></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end /.product-purchase -->
                            </div>
                        </div>
                        <!-- end /.featured__product-description -->
                    </div>
                    <!--end /.featured__single-slider-->
                </div>
            </div>
        </div>
        <!-- end /.featured__preview-img -->
    </div>
    <!-- end /.featured-product-slider -->
</section>
<!--================================
END FEATURED PRODUCT AREA
=================================-->


<!--================================
START PRODUCTS AREA
=================================-->
<section class="products section--padding dir-rtl">
    <!-- start container -->
    <div class="container">
        <!-- start row -->
        <div class="row">
            <!-- start col-md-12 -->
            <div class="col-md-12">
                <div class="product-title-area">
                    <div class="product__title">
                        <h2>جدیدترین محصولات منتشر شده</h2>
                    </div>

                    <div class="filter__menu">
                        <p>فیلتر کردن توسط:</p>
                        <div class="filter__menu_icon">
                            <a href="#" id="drop1" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                <img class="svg" src="assets/images/svg/menu.svg" alt="menu icon">
                            </a>

                            <ul class="filter_dropdown dropdown-menu" aria-labelledby="drop1">

                                <li>
                                    <a href="#">بهترین فروشنده</a>
                                </li>
                                <li>
                                    <a href="#">بهترین امتیاز</a>
                                </li>
                                <li>
                                    <a href="#">قیمت پایین</a>
                                </li>
                                <li>
                                    <a href="#">قیمت بالا</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->

        <!-- start row -->
        <div class="row">
            <!-- start .col-md-12 -->
            <div class="col-md-12">
                <div class="sorting">
                    <ul>
                        <li>
                            <a href="#">افزونه </a>
                        </li>
                        <li>
                            <a href="#">ورد پرس </a>
                        </li>
                        <li>
                            <a href="#">قالب سایت</a>
                        </li>
                        <li>
                            <a href="#">قالب PSD</a>
                        </li>
                        <li>
                            <a href="#">جوملا</a>
                        </li>
                        <li>
                            <a href="#">رابط کاربری</a>
                        </li>
                        <li>
                            <a href="#">صفحه intro</a>
                        </li>
                        <li>
                            <a href="#">نرم افزار</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->

        <!-- start .row -->
       <div class="row">
            <!-- start .col-md-4 -->
            @if($latestPackages && count($latestPackages)>0)
             @foreach($latestPackages as $package)
                <div class="product product--card mx-2" >
                 
                    <div class="product__thumbnail">
                         
                        <img src="assets/images/new/p1.jpg" alt="Product Image">
                        <div class="prod_btn">
                            <a href="{{route('frontend.packages.details',$package->id)}}" class="transparent btn--sm btn--round">اطلاعات بیشتر</a>
                            <a href="{{route('cart.add',['id'=>$package->id])}}" class="transparent btn--sm btn--round">افزودن به کارت </a>
                        </div>
                        <!-- end /.prod_btn -->
                    </div>
                    <!-- end /.product__thumbnail -->

                    <div class="product-desc">
                        <a href="single-product.html" class="product_title">
                            <h4>{{$package->package_title}}</h4>
                        </a>
                        <ul class="titlebtm">
                            <li>
                                <img class="auth-img" src="assets/images/auth.jpg" alt="author image">
                                <p>                     {{--{{$package->users[0]->name}}--}}
                                    <a href="#"> </a>
                                </p>
                            </li>
                            <li class="product_cat">
                                <a href="#">
                                    <span class="lnr lnr-book"></span>افزونه </a>
                            </li>
                        </ul>
                            <p>{{$package->package_description}}</p>
                    </div>
                    <!-- end /.product-desc -->

                    <div class="product-purchase">
                        <div class="price_love">
                            <span>{{$package->package_price}} تومان </span>
                            <p>
                                <span class="lnr lnr-heart"></span> 90</p>
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
                
               @endforeach
               @endif 
            {{-- <div class="col-lg-4 col-md-6">
               
                <!-- start .single-product -->
               
                <!-- end /.single-product -->
               
            </div>
             
            <!-- end /.col-md-4 -->

            <!-- start col-md-12 -->
            <div class="col-md-12">
                <div class="product-title-area">
                    <div class="product__title">
                        <h2>فایل  ها </h2>
                    </div>

                    <div class="filter__menu">
                        
                        <div class="filter__menu_icon">
                            <a href="#" id="drop1" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                <img class="svg" src="assets/images/svg/menu.svg" alt="menu icon">
                            </a>

                            <ul class="filter_dropdown dropdown-menu" aria-labelledby="drop1">

                                <li>
                                    <a href="#">بهترین فروشنده</a>
                                </li>
                                <li>
                                    <a href="#">بهترین امتیاز</a>
                                </li>
                                <li>
                                    <a href="#">قیمت پایین</a>
                                </li>
                                <li>
                                    <a href="#">قیمت بالا</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end /.col-md-12 -->
        </div> --}} 
<div class="row text-center">
            <!-- start .col-md-4 -->
             @if($latestFiles && count($latestFiles)>0)
             @foreach($latestFiles as $file)
                <div class="product product--card  mx-4"  >
                 
                    <div class="product__thumbnail">
                         
                        <img src="{{asset('/storage/'.$file->file_name)}}" class="img-responsive" alt="Product Image">
                        <div class="prod_btn">
                            <a href="{{route('frontend.files.details',$file->id)}}" class="transparent btn--sm btn--round">اطلاعات بیشتر</a>
                            <a href="{{route('frontend.files.details',$file->id)}}" class="transparent btn--sm btn--round">نمایش </a>
                        </div>
                        <!-- end /.prod_btn -->
                    </div>
                    <!-- end /.product__thumbnail -->

                    <div class="product-desc">
                        <a href="single-product.html" class="product_title">
                            <h4>{{$file->file_title}}</h4>
                        </a>
                        <ul class="titlebtm">
                            <li>
                                <img class="auth-img" src="assets/images/auth.jpg" alt="author image">
                                <p>                     
                                    <a href="#"> </a>
                                </p>
                            </li>
                            <li class="product_cat">
                                <a href="#">
                                    <span class="lnr lnr-book"></span>افزونه </a>
                            </li>
                        </ul>
                            <p>{{$file->file_description}}</p>
                    </div>
                    <!-- end /.product-desc -->

                    <div class="product-purchase">
                        <div class="price_love">
                            <span>{{$file->file_price}} قیمت</span>
                            <p>
                                <span class="lnr lnr-heart"></span> 90</p>
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
                
               @endforeach
               @endif
            <div class="col-lg-4 col-md-6">
               
                <!-- start .single-product -->
               
                <!-- end /.single-product -->
               
            </div>
             
            <!-- end /.col-md-4 -->
          
        </div>

        <!-- end /.row -->

        <!-- start .row -->
        <div class="row">
            <div class="col-md-12">
                <div class="more-product">
                    <a href="all-products.html" class="btn btn--lg btn--round">همه محصولات جدید</a>
                </div>
            </div>
            <!-- end ./col-md-12 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>
<!--================================
END PRODUCTS AREA
=================================-->


<!--================================
START FOLLOWERS FEED AREA
=================================-->
<section class="followers-feed section--padding ">
    <!-- start .container -->
    <div class="container">
        <!-- start row -->
        <div class="row">
            <!-- start col-md-12 -->
            <div class="col-md-12">
                <div class="product-title-area">
                    <div class="product__title">
                        <h2>محصولات مورد علاقه شما</h2>
                    </div>

                    <div class="product__slider-nav follow_feed_nav rounded">
                        <span class="lnr lnr-chevron-left nav_left"></span>
                        <span class="lnr lnr-chevron-right nav_right"></span>
                    </div>
                </div>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->

        <!-- start /.row -->
        <div class="row " >
        <div class="col-md-12">
               
            <div class="col-md-12">
                <div class="product_slider dir-rtl " >
                    <!-- start .single-product -->
                    @foreach($popularPackages as $popularPackage)
                    <div class="product product--card">

                        <div class="product__thumbnail">
                            <img src="assets/images/new/p4.jpg" alt="Product Image">
                            <div class="prod_btn">
                                <a href="single-product.html" class="transparent btn--sm btn--round">اطلاعات بیشتر</a>
                                <a href="single-product.html" class="transparent btn--sm btn--round">نمایش </a>
                            </div>
                            <!-- end /.prod_btn -->
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class="product-desc">
                            <a href="#" class="product_title">
                                <h4>{{$popularPackage->package_title}} </h4>
                            </a>
                            <ul class="titlebtm">
                                <li>
                                    <img class="auth-img" src="assets/images/new/auth.jpg" alt="author image">
                                    <p>
                                        <a href="#">دامن دریا </a>
                                    </p>
                                </li>
                                <li class="product_cat">
                                    <a href="#">
                                        <span class="lnr lnr-book"></span>افزونه </a>
                                </li>
                            </ul>

                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است.</p>
                        </div>
                        <!-- end /.product-desc -->

                        <div class="product-purchase">
                            <div class="price_love">
                                <span>10 تومان - 50 تومان</span>
                                <p>
                                    <span class="lnr lnr-heart"></span> 90</p>
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

                    @endforeach
                    <!-- end /.single-product -->

                    <!-- start .single-product -->
                   
                    <!-- end /.single-product -->

                    <!--&lt;!&ndash; start .single-product &ndash;&gt;-->
                    <!--<div class="product product&#45;&#45;card">-->

                        <!--<div class="product__thumbnail">-->
                            <!--<img src="assets/images/new/p6.jpg" alt="Product Image">-->
                            <!--<div class="prod_btn">-->
                                <!--<a href="single-product.html" class="transparent btn&#45;&#45;sm btn&#45;&#45;round">اطلاعات بیشتر</a>-->
                                <!--<a href="single-product.html" class="transparent btn&#45;&#45;sm btn&#45;&#45;round">نمایش </a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash; end /.prod_btn &ndash;&gt;-->
                        <!--</div>-->
                        <!--&lt;!&ndash; end /.product__thumbnail &ndash;&gt;-->

                        <!--<div class="product-desc">-->
                            <!--<a href="#" class="product_title">-->
                                <!--<h4>قالب چند فروشندگی ورد پرسs</h4>-->
                            <!--</a>-->
                            <!--<ul class="titlebtm">-->
                                <!--<li>-->
                                    <!--<img class="auth-img" src="assets/images/new/auth3.jpg" alt="author image">-->
                                    <!--<p>-->
                                        <!--<a href="#">دامن دریا </a>-->
                                    <!--</p>-->
                                <!--</li>-->
                                <!--<li class="product_cat">-->
                                    <!--<a href="#">-->
                                        <!--<span class="lnr lnr-book"></span>ورد پرس </a>-->
                                <!--</li>-->
                            <!--</ul>-->

                            <!--<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک-->
                                <!--است.</p>-->
                        <!--</div>-->
                        <!--&lt;!&ndash; end /.product-desc &ndash;&gt;-->

                        <!--<div class="product-purchase">-->
                            <!--<div class="price_love">-->
                                <!--<span>رایگان </span>-->
                                <!--<p>-->
                                    <!--<span class="lnr lnr-heart"></span> 24</p>-->
                            <!--</div>-->
                            <!--<div class="sell">-->
                                <!--<p>-->
                                    <!--<span class="lnr lnr-cart"></span>-->
                                    <!--<span>27</span>-->
                                <!--</p>-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--&lt;!&ndash; end /.product-purchase &ndash;&gt;-->
                    <!--</div>-->
                    <!--&lt;!&ndash; end /.single-product &ndash;&gt;-->

                    <!--&lt;!&ndash; start .single-product &ndash;&gt;-->
                    <!--<div class="product product&#45;&#45;card">-->

                        <!--<div class="product__thumbnail">-->
                            <!--<img src="assets/images/new/p4.jpg" alt="Product Image">-->
                            <!--<div class="prod_btn">-->
                                <!--<a href="single-product.html" class="transparent btn&#45;&#45;sm btn&#45;&#45;round">اطلاعات بیشتر</a>-->
                                <!--<a href="single-product.html" class="transparent btn&#45;&#45;sm btn&#45;&#45;round">نمایش </a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash; end /.prod_btn &ndash;&gt;-->
                        <!--</div>-->
                        <!--&lt;!&ndash; end /.product__thumbnail &ndash;&gt;-->

                        <!--<div class="product-desc">-->
                            <!--<a href="#" class="product_title">-->
                                <!--<h4>اسکریپ دریا </h4>-->
                            <!--</a>-->
                            <!--<ul class="titlebtm">-->
                                <!--<li>-->
                                    <!--<img class="auth-img" src="assets/images/new/auth.jpg" alt="author image">-->
                                    <!--<p>-->
                                        <!--<a href="#">دامن دریا </a>-->
                                    <!--</p>-->
                                <!--</li>-->
                                <!--<li class="product_cat">-->
                                    <!--<a href="#">-->
                                        <!--<span class="lnr lnr-book"></span>افزونه </a>-->
                                <!--</li>-->
                            <!--</ul>-->

                            <!--<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک-->
                                <!--است.</p>-->
                        <!--</div>-->
                        <!--&lt;!&ndash; end /.product-desc &ndash;&gt;-->

                        <!--<div class="product-purchase">-->
                            <!--<div class="price_love">-->
                                <!--<span>10 تومان - 50 تومان</span>-->
                                <!--<p>-->
                                    <!--<span class="lnr lnr-heart"></span> 90</p>-->
                            <!--</div>-->
                            <!--<div class="sell">-->
                                <!--<p>-->
                                    <!--<span class="lnr lnr-cart"></span>-->
                                    <!--<span>16</span>-->
                                <!--</p>-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--&lt;!&ndash; end /.product-purchase &ndash;&gt;-->
                    <!--</div>-->
                    <!--&lt;!&ndash; end /.single-product &ndash;&gt;-->

                    <!--&lt;!&ndash; start .single-product &ndash;&gt;-->

                    <!--<div class="product product&#45;&#45;card">-->

                        <!--<div class="product__thumbnail">-->
                            <!--<img src="assets/images/new/p2.jpg" alt="Product Image">-->
                            <!--<div class="prod_btn">-->
                                <!--<a href="single-product.html" class="transparent btn&#45;&#45;sm btn&#45;&#45;round">اطلاعات بیشتر</a>-->
                                {{-- <!--<a href="{{route(['cart.add','id'=>$package->id])}}" class="transparent btn&#45;&#45;sm btn&#45;&#45;round">اضافه کردن به سبد خرید  </a>--> --}}
                            <!--</div>-->
                            <!--&lt;!&ndash; end /.prod_btn &ndash;&gt;-->
                        <!--</div>-->
                        <!--&lt;!&ndash; end /.product__thumbnail &ndash;&gt;-->

                        <!--<div class="product-desc">-->
                            <!--<a href="#" class="product_title">-->
                                <!--<h4>قالب psd </h4>-->
                            <!--</a>-->
                            <!--<ul class="titlebtm">-->
                                <!--<li>-->
                                    <!--<img class="auth-img" src="assets/images/new/auth2.jpg" alt="author image">-->
                                    <!--<p>-->
                                        <!--<a href="#">دامن دریا </a>-->
                                    <!--</p>-->
                                <!--</li>-->
                                <!--<li class="product_cat">-->
                                    <!--<a href="#">-->
                                        <!--<span class="lnr lnr-book"></span>افزونه </a>-->
                                <!--</li>-->
                            <!--</ul>-->

                            <!--<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک-->
                                <!--است.</p>-->
                        <!--</div>-->
                        <!--&lt;!&ndash; end /.product-desc &ndash;&gt;-->

                        <!--<div class="product-purchase">-->
                            <!--<div class="price_love">-->
                                <!--<span>10 تومان</span>-->
                                <!--<p>-->
                                    <!--<span class="lnr lnr-heart"></span> 48</p>-->
                            <!--</div>-->
                            <!--<div class="sell">-->
                                <!--<p>-->
                                    <!--<span class="lnr lnr-cart"></span>-->
                                    <!--<span>50</span>-->
                                <!--</p>-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--&lt;!&ndash; end /.product-purchase &ndash;&gt;-->
                    <!--</div>-->
                    <!--&lt;!&ndash; end /.single-product &ndash;&gt;-->

                    <!--&lt;!&ndash; start .single-product &ndash;&gt;-->
                    <!--<div class="product product&#45;&#45;card">-->

                        <!--<div class="product__thumbnail">-->
                            <!--<img src="assets/images/new/p6.jpg" alt="Product Image">-->
                            <!--<div class="prod_btn">-->
                                <!--<a href="single-product.html" class="transparent btn&#45;&#45;sm btn&#45;&#45;round">اطلاعات بیشتر</a>-->
                                <!--<a href="single-product.html" class="transparent btn&#45;&#45;sm btn&#45;&#45;round">نمایش </a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash; end /.prod_btn &ndash;&gt;-->
                        <!--</div>-->
                        <!--&lt;!&ndash; end /.product__thumbnail &ndash;&gt;-->

                        <!--<div class="product-desc">-->
                            <!--<a href="#" class="product_title">-->
                                <!--<h4>قالب چند فروشندگی ورد پرسs</h4>-->
                            <!--</a>-->
                            <!--<ul class="titlebtm">-->
                                <!--<li>-->
                                    <!--<img class="auth-img" src="assets/images/new/auth3.jpg" alt="author image">-->
                                    <!--<p>-->
                                        <!--<a href="#">دامن دریا </a>-->
                                    <!--</p>-->
                                <!--</li>-->
                                <!--<li class="product_cat">-->
                                    <!--<a href="#">-->
                                        <!--<span class="lnr lnr-book"></span>ورد پرس </a>-->
                                <!--</li>-->
                            <!--</ul>-->

                            <!--<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک-->
                                <!--است.</p>-->
                        <!--</div>-->
                        <!--&lt;!&ndash; end /.product-desc &ndash;&gt;-->

                        <!--<div class="product-purchase">-->
                            <!--<div class="price_love">-->
                                <!--<span>رایگان </span>-->
                                <!--<p>-->
                                    <!--<span class="lnr lnr-heart"></span> 24</p>-->
                            <!--</div>-->
                            <!--<div class="sell">-->
                                <!--<p>-->
                                    <!--<span class="lnr lnr-cart"></span>-->
                                    <!--<span>27</span>-->
                                <!--</p>-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--&lt;!&ndash; end /.product-purchase &ndash;&gt;-->
                    <!--</div>-->
                    <!--&lt;!&ndash; end /.single-product &ndash;&gt;-->
                </div>
            </div>
        </div>
        <!-- end /.row -->

       
    </div>
     <div class="row " >
              <div class="col-md-12">
                <div class="product-title-area">
                    <div class="product__title">
                        <h2>محصولات پر فروش</h2>
                    </div>

                    <div class="product__slider-nav follow_feed_nav rounded">
                        <span class="lnr lnr-chevron-left nav_left"></span>
                        <span class="lnr lnr-chevron-right nav_right"></span>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="product_slider dir-rtl " >
                    <!-- start .single-product -->
                    @foreach($topSellers as $topSellers)
                    <div class="product product--card">

                        <div class="product__thumbnail">
                            <img src="assets/images/new/p4.jpg" alt="Product Image">
                            <div class="prod_btn">
                                <a href="single-product.html" class="transparent btn--sm btn--round">اطلاعات بیشتر</a>
                                <a href="single-product.html" class="transparent btn--sm btn--round">نمایش </a>
                            </div>
                            <!-- end /.prod_btn -->
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class="product-desc">
                            <a href="#" class="product_title">
                                <h4>{{$topSellers->package_title}} </h4>
                            </a>
                            <ul class="titlebtm">
                                <li>
                                    <img class="auth-img" src="assets/images/new/auth.jpg" alt="author image">
                                    <p>
                                        <a href="#">دامن دریا </a>
                                    </p>
                                </li>
                                <li class="product_cat">
                                    <a href="#">
                                        <span class="lnr lnr-book"></span>افزونه </a>
                                </li>
                            </ul>

                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است.</p>
                        </div>
                        <!-- end /.product-desc -->

                        <div class="product-purchase">
                            <div class="price_love">
                                <span>10 تومان - 50 تومان</span>
                                <p>
                                    <span class="lnr lnr-heart"></span> 90</p>
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

                    @endforeach
                    <!-- end /.single-product -->

                    <!-- start .single-product -->
                   
                    <!-- end /.single-product -->

                    <!--&lt;!&ndash; start .single-product &ndash;&gt;-->
                    <!--<div class="product product&#45;&#45;card">-->

                        <!--<div class="product__thumbnail">-->
                            <!--<img src="assets/images/new/p6.jpg" alt="Product Image">-->
                            <!--<div class="prod_btn">-->
                                <!--<a href="single-product.html" class="transparent btn&#45;&#45;sm btn&#45;&#45;round">اطلاعات بیشتر</a>-->
                                <!--<a href="single-product.html" class="transparent btn&#45;&#45;sm btn&#45;&#45;round">نمایش </a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash; end /.prod_btn &ndash;&gt;-->
                        <!--</div>-->
                        <!--&lt;!&ndash; end /.product__thumbnail &ndash;&gt;-->

                        <!--<div class="product-desc">-->
                            <!--<a href="#" class="product_title">-->
                                <!--<h4>قالب چند فروشندگی ورد پرسs</h4>-->
                            <!--</a>-->
                            <!--<ul class="titlebtm">-->
                                <!--<li>-->
                                    <!--<img class="auth-img" src="assets/images/new/auth3.jpg" alt="author image">-->
                                    <!--<p>-->
                                        <!--<a href="#">دامن دریا </a>-->
                                    <!--</p>-->
                                <!--</li>-->
                                <!--<li class="product_cat">-->
                                    <!--<a href="#">-->
                                        <!--<span class="lnr lnr-book"></span>ورد پرس </a>-->
                                <!--</li>-->
                            <!--</ul>-->

                            <!--<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک-->
                                <!--است.</p>-->
                        <!--</div>-->
                        <!--&lt;!&ndash; end /.product-desc &ndash;&gt;-->

                        <!--<div class="product-purchase">-->
                            <!--<div class="price_love">-->
                                <!--<span>رایگان </span>-->
                                <!--<p>-->
                                    <!--<span class="lnr lnr-heart"></span> 24</p>-->
                            <!--</div>-->
                            <!--<div class="sell">-->
                                <!--<p>-->
                                    <!--<span class="lnr lnr-cart"></span>-->
                                    <!--<span>27</span>-->
                                <!--</p>-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--&lt;!&ndash; end /.product-purchase &ndash;&gt;-->
                    <!--</div>-->
                    <!--&lt;!&ndash; end /.single-product &ndash;&gt;-->

                    <!--&lt;!&ndash; start .single-product &ndash;&gt;-->
                    <!--<div class="product product&#45;&#45;card">-->

                        <!--<div class="product__thumbnail">-->
                            <!--<img src="assets/images/new/p4.jpg" alt="Product Image">-->
                            <!--<div class="prod_btn">-->
                                <!--<a href="single-product.html" class="transparent btn&#45;&#45;sm btn&#45;&#45;round">اطلاعات بیشتر</a>-->
                                <!--<a href="single-product.html" class="transparent btn&#45;&#45;sm btn&#45;&#45;round">نمایش </a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash; end /.prod_btn &ndash;&gt;-->
                        <!--</div>-->
                        <!--&lt;!&ndash; end /.product__thumbnail &ndash;&gt;-->

                        <!--<div class="product-desc">-->
                            <!--<a href="#" class="product_title">-->
                                <!--<h4>اسکریپ دریا </h4>-->
                            <!--</a>-->
                            <!--<ul class="titlebtm">-->
                                <!--<li>-->
                                    <!--<img class="auth-img" src="assets/images/new/auth.jpg" alt="author image">-->
                                    <!--<p>-->
                                        <!--<a href="#">دامن دریا </a>-->
                                    <!--</p>-->
                                <!--</li>-->
                                <!--<li class="product_cat">-->
                                    <!--<a href="#">-->
                                        <!--<span class="lnr lnr-book"></span>افزونه </a>-->
                                <!--</li>-->
                            <!--</ul>-->

                            <!--<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک-->
                                <!--است.</p>-->
                        <!--</div>-->
                        <!--&lt;!&ndash; end /.product-desc &ndash;&gt;-->

                        <!--<div class="product-purchase">-->
                            <!--<div class="price_love">-->
                                <!--<span>10 تومان - 50 تومان</span>-->
                                <!--<p>-->
                                    <!--<span class="lnr lnr-heart"></span> 90</p>-->
                            <!--</div>-->
                            <!--<div class="sell">-->
                                <!--<p>-->
                                    <!--<span class="lnr lnr-cart"></span>-->
                                    <!--<span>16</span>-->
                                <!--</p>-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--&lt;!&ndash; end /.product-purchase &ndash;&gt;-->
                    <!--</div>-->
                    <!--&lt;!&ndash; end /.single-product &ndash;&gt;-->

                    <!--&lt;!&ndash; start .single-product &ndash;&gt;-->

                    <!--<div class="product product&#45;&#45;card">-->

                        <!--<div class="product__thumbnail">-->
                            <!--<img src="assets/images/new/p2.jpg" alt="Product Image">-->
                            <!--<div class="prod_btn">-->
                                <!--<a href="single-product.html" class="transparent btn&#45;&#45;sm btn&#45;&#45;round">اطلاعات بیشتر</a>-->
                                {{-- <!--<a href="{{route(['cart.add','id'=>$package->id])}}" class="transparent btn&#45;&#45;sm btn&#45;&#45;round">اضافه کردن به سبد خرید  </a>--> --}}
                            <!--</div>-->
                            <!--&lt;!&ndash; end /.prod_btn &ndash;&gt;-->
                        <!--</div>-->
                        <!--&lt;!&ndash; end /.product__thumbnail &ndash;&gt;-->

                        <!--<div class="product-desc">-->
                            <!--<a href="#" class="product_title">-->
                                <!--<h4>قالب psd </h4>-->
                            <!--</a>-->
                            <!--<ul class="titlebtm">-->
                                <!--<li>-->
                                    <!--<img class="auth-img" src="assets/images/new/auth2.jpg" alt="author image">-->
                                    <!--<p>-->
                                        <!--<a href="#">دامن دریا </a>-->
                                    <!--</p>-->
                                <!--</li>-->
                                <!--<li class="product_cat">-->
                                    <!--<a href="#">-->
                                        <!--<span class="lnr lnr-book"></span>افزونه </a>-->
                                <!--</li>-->
                            <!--</ul>-->

                            <!--<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک-->
                                <!--است.</p>-->
                        <!--</div>-->
                        <!--&lt;!&ndash; end /.product-desc &ndash;&gt;-->

                        <!--<div class="product-purchase">-->
                            <!--<div class="price_love">-->
                                <!--<span>10 تومان</span>-->
                                <!--<p>-->
                                    <!--<span class="lnr lnr-heart"></span> 48</p>-->
                            <!--</div>-->
                            <!--<div class="sell">-->
                                <!--<p>-->
                                    <!--<span class="lnr lnr-cart"></span>-->
                                    <!--<span>50</span>-->
                                <!--</p>-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--&lt;!&ndash; end /.product-purchase &ndash;&gt;-->
                    <!--</div>-->
                    <!--&lt;!&ndash; end /.single-product &ndash;&gt;-->

                    <!--&lt;!&ndash; start .single-product &ndash;&gt;-->
                    <!--<div class="product product&#45;&#45;card">-->

                        <!--<div class="product__thumbnail">-->
                            <!--<img src="assets/images/new/p6.jpg" alt="Product Image">-->
                            <!--<div class="prod_btn">-->
                                <!--<a href="single-product.html" class="transparent btn&#45;&#45;sm btn&#45;&#45;round">اطلاعات بیشتر</a>-->
                                <!--<a href="single-product.html" class="transparent btn&#45;&#45;sm btn&#45;&#45;round">نمایش </a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash; end /.prod_btn &ndash;&gt;-->
                        <!--</div>-->
                        <!--&lt;!&ndash; end /.product__thumbnail &ndash;&gt;-->

                        <!--<div class="product-desc">-->
                            <!--<a href="#" class="product_title">-->
                                <!--<h4>قالب چند فروشندگی ورد پرسs</h4>-->
                            <!--</a>-->
                            <!--<ul class="titlebtm">-->
                                <!--<li>-->
                                    <!--<img class="auth-img" src="assets/images/new/auth3.jpg" alt="author image">-->
                                    <!--<p>-->
                                        <!--<a href="#">دامن دریا </a>-->
                                    <!--</p>-->
                                <!--</li>-->
                                <!--<li class="product_cat">-->
                                    <!--<a href="#">-->
                                        <!--<span class="lnr lnr-book"></span>ورد پرس </a>-->
                                <!--</li>-->
                            <!--</ul>-->

                            <!--<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک-->
                                <!--است.</p>-->
                        <!--</div>-->
                        <!--&lt;!&ndash; end /.product-desc &ndash;&gt;-->

                        <!--<div class="product-purchase">-->
                            <!--<div class="price_love">-->
                                <!--<span>رایگان </span>-->
                                <!--<p>-->
                                    <!--<span class="lnr lnr-heart"></span> 24</p>-->
                            <!--</div>-->
                            <!--<div class="sell">-->
                                <!--<p>-->
                                    <!--<span class="lnr lnr-cart"></span>-->
                                    <!--<span>27</span>-->
                                <!--</p>-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--&lt;!&ndash; end /.product-purchase &ndash;&gt;-->
                    <!--</div>-->
                    <!--&lt;!&ndash; end /.single-product &ndash;&gt;-->
                </div>
            </div>
        </div>
    <!-- start /.container -->
</section>
<!--================================
END FOLLOWERS FEED AREA
=================================-->

<!--================================
START COUNTER UP AREA
=================================-->
<section class="counter-up-area bgimage dir-rtl">
    <div class="bg_image_holder">
        <img src="assets/images/new/countbg.jpg" alt="">
    </div>
    <!-- start .container -->
    <div class="container content_above">
        <!-- start .col-md-12 -->
        <div class="col-md-12">
            <div class="counter-up">
                <div class="counter mcolor2">
                    <span class="lnr lnr-briefcase"></span>
                    <span class="count">38,436</span>
                    <p>آیتم برای فروش</p>
                </div>
                <div class="counter mcolor3">
                    <span class="lnr lnr-cloud-download"></span>
                    <span class="count">38,436</span>
                    <p>مجموع فروش</p>
                </div>
                <div class="counter mcolor1">
                    <span class="lnr lnr-smile"></span>
                    <span class="count">38,436</span>
                    <p>مشتریان راضی </p>
                </div>
                <div class="counter mcolor4">
                    <span class="lnr lnr-users"></span>
                    <span class="count">38,436</span>
                    <p>کاربر</p>
                </div>
            </div>
        </div>
        <!-- end /.col-md-12 -->
    </div>
    <!-- end /.container -->
</section>
<!--================================
END COUNTER UP AREA
=================================-->


<section class="why_choose section--padding dir-rtl">
    <!-- start container -->
    <div class="container">
        <!-- start row -->
        <div class="row">
            <!-- start col-md-12 -->
            <div class="col-md-12">
                <div class="section-title">
                    <h1>چرا
                        <span class="highlighted">ما</span>
                        را انتخاب کنید
                    </h1>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                </div>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->

        <!-- start row -->
        <div class="row">
            <!-- start .col-md-4 -->
            <div class="col-lg-4 col-md-6">
                <!-- start .reason -->
                <div class="feature2">
                    <span class="feature2__count">01</span>
                    <div class="feature2__content">
                        <span class="lnr lnr-license pcolor"></span>
                        <h3 class="feature2-title">یک بار پرداخت کنید</h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است. </p>
                    </div>
                    <!-- end /.feature2__content -->
                </div>
                <!-- end /.feature2 -->
            </div>
            <!-- end /.col-md-4 -->

            <!-- start .col-md-4 -->
            <div class="col-lg-4 col-md-6">
                <!-- start .feature2 -->
                <div class="feature2">
                    <span class="feature2__count">02</span>
                    <div class="feature2__content">
                        <span class="lnr lnr-magic-wand scolor"></span>
                        <h3 class="feature2-title">کیفیت محصولات</h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است. </p>
                    </div>
                    <!-- end /.feature2__content -->
                </div>
                <!-- end /.feature2 -->
            </div>
            <!-- end /.col-md-4 -->

            <!-- start .col-md-4 -->
            <div class="col-lg-4 col-md-6">
                <!-- start .feature2 -->
                <div class="feature2">
                    <span class="feature2__count">03</span>
                    <div class="feature2__content">
                        <span class="lnr lnr-lock mcolor1"></span>
                        <h3 class="feature2-title">100% پرداخت امن </h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است. </p>
                    </div>
                    <!-- end /.feature2__content -->
                </div>
                <!-- end /.feature2 -->
            </div>
            <!-- end /.col-md-4 -->

            <!-- start .col-md-4 -->
            <div class="col-lg-4 col-md-6">
                <!-- start .feature2 -->
                <div class="feature2">
                    <span class="feature2__count">04</span>
                    <div class="feature2__content">
                        <span class="lnr lnr-chart-bars mcolor2"></span>
                        <h3 class="feature2-title">کد های بهینه </h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است.</p>
                    </div>
                    <!-- end /.feature2__content -->
                </div>
                <!-- end /.feature2 -->
            </div>
            <!-- end /.col-md-4 -->

            <!-- start .col-md-4 -->
            <div class="col-lg-4 col-md-6">
                <!-- start .feature2 -->
                <div class="feature2">
                    <span class="feature2__count">05</span>
                    <div class="feature2__content">
                        <span class="lnr lnr-leaf mcolor3"></span>
                        <h3 class="feature2-title">رایگان آپدیت کنید </h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است. </p>
                    </div>
                    <!-- end /.feature2__content -->
                </div>
                <!-- end /.feature2 -->
            </div>
            <!-- end /.col-md-4 -->

            <!-- start .col-md-4 -->
            <div class="col-lg-4 col-md-6">
                <!-- start .feature2 -->
                <div class="feature2">
                    <span class="feature2__count">06</span>
                    <div class="feature2__content">
                        <span class="lnr lnr-phone mcolor4"></span>
                        <h3 class="feature2-title">پشتیبانی سریع </h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است.</p>
                    </div>
                    <!-- end /.feature2__content -->
                </div>
                <!-- end /.feature2 -->
            </div>
            <!-- end /.col-md-4 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>
<!--================================
END COUNTER UP AREA
=================================-->

<!--================================
START SELL BUY
=================================-->
<section class="proposal-area dir-rtl">

    <!-- start container-fluid -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 no-padding">
                <div class="proposal proposal--left bgimage">
                    <div class="bg_image_holder">
                        <img src="assets/images/new/bbg.png" alt="prop image">
                    </div>
                    <div class="content_above">
                        <div class="proposal__icon ">
                            <img src="assets/images/new/buy.png" alt="Buy icon">
                        </div>
                        <div class="proposal__content ">
                            <h1 class="text--white">فروش محصولات شما</h1>
                            <p class="text--white">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                استفاده از طراحان گرافیک است. </p>
                        </div>
                        <a href="#" class="btn--round btn btn--lg btn--white">تبدیل شدن به فروشنده </a>
                    </div>
                </div>
                <!-- end /.proposal -->
            </div>

            <div class="col-md-6 no-padding">
                <div class="proposal proposal--right">
                    <div class="bg_image_holder">
                        <img src="assets/images/new/sbg.png" alt="this is magic">
                    </div>
                    <div class="content_above">
                        <div class="proposal__icon">
                            <img src="assets/images/new/sell.png" alt="Sell icon">
                        </div>
                        <div class="proposal__content ">
                            <h1 class="text--white">شروع به خرید امروز</h1>
                            <p class="text--white">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                استفاده از طراحان گرافیک است. </p>
                        </div>
                        <a href="#" class="btn--round btn btn--lg btn--white">شروع خرید </a>
                    </div>
                </div>
                <!-- end /.proposal -->
            </div>
        </div>
    </div>
    <!-- start container-fluid -->
</section>
<!--================================
END SELL BUY
=================================-->

<!--================================
START TESTIMONIAL
=================================-->
<section class="testimonial-area section--padding ">
    <!-- start .container -->
    <div class="container">
        <!-- start row -->
        <div class="row">
            <!-- start col-md-12 -->
           
            <div class="col-md-12">
                <div class="section-title">
                    <h1>
                        <span class="highlighted">نظرات</span>
                        مشتریان
                    </h1>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                </div>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->

        <!-- start row -->
        <div class="row">
            <!-- start .col-md-12 -->
            <div class="col-md-12">
                <div class="testimonial-slider">
                    @foreach($Comments as $comment)
                    <div class="testimonial">
                        <div class="testimonial__about">
                            <div class="avatar v_middle">
                                <img src="assets/images/new/test1.jpg" alt="Testimonial Avatar">
                            </div>                {{--{{$comment->package[0]->package_title}}--}}
                            <div class="name-designation v_middle">
                                <h4 class="name"> کاربر</h4>
                                <span class="desig">طراح محصول </span>
                            </div>
                            <span class="lnr lnr-bubble quote-icon"></span>
                        </div>
                        <div class="testimonial__text">
                            <p>{{$comment->description}} </p>
                        </div>
                    </div>
                    @endforeach
                    <!-- end /.testimonial -->

                    {{-- <div class="testimonial">
                        <div class="testimonial__about">
                            <div class="avatar v_middle">
                                <img src="assets/images/new/test2.jpg" alt="Testimonial Avatar">
                            </div>
                            <div class="name-designation v_middle">
                                <h4 class="name">کاربر تست </h4>
                                <span class="desig">طراح محصویل </span>
                            </div>
                            <span class="lnr lnr-bubble quote-icon"></span>
                        </div>
                        <div class="testimonial__text">
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط
                                فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>
                        </div>
                    </div>
                    <!-- end /.testimonial -->
                    <div class="testimonial">
                        <div class="testimonial__about">
                            <div class="avatar v_middle">
                                <img src="assets/images/new/test1.jpg" alt="Testimonial Avatar">
                            </div>
                            <div class="name-designation v_middle">
                                <h4 class="name">کاربر تست </h4>
                                <span class="desig">طراح محصویل </span>
                            </div>
                            <span class="lnr lnr-bubble quote-icon"></span>
                        </div>
                        <div class="testimonial__text">
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط
                                فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>
                        </div>
                    </div>
                    <!-- end /.testimonial -->

                    <div class="testimonial">
                        <div class="testimonial__about">
                            <div class="avatar v_middle">
                                <img src="assets/images/new/test2.jpg" alt="Testimonial Avatar">
                            </div>
                            <div class="name-designation v_middle">
                                <h4 class="name">کاربر تست </h4>
                                <span class="desig">طراح محصویل </span>
                            </div>
                            <span class="lnr lnr-bubble quote-icon"></span>
                        </div>
                        <div class="testimonial__text">
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط
                                فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>
                        </div>
                    </div> --}}
                    <!-- end /.testimonial -->


                </div>
                <!-- end /.testimonial_slider -->

                <div class="all-testimonial">
                    <a href="testimonial.html" class="btn btn--lg btn--round">مشاهده تمام نظرات</a>
                </div>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end container -->
</section>
<!--================================
END TESTIMONIAL
=================================-->

<!--================================
START LATEST NEWS
=================================-->
<section class="latest-news section--padding dir-rtl">
    <!-- start /.container -->
    <div class="container">
        <!-- start row -->
        <div class="row">
            <!-- start col-md-12 -->
            <div class="col-md-12">
                <div class="section-title">
                    <h1>آخرین
                        <span class="highlighted">اخبار</span>
                    </h1>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                </div>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->

        <!-- start .row -->
        <div class="row">
            <!-- start .col-md-4 -->
            <div class="col-lg-4 col-md-6">
                <div class="news">
                    <div class="news__thumbnail">
                        <img src="assets/images/new/news1.png" alt="News Thumbnail">
                    </div>
                    <div class="news__content">
                        <a href="#" class="news-title">
                            <h4>روند طراحی وب در سال 2019</h4>
                        </a>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است.</p>
                    </div>
                    <div class="news__meta">
                        <div class="date">
                            <span class="lnr lnr-clock"></span>
                            <p>17 آبان 1397</p>
                        </div>

                        <div class="other">
                            <ul>
                                <li>
                                    <span class="lnr lnr-bubble"></span>
                                    <span>45</span>
                                </li>
                                <li>
                                    <span class="lnr lnr-eye"></span>
                                    <span>345</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end /.col-md-4 -->

            <!-- start .col-md-4 -->
            <div class="col-lg-4 col-md-6">
                <div class="news">
                    <div class="news__thumbnail">
                        <img src="assets/images/new/news2.png" alt="News Thumbnail">
                    </div>
                    <div class="news__content">
                        <a href="#" class="news-title">
                            <h4>بهترین توصیه برای شروع پروژه خود</h4>
                        </a>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است.</p>
                    </div>
                    <div class="news__meta">
                        <div class="date">
                            <span class="lnr lnr-clock"></span>
                            <p>17 آبان 1397</p>
                        </div>

                        <div class="other">
                            <ul>
                                <li>
                                    <span class="lnr lnr-bubble"></span>
                                    <span>45</span>
                                </li>
                                <li>
                                    <span class="lnr lnr-eye"></span>
                                    <span>345</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end /.col-md-4 -->

            <!-- start .col-md-4 -->
            <div class="col-lg-4 col-md-6">
                <div class="news">
                    <div class="news__thumbnail">
                        <img src="assets/images/new/news1.png" alt="News Thumbnail">
                    </div>
                    <div class="news__content">
                        <a href="#" class="news-title">
                            <h4>10 ابزار برای طراحی قالب</h4>
                        </a>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است.</p>
                    </div>
                    <div class="news__meta">
                        <div class="date">
                            <span class="lnr lnr-clock"></span>
                            <p>17 آبان 1397</p>
                        </div>

                        <div class="other">
                            <ul>
                                <li>
                                    <span class="lnr lnr-bubble"></span>
                                    <span>45</span>
                                </li>
                                <li>
                                    <span class="lnr lnr-eye"></span>
                                    <span>345</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end /.col-md-4 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>
<!--================================
END LATEST NEWS
=================================-->

<!--================================
START SPECIAL FEATURES AREA
=================================-->
<section class="special-feature-area dir-rtl">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="special-feature feature--1">
                    <img src="assets/images/new/spf1.png" alt="Special Feature image">
                    <h3 class="special__feature-title">30 روز
                        <span class="highlight">گارانتی</span>
                        برگشت پول
                    </h3>
                </div>
            </div>
            <!-- end /.col-md-6 -->
            <div class="col-md-6">
                <div class="special-feature feature--2">
                    <img src="assets/images/new/spf2.png" alt="Special Feature image">
                    <h3 class="special__feature-title">
                        <span class="highlight">پشتیبانی</span>
                        سریع
                    </h3>
                </div>
            </div>
            <!-- end /.col-md-6 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>
<!--================================
END SPECIAL FEATURES AREA
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










@endsection