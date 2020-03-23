@extends('frontend.layout.master')


@section('content')




<!--================================
        START FILTER AREA
    =================================-->
    <div class="filter-area dir-rtl">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filter-bar">
                        <div class="filter__option filter--dropdown">
                            <a href="#" id="drop1" class="dropdown-trigger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">دسته بندی
                                <span class="lnr lnr-chevron-down"></span>
                            </a>
                            <ul class="custom_dropdown custom_drop2 dropdown-menu" aria-labelledby="drop1">
                                <li>
                                    <a href="#">وردپرس
                                        <span>35</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">psd قالب
                                        <span>13</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">افزونه ها
                                        <span>08</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">قالب HTML
                                        <span>34</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">اجزای سازنده
                                        <span>78</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.filter__option -->

                        <div class="filter__option filter--dropdown">
                            <a href="#" id="drop2" class="dropdown-trigger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">فیلتر بر اساس
                                <span class="lnr lnr-chevron-down"></span>
                            </a>
                            <ul class="custom_dropdown dropdown-menu" aria-labelledby="drop2">

                                <li>
                                    <a href="">مجصولات محبوب </a>
                                </li>
                                <li >
                                    <a href="#">مصولات جدید </a>
                                </li>
                                <li>
                                    <a href="#">بهترین فروشنده ها  </a>
                                </li>
                                <li>
                                    <a href="#">بهترین امتیاز  </a>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.filter__option -->

                        <div class="filter__option filter--dropdown filter--range">
                            <a href="#" id="drop3" class="dropdown-trigger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">محدوده قیمت
                                <span class="lnr lnr-chevron-down"></span>
                            </a>
                            <div class="custom_dropdown dropdown-menu" aria-labelledby="drop3">
                                <div class="range-slider price-range"></div>

                                <div class="price-ranges">
                                    <span class="from rounded">50 تومان</span>
                                    <span class="to rounded"> 300 تومان </span>
                                </div>
                            </div>
                        </div>
                        <!-- end /.filter__option -->

                        <div class="filter__option filter--select m-0">
                            <div class="select-wrap">
                                <select name="price">
                                    <option value="low">قیمت  : کم به زیاد </option>
                                    <option value="high">قیمت : زیاد به کم </option>
                                </select>
                                <span class="lnr lnr-chevron-down"></span>
                            </div>
                        </div>
                        <!-- end /.filter__option -->

                        <div class="filter__option filter--select m-0">
                            <div class="select-wrap">
                                <select name="price">
                                    <option value="12">12 مورد در هر صفحه</option>
                                    <option value="15">12 مورد در هر صفحه</option>
                                    <option value="25">12 مورد در هر صفحه</option>
                                </select>
                                <span class="lnr lnr-chevron-down"></span>
                            </div>
                        </div>
                        <!-- end /.filter__option -->

                        <div class="filter__option filter--layout ">
                            <a href="all-products.html">
                                <div class="svg-icon">
                                    <img class="svg" src="{{asset('assets/images/svg/grid.svg')}}" alt="it's just a layout control folks!">
                                </div>
                            </a>
                            <a href="all-products-list.html">
                                <div class="svg-icon">
                                    <img class="svg" src="{{asset('assets/images/svg/list.svg')}}" alt="it's just a layout control folks!">
                                </div>
                            </a>
                        </div>
                        <!-- end /.filter__option -->
                    </div>
                    <!-- end /.filter-bar -->
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end filter-bar -->
        </div>
    </div>
    <!-- end /.filter-area -->
    <!--================================
        END FILTER AREA
    =================================-->


    <!--================================
        START PRODUCTS AREA
    =================================-->
    <section class="products dir-rtl">
        <!-- start container -->
        <div class="container">

            <!-- start .row -->
            
   <div class="row text-center">
            <!-- start .col-md-4 -->
             @if($popularFiles && count($popularFiles)>0)
             @foreach($popularFiles as $file)
                <div class="product product--card  mx-4"  >
                 
                    <div class="product__thumbnail">
                         
                        <img src="{{asset('/storage/'.$file->file_name)}}" class="img-responsive" alt="Product Image">
                        <div class="prod_btn">
                            <a href="{{route('frontend.files.details',$file->id)}}" class="transparent btn--sm btn--round">اطلاعات بیشتر</a>
                            <a href="single-product.html" class="transparent btn--sm btn--round">نمایش </a>
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



        </div>
            <!-- end /.row -->

            <div class="row">
                <div class="col-md-12 justify-content-center">
                   
                     <div class="pagination-area">
                        <nav class="navigation pagination" style="display:flex;" role="navigation">
                            <div class="nav-links">
                                 
                             
                                    
                                   
                                 <a class="next page-numbers" href="#">
                                    <span class="lnr lnr-arrow-right"></span>
                                </a> 
                                 <a class="page-numbers current" href="">1</a>
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
        START CALL TO ACTION AREA
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