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
                    <h1 class="page-title">انچمن پشتیبانی </h1>
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
                    <div class="support_threads">
                        <div class="thread_sort_area clearfix">
                            <div class="sort_options">
                                <ul>
                                    <li class="active">
                                        <a href="#">همه</a>
                                    </li>
                                    <li>
                                        <a href="#">باز شده</a>
                                    </li>
                                    <li>
                                        <a href="#">حل شده</a>
                                    </li>
                                    <li>
                                        <a href="#">بسته شده</a>
                                    </li>
                                    <li>
                                        <a href="#">بی پاسخ</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end .sort_options -->

                            <div class="thread_search_area">
                                <form action="#">
                                    <div class="searc-wrap">
                                        <input type="text" placeholder="جستجوي انجمن">
                                        <button type="submit" class="search-wrap__btn">
                                            <span class="lnr lnr-magnifier"></span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <!-- end .thread_search_area -->
                        </div>
                        <!-- end .thread_sort_area -->

                        <div class="support_thread_list cardify">
                            @foreach($tickets as $ticket)
                            <div class="support_thread--single">
                                <div class="support_thread_info">
                                    <a href="{{route('ticket.show',$ticket->id)}}" class="support_title">{{$ticket->title}}
                                         @if($ticket->isClosed())
                               <span href="{{route('ticket.close',$ticket)}}" class="pinned">
                                   بسته شده
                                </span>
                       
                                 @else 
                                  <span href="{{route('ticket.close',$ticket)}}" class="pinned">
                                    بستن
                                  </span>
                            @endif
                             @if($ticket->hasFile())
                           <a href="{{$ticket->file()}}">دانلود پیوست </a>

                           @endif
                                        {{-- <span class="pinned">{{$ticket->status}}</span> --}}
                                    </a>
                                    <div class="suppot_query_tag">
                                        <a href="#" class="user">
                                            <img class="poster_avatar" src="/assets/images/new/support_avat1.png" alt="Support Avatar"> {{$ticket->user->name}}</a>
                                        <span>{{$ticket->created_at}} </span>
                                        <span class="support_tag">{{$ticket->priority}}</span>
                                    </div>
                                </div>
                                <!-- end .support_thread_info -->

                                <div class="support_thread_meta">
                                    <ul>
                                        <li class="answer_time">
                                            <img src="/assets/images/new/support_avat4.png" alt="Support images">
                                            <span class="time">1ساعت پیش</span>
                                        </li>
                                        <li>
                                            <p class="number">2</p>
                                            <span>رای</span>
                                        </li>
                                        <li>
                                            <p class="number">6</p>
                                            <span>پاسخ</span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end .support_thread_meta -->
                                @endforeach
                            </div>
                            <!-- end .support_thread--single -->
                             
                           
                        </div>
                            
                            <!-- end .support_thread--single -->
                        </div>

                        <!-- end .support_thread_list -->
                    </div>
                    <!-- end .support_threads -->
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










@endsection 