@extends('frontend.layout.master')


@section('content') 

<!--================================
    START SEARCH AREA
=================================-->
<section class="search-wrapper dir-rtl">
    <div class="search-area2 bgimage">
        <div class="bg_image_holder">
            <img src="/assets/images/new/search.jpg" alt="">
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
                            <form action="{{route('search')}}" method="GET">
                                <div class="field-wrapper">
                                    <input class="relative-field rounded" name="query" value="{{request()->input('query')}}" type="text" placeholder="چستجو در محصولات ">
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
                                <a href="#">مجصولات محبوب </a>
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
                                <img class="svg" src="/assets/images/svg/grid.svg" alt="it's just a layout control folks!">
                            </div>
                        </a>
                        <a href="all-products-list.html">
                            <div class="svg-icon">
                                <img class="svg" src="/assets/images/svg/list.svg" alt="it's just a layout control folks!">
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
            <div class="row">
                <!-- start .col-md-4 -->
                <div class="col-lg-12 col-md-6">
                    <!-- start .single-product -->
                    @if(session()->has('success_message'))
                       <div class="alert alert-danger">
                           {{session()->get('success_message')}}
                       </div>

                    @endif
                    @include('admin.partials.errors')
                   
                    <h3 class="mb-4">{{$packages->total()}} نتیجه برای "{{request()->input('query')}}"</h3>
                   
                      <!-- start .single-product -->
                    <div class="modules__content">
                            <div class="withdraw_module withdraw_history">
                                <div class="withdraw_table_header">
                                    
                                    <h1>نتیجه جست و جو </h1>
                                </div>
                                <div class="table-responsive">
                                    <table class="table withdraw__table">
                                        <thead>
                                            <tr>
                                                <th>عنوان پکیج</th>
                                                <th>قیمت پکیج </th>
                                                <th>توضیحات پکیج</th>
                                                <th>مشاهده </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                           @foreach($packages as $package)
                                            <tr>
                                                <td>{{$package->package_title}}</td>
                                                <td>{{$package->package_price}} </td>
                                                <td class="bold">{{Str::limit($package->package_description,90)}}</td>
                                                <td class="paid">
                                                   <span><a href="{{route('frontend.packages.details',$package->id)}}">مشاهده</a></span> 
                                                </td>
                                            </tr>
                                          @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    
                   
                </div>
              
            </div>
            <!-- end /.row -->

            <div class="row">
                <div class="col-md-12">
                     {{$packages->appends(request()->input())->links()}}
                  
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