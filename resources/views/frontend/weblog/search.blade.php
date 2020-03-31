<aside class="sidebar sidebar--blog">
                    <div class="sidebar-card card--search card--blog_sidebar">
                        <div class="card-title">
                           
                             <h4>جستحو در مقالات :</h4>
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
                                    <a href="#latest" id="latest-tab" aria-controls="latest" role="tab" data-toggle="tab" aria-selected="false">اخرین مقالات </a>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.card-title -->

                        <div class="card_content">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active fade show" id="popular" aria-labelledby="popular-tab">
                                    <ul class="post-list">
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
                                        
                                    </ul>
                                    <!-- end /.post-list -->
                                </div>
                                <!-- end /.tabpanel -->

                                {{--  <div role="tabpanel" class="tab-pane fade" id="latest" aria-labelledby="latest-tab">
                                    <ul class="post-list">
                                        <li>
                                            @foreach($newPosts as $new)
                                            <div class="thumbnail_img">
                                                <img src="{{$new->photo->path}}" alt="blog thumbnail">
                                            </div>
                                            <div class="title_area">
                                                <a href="#">
                                                    <h4>{{$new->title}}
                                                         
                                                    </h4>
                                                </a>
                                                <div class="date_time">
                                                    <span class="lnr lnr-clock"></span>
                                                    <p>{{$new->created_at}}</p>
                                                </div>
                                            </div>
                                        </li>
                                       
                                         @endforeach
                                       
                                           
                                    </ul>                                    <!-- end /.post-list -->
                                </div>  --}}
                                <!-- end /.tabpanel -->
                            </div>
                            <!-- end /.tab-content -->
                        </div>
                        <!-- end /.card_content -->
                    </div>
                    <!-- end /.sidebar-card -->
{{--  
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
                    </div>  --}}
                    <!-- end /.sidebar-card -->

                    <div class="sidebar-card card--blog_sidebar card--tags">
                        <div class="card-title">
                            <h4>برچسب ها </h4>
                        </div>

                        <ul class="tags">
                            <li>
                                <a href="#">طراحی</a>
                            </li>
                            <li>
                                <a href="#">قالب سایت </a>
                            </li>
                            <li>
                                <a href="#">چند فروشندگی</a>
                            </li>
                            <li>
                                <a href="#">طراحی تم </a>
                            </li>

                            <li>
                                <a href="#">وردپرس</a>
                            </li>
                        </ul>
                        <!-- end /.tags -->
                    </div>
                    <!-- end /.sidebar-card -->

                  
                    <!-- end /.banner -->
                </aside>