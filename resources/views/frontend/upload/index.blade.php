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
                            <a href="dashboard.html">داشبورد </a>
                        </li>
                    </ul>
                </div>
                <h1 class="page-title">آپلود فایل  </h1>
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
<section class="dashboard-area dir-rtl">
    <div class="dashboard_menu_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="dashboard_menu">
                        <li >
                            <a href="dashboard.html">
                                <span class="lnr lnr-home"></span>داشبورد </a>
                        </li>
                        <li>
                            <a href="dashboard-setting.html">
                                <span class="lnr lnr-cog"></span>تنظیمات</a>
                        </li>
                        <li>
                            <a href="dashboard-purchase.html">
                                <span class="lnr lnr-cart"></span>خرید
                                 
                            </a>
                        </li>
                        <li>
                            <a href="dashboard-add-credit.html">
                                <span class="lnr lnr-dice"></span>اضافه کردن اعتبار</a>
                        </li>
                        <li>
                            <a href="dashboard-statement.html">
                                <span class="lnr lnr-chart-bars"></span>بیانیه ها</a>
                        </li>
                        <li class="active">
                            <a href="dashboard-upload.html">
                                <span class="lnr lnr-upload"></span>آپلود </a>
                        </li>
                        <li>
                            <a href="dashboard-manage-item.html">
                                <span class="lnr lnr-briefcase"></span>مدیریت آیتم</a>
                        </li>
                        <li>
                            <a href="dashboard-withdrawal.html">
                                <span class="lnr lnr-briefcase"></span>خروج</a>
                        </li>
                    </ul>
                    <!-- end /.dashboard_menu -->
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </div>
    <!-- end /.dashboard_menu_area -->

    <div class="dashboard_contents">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="dashboard_title_area">
                        <div class="pull-right">
                            <div class="dashboard__title">
                                <h3>آپلود فایل </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <form action="#">
                        <div class="upload_modules">
                            <div class="modules__title">
                                <h3>نام و توضیحات فایل </h3>
                            </div>
                            <!-- end /.module_title -->

                            <div class="modules__content">
                                <div class="form-group">
                                    <label for="category">دسته بندی را انتخاب کنید</label>
                                    <div class="select-wrap select-wrap2">
                                        <select name="country" id="category" class="text_field">
                                            <option value="">هیچ کدام </option>
                                            <option value="wordpress">ورد پرس </option>
                                            <option value="html">Html</option>
                                            <option value="graphic">گرافیک</option>
                                            <option value="illustration">psd </option>
                                            <option value="music">موزیک</option>
                                            <option value="video">ویدئو </option>
                                        </select>
                                        <span class="lnr lnr-chevron-down"></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="product_name">نام محصول
                                        <span>(حداکثر 100کاراکتر)</span>
                                    </label>
                                    <input type="text" id="product_name" class="text_field" placeholder="">
                                </div>

                                <div class="form-group no-margin">
                                    <p class="label">توضیحات محصول</p>
                                   <div id="trumbowyg-demo"></div>
          {{-- <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<textarea name="content"  class="form-control my-editor"></textarea>
<script>
  var editor_config = {
    path_absolute : "/",
    selector: "textarea.my-editor",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);
</script> --}}
                                </div>
                            </div>
                            <!-- end /.modules__content -->
                        </div>
                        <!-- end /.upload_modules -->

                        <div class="upload_modules module--upload">
                            <div class="modules__title">
                                <h3>آپلود فایل </h3>
                            </div>
                            <!-- end /.module_title -->

                            <div class="modules__content">
                                <div class="form-group">
                                    <div class="upload_wrapper">
                                        <p>آپلود تصویر کوچک
                                            <span>(JPEG یا  PNG ابعاد 100x100px)</span>
                                        </p>

                                        <div class="custom_upload">
                                            <label for="thumbnail">
                                                <input type="file" id="thumbnail" class="files">
                                                <span class="btn btn--round btn--sm">انتخاب فایل </span>
                                            </label>
                                        </div>
                                        <!-- end /.custom_upload -->

                                        <div class="progress_wrapper">
                                            <div class="labels clearfix">
                                                <p>Thumbnail.jpg</p>
                                                <span data-width="89">89%</span>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 89%;">
                                                    <span class="sr-only">70% انجام شده </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end /.progress_wrapper -->

                                        <span class="lnr upload_cross lnr-cross"></span>
                                    </div>
                                    <!-- end /.upload_wrapper -->
                                </div>
                                <!-- end /.form-group -->

                                <div class="form-group">
                                    <div class="upload_wrapper">
                                        <p>آپلود فایل اصلی
                                            <span>(ZIP - همه فایل ها )</span>
                                        </p>

                                        <div class="custom_upload">
                                            <label for="main_file">
                                                <input type="file" id="main_file" class="files">
                                                <span class="btn btn--round btn--sm">انتخاب فایل </span>
                                            </label>
                                        </div>
                                        <!-- end /.custom_upload -->

                                        <div class="progress_wrapper">
                                            <div class="labels clearfix">
                                                <p>قالب ورد پرس.zip</p>
                                                <span data-width="90">90%</span>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                                    <span class="sr-only">90% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end /.progress_wrapper -->

                                        <span class="lnr upload_cross lnr-cross"></span>
                                    </div>
                                    <!-- end /.upload_wrapper -->
                                </div>
                                <!-- end /.form-group -->

                                <div class="form-group">
                                    <div class="upload_wrapper">
                                        <p>آپلود تصاویر
                                            <span>(ZIP فایل تصاویر)</span>
                                        </p>

                                        <div class="custom_upload">
                                            <label for="screenshot">
                                                <input type="file" id="screenshot" class="files">
                                                <span class="btn btn--round btn--sm">انتخاب فایل </span>
                                            </label>
                                        </div>
                                        <!-- end /.custom_upload -->

                                        <div class="progress_wrapper">
                                            <div class="labels clearfix">
                                                <p>تصویر 1.jpg</p>
                                                <span data-width="78">78%</span>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 78%;">
                                                    <span class="sr-only">78% انجام شده </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end /.progress_wrapper -->

                                        <span class="lnr upload_cross lnr-cross"></span>
                                    </div>
                                    <!-- end /.upload_wrapper -->
                                </div>
                                <!-- end /.form-group -->
                            </div>
                            <!-- end /.upload_modules -->
                        </div>
                        <!-- end /.upload_modules -->

                        <div class="upload_modules">
                            <div class="modules__title">
                                <h3>اطلاعات دیگر </h3>
                            </div>
                            <!-- end /.module_title -->

                            <div class="modules__content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="selected">فایل های شامل شده </label>
                                            <select name="country" id="selected" multiple class="text_field">
                                                <option value="php">php</option>
                                                <option value="html">Html</option>
                                                <option value="psd">psd</option>
                                                <option value="js">javascript</option>
                                                <option value="coffee">coffeescript</option>
                                                <option value="video">Video</option>
                                            </select>
                                        </div>
                                        <!-- end /.form-group -->
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="browsers">مرورگرهای سازگار</label>
                                            <select name="country" id="browsers" multiple class="text_field">
                                                <option value="ie8">IE8</option>
                                                <option value="ie9">IE9</option>
                                                <option value="chrome">Chrome</option>
                                                <option value="firefox">firefox</option>
                                                <option value="safari">safari</option>
                                                <option value="video">Video</option>
                                            </select>
                                        </div>
                                        <!-- end /.form-group -->
                                    </div>
                                    <!-- end /.col-md-6 -->
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="columns">ستون ها </label>
                                            <div class="select-wrap select-wrap2">
                                                <select name="country" id="columns" class="text_field">
                                                    <option value="">انتخاب ستون ها </option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4+</option>
                                                </select>
                                                <span class="lnr lnr-chevron-down"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end /.col-md-6 -->

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="dimension">ابعاد فایل </label>
                                            <input type="text" id="dimension" class="text_field" placeholder="برای مثال : 1920x6000.">
                                        </div>
                                    </div>
                                    <!-- end /.col-md-6 -->
                                </div>
                                <!-- end /.row -->


                                <div class="form-group">
                                    <label for="soft">حداقل نسخه نرم افزار</label>
                                    <div class="select-wrap select-wrap2">
                                        <select name="version" id="soft" class="text_field">
                                            <option value="">انتخاب ورژن</option>
                                            <option value="4">ورد پرس 4</option>
                                            <option value="4.1">ورد پرس 4.1.*</option>
                                            <option value="4.2">ورد پرس  4.2.*</option>
                                            <option value="4.3">ورد پرس  4.3.*</option>
                                            <option value="4.4">ورد پرس  4.4.*</option>
                                        </select>
                                        <span class="lnr lnr-chevron-down"></span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group radio-group">
                                            <p class="label">کیفیت بالا</p>
                                            <div class="custom-radio">
                                                <input type="radio" id="yes" class="" name="high_res">
                                                <label for="yes">
                                                    <span class="circle"></span>بله </label>
                                            </div>

                                            <div class="custom-radio">
                                                <input type="radio" id="no" class="" name="high_res">
                                                <label for="no">
                                                    <span class="circle"></span>خیر </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end /.col-md-6 -->

                                    <!-- end /.col-md-6 -->
                                </div>
                                <!-- end /.row -->

                                <div class="form-group">
                                    <label for="tags">تگ ها
                                        <span>(حد اکثر 10 تگ)</span>
                                    </label>
                                    <textarea name="tags" id="tags" class="text_field" placeholder=""></textarea>
                                </div>
                            </div>
                            <!-- end /.upload_modules -->
                        </div>
                        <!-- end /.upload_modules -->

                        <div class="upload_modules with--addons">
                            <div class="modules__title">
                                <h3>قیمت  مجوز ها </h3>
                            </div>
                            <!-- end /.module_title -->

                            <div class="modules__content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="rlicense">مجوز رسمی</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">(تومان)</span>
                                                <input type="text" id="rlicense" class="text_field" placeholder="00.00">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end /.col-md-6 -->

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exlicense">تمدید مجوز</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">(تومان)</span>
                                                <input type="text" id="exlicense" class="text_field" placeholder="00.00">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end /.col-md-6 -->

                                </div>
                                <!-- end /.row -->
                                <div class="or"></div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="single_use">مجوز استفاه در یک مورد </label>
                                            <div class="input-group">
                                                <span class="input-group-addon">(تومان)</span>
                                                <input type="text" id="single_use" class="text_field" placeholder="00.00">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="double_use">مجوز استفاده برای 2 سایت </label>
                                            <div class="input-group">
                                                <span class="input-group-addon">(تومان)</span>
                                                <input type="text" id="double_use" class="text_field" placeholder="00.00">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="multi_user">مجوز بی نهایت  </label>
                                            <div class="input-group">
                                                <span class="input-group-addon">(تومان) </span>
                                                <input type="text" id="multi_user" class="text_field" placeholder="00.00">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end /.row -->
                            </div>
                            <!-- end /.modules__content -->
                        </div>
                        <!-- end /.upload_modules -->

                        <!-- submit button -->
                        <button type="submit" class="btn btn--round btn--fullwidth btn--lg">فایل خود را برای بررسی ارسال کنید</button>
                    </form>
                </div>
                <!-- end /.col-md-8 -->

                <div class="col-lg-4 col-md-5">
                    <aside class="sidebar upload_sidebar">
                        <div class="sidebar-card">
                            <div class="card-title">
                                <h3>قوانین آپلود سریع</h3>
                            </div>

                            <div class="card_content">
                                <div class="card_info">
                                    <h4>آپلود تصویر</h4>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                </div>

                                <div class="card_info">
                                    <h4>آپلود فایل</h4>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                </div>

                                <div class="card_info">
                                    <h4>آپلود وکتور</h4>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end /.sidebar-card -->

                        <div class="sidebar-card">
                            <div class="card-title">
                                <h3>مشکل در آپلود ؟</h3>
                            </div>

                            <div class="card_content">
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                <ul>
                                    <li>وضعیت اینترنت خود را بررسی کنید </li>
                                    <li>سرعت اینترنت خود را بررسی کنید </li>
                                    <li>شاید مشکل از ما باشد به ما اطلاع بدهید </li>
                                </ul>
                            </div>
                        </div>
                        <!-- end /.sidebar-card -->

                        <div class="sidebar-card">
                            <div class="card-title">
                                <h3>اطلاعات بیشت در مورد آپلود</h3>
                            </div>

                            <div class="card_content">
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                <ul>
                                    <li>مرحله 1 - فایل خود را انتخاب کنید </li>
                                    <li>مرحله 2 منتظر بمانید تا فایل کامل آپلود شود  </li>
                                    <li>ما فایل شما رو بررسی و به شما اطلاع می دهیم </li>
                                </ul>
                            </div>
                        </div>
                        <!-- end /.sidebar-card -->
                    </aside>
                    <!-- end /.sidebar -->
                </div>
                <!-- end /.col-md-4 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </div>
    <!-- end /.dashboard_menu_area -->
</section>
<!--================================
        END DASHBOARD AREA
=================================-->



@endsection