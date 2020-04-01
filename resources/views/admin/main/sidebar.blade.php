<aside class="main-sidebar direction">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-right image">
          <img src="" class="img-circle" alt="User Image">
        </div>
        <div class="pull-right info">
          <p></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="جستجو...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">منو اصلی</li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>کاربران</span>
            <span class="label label-primary pull-right">4</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admin.users.create')}}"><i class="fa fa-circle-o"></i> ثبت کاربر جدید</a></li>
            <li><a href="{{route('admin.users.list')}}"><i class="fa fa-circle-o"></i>لیست کاربران</a></li>
           
          </ul>
        </li>
        <li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>ویجت ها</span>
            <small class="label pull-right bg-green">جدید</small>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>دسته بندی ها</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admin.categories.list')}}"><i class="fa fa-circle-o"></i>لیست دسته بندی ها </a></li>
            <li><a href="{{route('admin.categories.create')}}"><i class="fa fa-circle-o"></i>افزودن دسته بندی جدید </a></li>
             <li><a href="{{route('admin.categories.sample')}}"><i class="fa fa-circle-o"></i>نمونه </a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>پکیج ها </span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admin.packages.create')}}"><i class="fa fa-circle-o"></i>ثبت پکیج  جدید </a></li>
            <li><a href="{{route('admin.packages.list')}}"><i class="fa fa-circle-o"></i>لیست پکیج  ها </a></li>
           
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>طرح های اشتراکی</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admin.plans.create')}}"><i class="fa fa-circle-o"></i>ثبت طرح جدید</a></li>
            <li><a href="{{route('admin.plans.list')}}"><i class="fa fa-circle-o"></i> لیست طرح ها </a></li>
           
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>فایل ها</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admin.files.create')}}"><i class="fa fa-circle-o"></i> ثبت فایل جدید</a></li>
            <li><a href="{{route('admin.files.list')}}"><i class="fa fa-circle-o"></i> لیست فایل ها</a></li>
          </ul>
        </li>
        
        <li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>میل باکس</span>
            <small class="label pull-right bg-yellow">12</small>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>پرداخت ها </span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admin.payments.list')}}"><i class="fa fa-circle-o"></i> لیست پرداخت ها</a></li>
          
            
          </ul>
           <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>سفارشات</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
           
            <li><a href="{{route('admin.orders.index')}}"><i class="fa fa-circle-o"></i>لیست سفارشات</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>مطالب</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('posts.index')}}"><i class="fa fa-circle-o"></i> لیست مطالب</a></li>
          
           <li><a href="{{route('posts.create')}}"><i class="fa fa-circle-o"></i> افزودن مطلب </a></li>
          
          
          </ul>
        </li>
        </li>
        {{-- <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>دسته بندی مطالب</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('categories.index')}}"><i class="fa fa-circle-o"></i> لیست دسته بندی مطالب</a></li>
          
           <li><a href="{{route('categories.create')}}"><i class="fa fa-circle-o"></i> افزودن دسته بندی مطالب </a></li>
          
          
          </ul>
        </li> --}}
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>نظرات</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admin.comment.index')}}"><i class="fa fa-circle-o"></i> لیست نظرات</a></li>
          
          
          
          </ul>
        </li>
           <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>رسانه ها</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('photos.index')}}"><i class="fa fa-circle-o"></i> لیست فایل ها</a></li>
            <li><a href="{{route('photos.create')}}"><i class="fa fa-circle-o"></i>آپلود فایل ها </a></li>
          
          
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>کتاب ها  </span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('books.index')}}"><i class="fa fa-circle-o"></i> لیست کتاب ها</a></li>
          
            <li><a href="{{route('books.create')}}"><i class="fa fa-circle-o"></i> افزودن کتاب ها </a></li>
          
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>تیکت ها </span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('tickets.show')}}"><i class="fa fa-circle-o"></i> لیست تیکت ها</a></li>
          
            <li><a href="{{route('tickets.create')}}"><i class="fa fa-circle-o"></i> افزودن تیکت ها</a></li>
          
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>ویدیو ها </span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('videos.index')}}"><i class="fa fa-circle-o"></i> لیست ویدیو ها</a></li>
          
            <li><a href="{{route('videos.create')}}"><i class="fa fa-circle-o"></i> افزودن ویدیو ها</a></li>
          
          </ul>
        </li>
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
