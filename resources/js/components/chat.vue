<template>
    
<div class="chat">
<measseges></measseges>
<measseges>
<div class="chat_area cardify">
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
                </div>

</measseges>
</div>

</template>

<script>
export default{


}
</script>

<style>



</style>