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
                            <a href="#">پیغام </a>
                        </li>
                    </ul>
                </div>
                <h1 class="page-title">جعبه پیغام ها </h1>
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
        START MESSAGE AREA
=================================-->
<section class="message_area dir-rtl">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content_title">
                    <h3>پیغام ها </h3>
                </div>
                <!-- end /.content_title -->
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->

        <div class="row">
            <div class="col-lg-5">
                <div class="cardify messaging_sidebar">
                    <div class="messaging__header">
                        <div class="messaging_menu position-relative">
                            <a href="#" id="drop2" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <span class="lnr lnr-inbox"></span>صندوق
                                <span class="msg">6</span>
                                <span class="lnr lnr-chevron-down"></span>
                            </a>

                            <ul class="custom_dropdown messaging_dropdown dropdown-menu" aria-labelledby="drop2">
                                <li>
                                    <a href="#">
                                        <span class="lnr lnr-inbox"></span>صندوق</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-star-o"></span>ستاره دار</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="lnr lnr-dice"></span>فرستاده شد</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="lnr lnr-trash"></span>زباله ها</a>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.messaging_menu -->

                        <div class="messaging_action">
                            <span class="lnr lnr-trash"></span>
                            <span class="lnr lnr-sync"></span>

                            <a href="message-compose.html" class="btn btn--round btn--sm">
                                <span class="lnr lnr-pencil"></span>
                                <span class="text">نوشتن</span>
                            </a>
                        </div>
                        <!-- end /.messaging_action -->
                    </div>
                    <!-- end /.messaging__header -->

                    <div class="messaging__contents">
                        <div class="message_search">
                            <input type="text" placeholder="جستجوی پیام ...">
                            <span class="lnr lnr-magnifier"></span>
                        </div>

                        <div class="messages">
                            <div class="message">
                                <div class="message__actions_avatar">
                                    <div class="actions">
                                        <span class="fa fa-star"></span>
                                        <div class="custom_checkbox">
                                            <input type="checkbox" id="ch1">
                                            <label for="ch1">
                                                <span class="shadow_checkbox"></span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="avatar">
                                        <img src="assets/images/new/notification_head4.png" alt="">
                                    </div>
                                </div>
                                <!-- end /.actions -->

                                <div class="message_data">
                                    <div class="name_time">
                                        <div class="name">
                                            <p>تست </p>
                                            <span class="lnr lnr-envelope"></span>
                                        </div>

                                        <span class="time">هم اکنون </span>
                                        <p>سلام وقت بخیر .....</p>
                                    </div>
                                </div>
                                <!-- end /.message_data -->
                            </div>
                            <!-- end /.message -->

                            <div class="message active">
                                <div class="message__actions_avatar">
                                    <div class="actions">
                                        <span class="fa fa-star-o"></span>
                                        <div class="custom_checkbox">
                                            <input type="checkbox" id="ch2">
                                            <label for="ch2">
                                                <span class="shadow_checkbox"></span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="avatar">
                                        <img src="assets/images/new/notification_head5.png" alt="">
                                    </div>
                                </div>
                                <!-- end /.actions -->

                                <div class="message_data">
                                    <div class="name_time">
                                        <div class="name">
                                            <p>تست </p>
                                            <span class="lnr lnr-envelope"></span>
                                        </div>

                                        <span class="time">هم اکنون </span>
                                        <p>سلام وقت خوش .....</p>
                                    </div>
                                </div>
                                <!-- end /.message_data -->
                            </div>
                            <!-- end /.message -->

                            <div class="message">
                                <div class="message__actions_avatar">
                                    <div class="actions">
                                        <span class="fa fa-star-o"></span>
                                        <div class="custom_checkbox">
                                            <input type="checkbox" id="ch3">
                                            <label for="ch3">
                                                <span class="shadow_checkbox"></span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="avatar">
                                        <img src="assets/images/new/notification_head6.png" alt="">
                                    </div>
                                    <chat></chat>
                                </div>
                                <!-- end /.actions -->

                                <div class="message_data">
                                    <div class="name_time">
                                        <div class="name">
                                            {{-- <p>کاربر تست </p> --}}
                                            <users></users>
                                        </div>

                                        <span class="time">هم اکنون </span>
                                        <p>سلام وقت خوش .....</p>
                                    </div>
                                </div>
                                <!-- end /.message_data -->
                            </div>
                            <!-- end /.message -->

                            <div class="message">
                                <div class="message__actions_avatar">
                                    <div class="actions">
                                        <span class="fa fa-star-o"></span>
                                        <div class="custom_checkbox">
                                            <input type="checkbox" id="ch4">
                                            <label for="ch4">
                                                <span class="shadow_checkbox"></span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="avatar">
                                        <img src="assets/images/new/notification_head3.png" alt="">
                                    </div>
                                </div>
                                <!-- end /.actions -->

                                <div class="message_data">
                                    <div class="name_time">
                                        <div class="name">
                                            <p>قالب </p>
                                        </div>

                                        <span class="time">هم اکنون </span>
                                        <p>سلام وقت خوش .....</p>
                                    </div>
                                </div>
                                <!-- end /.message_data -->
                            </div>
                            <!-- end /.message -->

                            <div class="message">
                                <div class="message__actions_avatar">
                                    <div class="actions">
                                        <span class="fa fa-star-o"></span>
                                        <div class="custom_checkbox">
                                            <input type="checkbox" id="ch5">
                                            <label for="ch5">
                                                <span class="shadow_checkbox"></span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="avatar">
                                        <img src="assets/images/new/notification_head4.png" alt="">
                                    </div>
                                </div>
                                <!-- end /.actions -->

                                <div class="message_data">
                                    <div class="name_time">
                                        <div class="name">
                                            <p>علی </p>
                                            <span class="lnr lnr-envelope"></span>
                                        </div>

                                        <span class="time">هم اکنون </span>
                                        <p>سلام وقت خوش .....</p>
                                    </div>
                                </div>
                                <!-- end /.message_data -->
                            </div>
                            <!-- end /.message -->

                            <div class="message">
                                <div class="message__actions_avatar">
                                    <div class="actions">
                                        <span class="fa fa-star-o"></span>
                                        <div class="custom_checkbox">
                                            <input type="checkbox" id="ch6">
                                            <label for="ch6">
                                                <span class="shadow_checkbox"></span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="avatar">
                                        <img src="assets/images/new/notification_head5.png" alt="">
                                    </div>
                                </div>
                                <!-- end /.actions -->

                                <div class="message_data">
                                    <div class="name_time">
                                        <div class="name">
                                            <p>جواد </p>
                                            <span class="lnr lnr-envelope"></span>
                                        </div>


                                        <span class="time">هم اکنون </span>
                                        <p>سلام وقت خوش .....</p>
                                    </div>
                                </div>
                                <!-- end /.message_data -->
                            </div>
                            <!-- end /.message -->

                            <div class="message">
                                <div class="message__actions_avatar">
                                    <div class="actions">
                                        <span class="fa fa-star-o"></span>
                                        <div class="custom_checkbox">
                                            <input type="checkbox" id="ch7">
                                            <label for="ch7">
                                                <span class="shadow_checkbox"></span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="avatar">
                                        <img src="assets/images/new/notification_head6.png" alt="">
                                    </div>
                                </div>
                                <!-- end /.actions -->

                                <div class="message_data">
                                    <div class="name_time">
                                        <div class="name">
                                            <p>امیر</p>
                                        </div>


                                        <span class="time">هم اکنون </span>
                                        <p>سلام وقت خوش .....</p>
                                    </div>
                                </div>
                                <!-- end /.message_data -->
                            </div>
                            <!-- end /.message -->

                            <div class="message">
                                <div class="message__actions_avatar">
                                    <div class="actions">
                                        <span class="fa fa-star-o"></span>
                                        <div class="custom_checkbox">
                                            <input type="checkbox" id="ch8">
                                            <label for="ch8">
                                                <span class="shadow_checkbox"></span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="avatar">
                                        <img src="/assets/images/new/notification_head3.png" alt="">
                                    </div>
                                </div>
                                <!-- end /.actions -->

                                <div class="message_data">
                                    <div class="name_time">
                                        <div class="name">
                                            <p>تقی </p>
                                        </div>


                                        <span class="time">هم اکنون </span>
                                        <p>سلام وقت خوش .....</p>
                                    </div>
                                </div>
                                <!-- end /.message_data -->
                            </div>
                            <!-- end /.message -->

                            <div class="message">
                                <div class="message__actions_avatar">
                                    <div class="actions">
                                        <span class="fa fa-star-o"></span>
                                        <div class="custom_checkbox">
                                            <input type="checkbox" id="ch9">
                                            <label for="ch9">
                                                <span class="shadow_checkbox"></span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="avatar">
                                        <img src="/assets/images/new/notification_head4.png" alt="">
                                    </div>
                                </div>
                                <!-- end /.actions -->

                                <div class="message_data">
                                    <div class="name_time">
                                        <div class="name">
                                            <p>تم </p>
                                            <span class="lnr lnr-envelope"></span>
                                        </div>


                                        <span class="time">هم اکنون </span>
                                        <p>سلام وقت خوش .....</p>
                                    </div>
                                </div>
                                <!-- end /.message_data -->
                            </div>
                            <!-- end /.message -->

                        </div>
                        <!-- end /.messages -->
                    </div>
                    <!-- end /.messaging__contents -->
                </div>
                <!-- end /.cardify -->
            </div>
            <!-- end /.col-md-5 -->

            <div class="col-lg-7">
                {{-- <div class="chat_area cardify">
                    <div class="chat_area--title">
                        <h3>پیام با
                            <span class="name">Codepoet</span>
                        </h3>
                        <div class="message_toolbar">
                            <a href="#">
                                <span class="lnr lnr-flag"></span>
                            </a>
                            <a href="#">
                                <span class="lnr lnr-trash"></span>
                            </a>
                            <a href="#" id="drop1" class="dropdown-trigger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <img src="images/new/menu_icon.png" class="dropdown-trigger" alt="Menu icon">
                            </a>

                            <ul class="custom_dropdown dropdown-menu" aria-labelledby="drop1">
                                <li>
                                    <a href="#">خوانده نشده"</a>
                                </li>
                                <li>
                                    <a href="#">لینک کشویی</a>
                                </li>
                                <li>
                                    <a href="#">همه پیوست ها </a>
                                </li>
                            </ul>
                            <!-- end /.dropdown -->
                        </div>
                        <!-- end /.message_toolbar -->
                    </div>
                    <!-- end /.chat_area--title -->

                    <div class="chat_area--conversation">
                        <div class="conversation">
                            <div class="head">
                                <div class="chat_avatar">
                                    <img src="images/new/notification_head5.png" alt="Notification avatar">
                                </div>

                                <div class="name_time">
                                    <div>
                                        <h4>دامن دریا </h4>
                                        <p>17 اربیهشت 98 -18:20</p>
                                    </div>
                                    <span class="email"><amir class="d79@yahoo"></amir>amir.d79@yahoo.com</span>
                                </div>
                                <!-- end /.name_time -->
                            </div>
                            <!-- end /.head -->

                            <div class="body text-justify">
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>
                            </div>
                            <!-- end /.body -->

                        </div>
                        <!-- end /.conversation -->

                        <div class="conversation">
                            <div class="head">
                                <div class="chat_avatar">
                                    <img src="images/new/notification_head4.png" alt="Notification avatar">
                                </div>

                                <div class="name_time">
                                    <div>
                                        <h4>علی علوی </h4>
                                        <p>17 اربیهشت 98 -18:20</p>
                                    </div>
                                    <span class="email">Me</span>
                                </div>
                                <!-- end /.name_time -->
                            </div>
                            <!-- end /.head -->

                            <div class="body text-justify">
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>

                            </div>
                            <!-- end /.body -->

                        </div>
                        <!-- end /.conversation -->

                        <div class="conversation">
                            <div class="head">
                                <div class="chat_avatar">
                                    <img src="images/new/notification_head5.png" alt="Notification avatar">
                                </div>

                                <div class="name_time">
                                    <div>
                                        <h4>علی علوی </h4>
                                        <p>17 اربیهشت 98 -18:20</p>
                                    </div>
                                </div>
                                <!-- end /.name_time -->
                            </div>
                            <!-- end /.head -->

                            <div class="body">
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>

                                <div class="attachments">
                                    <div class="attachment_head">
                                        <p>
                                            <span class="lnr lnr-paperclip"></span> 2 پیوست</p>
                                        <a href="#">
                                            <span class="lnr lnr-download"></span> دانلود </a>
                                    </div>

                                    <div class="attachment">
                                        <ul>
                                            <li>
                                                <a href="images/new/att_av.jpg" class="venobox">
                                                    <img src="images/new/att_av.jpg" alt="image attachment">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="images/new/att_av2.jpg" class="venobox">
                                                    <img src="images/new/att_av2.jpg" alt="image attachment">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end /.body -->
                        </div>
                        <!-- end /.conversation -->

                    </div>
                    <!-- end /.chat_area--conversation -->

                    <div class="message_composer">
                        <div class="composer_field" id="trumbowyg-demo"></div>
                        <!-- end /.trumbowyg-demo -->

                        <div class="attached"></div>

                        <div class="btns">
                            <button class="btn send btn--sm btn--round">پاسخ</button>
                            <label for="att">
                                <input type="file" class="attachment_field" id="att" multiple>
                                <span class="lnr lnr-paperclip"></span>پیوست </label>
                        </div>
                        <!-- end /.message_composer -->
                    </div>
                    <!-- end /.message_composer -->
                </div> --}}
                <!-- end /.chat_area -->
            </div>
            <!-- end /.col-md-7 -->
        </div>
        <!-- end /.row -->
    </div>
</section>
<!--================================
        END MESSAGE AREA
=================================-->

<!--================================















@endsection


