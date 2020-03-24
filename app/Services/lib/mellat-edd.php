<?php
/*
  Plugin Name: Bank Mellat EDD
  Plugin URI: https://wordpress.org/plugins/edd-mellat
  description: افزونه درگاه پرداخت بانک ملت برای افزونه فروش فایل EDD
  Version: 1.0.2
  Author: Hesam Mohammadi
  Author URI: https://profile.ir/hesam_m
  License: GPL2
 */

defined('ABSPATH') or die('No script kiddies please!');

// registers the gateway
function hmbpm_register_gateway($gateways)
{
    $gateways['bank_mellat'] = array('admin_label' => 'بانک ملت', 'checkout_label' => 'بانک ملت');
    return $gateways;
}
add_filter('edd_payment_gateways', 'hmbpm_register_gateway');

// register the action to remove default CC form
function hmbpm_cc_form()
{
    return;
}
add_action('edd_bank_mellat_cc_form', 'hmbpm_cc_form');

if (!class_exists('nusoap_base')) {
    require_once('nusoap.php');
}

function hmbpm_Request($BpmWs, $Req, $params)
{
    $namespace = 'http://interfaces.core.sw.bps.com/';
    $i = 0;
    do {
        // Call the SOAP method
        $result = $BpmWs->call($Req, $params, $namespace);
        $i++;
    } while ($BpmWs->fault and $i < 3);

    if ($BpmWs->fault) { // Check for a fault
        return array("-1", "-1");
    } else if ($BpmWs->getError()) {
        return array("-2", "-1");
    } else {
        $res = explode(',', $result);
    }
    return $res;
}

// payment processing happens here
function hmbpm_process_payment($purchase_data)
{
    global $edd_options;
    $bpm_ws = 'https://bpm.shaparak.ir/pgwchannel/services/pgw?wsdl';
    $i = 0;
    do {
        $BpmWs = new nusoap_client($bpm_ws);
        $i++;
    } while ($BpmWs->getError() and $i < 3);
    // Check for Connection error
    if ($BpmWs->getError()) {
        edd_set_error('pay_00', 'P00:خطایی در اتصال پیش آمد،مجدد تلاش کنید...');
        edd_send_back_to_checkout('?payment-mode=' . $purchase_data['post_data']['edd-gateway']);
    }
    $payment_data = array(
        'price' => $purchase_data['price'],
        'date' => $purchase_data['date'],
        'user_email' => $purchase_data['post_data']['edd_email'],
        'purchase_key' => $purchase_data['purchase_key'],
        'currency' => $edd_options['currency'],
        'downloads' => $purchase_data['downloads'],
        'cart_details' => $purchase_data['cart_details'],
        'user_info' => $purchase_data['user_info'],
        'status' => 'pending',
    );
    $payment = edd_insert_payment($payment_data);
    $PayAddr = 'https://bpm.shaparak.ir/pgwchannel/startpay.mellat';
    $terminalId = $edd_options['bank_mellat_TermID'];
    $userName = $edd_options['bank_mellat_UserName'];
    $userPassword = $edd_options['bank_mellat_PassWord'];
    if ($payment) {
        $_SESSION['bank_mellat_payment'] = $payment;
        $return = add_query_arg('order', 'bank_mellat', get_permalink($edd_options['success_page']));
        $orderId = date('ym') . date('His') . $payment;
        $amount = $purchase_data['price'];
        $localDate = date("Ymd");
        $localTime = date("His");
        $additionalData = "Purchase key: " . $purchase_data['purchase_key'];
        $payerId = 0;
        // pay request
        $parameters = array(
            'terminalId' => sanitize_text_field($terminalId),
            'userName' => sanitize_text_field($userName),
            'userPassword' => sanitize_text_field($userPassword),
            'orderId' => sanitize_text_field($orderId),
            'amount' => $amount,
            'localDate' => $localDate,
            'localTime' => $localTime,
            'additionalData' => $additionalData,
            'callBackUrl' => $return,
            'payerId' => $payerId
        );
        // Call the SOAP method
        $i = 0;
        do {
            $PayResult = hmbpm_Request($BpmWs, 'bpPayRequest', $parameters);
            $i++;
        } while ($PayResult[0] != "0" and $i < 3);
        /// end pay request
        if ($PayResult[0] == "0") {
            // Pay Request is Successfull
            echo '
				<form name="MellatPay" method="post" action="' . $PayAddr . '">
				<input type="hidden" name="RefId" value="' . $PayResult[1] . '">
				<script type="text/javascript" language="JavaScript">document.MellatPay.submit();</script></form>
			';
            exit;
        } else {
            edd_update_payment_status($payment, 'failed');
            edd_insert_payment_note($payment, 'P02:' . hmbpm_CheckStatus((int) $PayResult[0]));
            edd_set_error('pay_02', ':P02' . hmbpm_CheckStatus((int) $PayResult[0]));
            edd_send_back_to_checkout('?payment-mode=' . $purchase_data['post_data']['edd-gateway']);
        }
    } else {
        edd_set_error('pay_01', 'P01:خطا در ایجاد پرداخت، لطفاً مجدداً تلاش کنید...');
        edd_send_back_to_checkout('?payment-mode=' . $purchase_data['post_data']['edd-gateway']);
    }
}
add_action('edd_gateway_bank_mellat', 'hmbpm_process_payment');

// verify payment
function hmbpm_verify()
{
    global $edd_options;
    $terminalId = $edd_options['bank_mellat_TermID'];
    $userName = $edd_options['bank_mellat_UserName'];
    $userPassword = $edd_options['bank_mellat_PassWord'];
    $bpm_ws = 'https://bpm.shaparak.ir/pgwchannel/services/pgw?wsdl';
    if (isset($_GET['order']) and $_GET['order'] == 'bank_mellat' and isset($_POST['SaleOrderId']) and $_SESSION['bank_mellat_payment'] == substr($_POST['SaleOrderId'], 10) and $_POST['ResCode'] == '0') {
        $payment = sanitize_text_field($_SESSION['bank_mellat_payment']);
        $RefId = sanitize_text_field($_POST['RefId']);
        $ResCode = sanitize_text_field($_POST['ResCode']);
        $orderId = sanitize_text_field($_POST['SaleOrderId']);
        $SaleOrderId = sanitize_text_field($_POST['SaleOrderId']);
        $SaleReferenceId = sanitize_text_field($_POST['SaleReferenceId']);
        $do_inquiry = false;
        $do_settle = false;
        $do_reversal = false;
        $do_publish = false;
        //Connect to WebService
        $i = 0;
        do {
            $BpmWs = new nusoap_client($bpm_ws);
            $i++;
        } while ($BpmWs->getError() and $i < 5); //Check for connection errors
        if ($BpmWs->getError()) {
            edd_set_error('ver_00', 'V00:تراکنش ناموفق بود.<br>اگر وجهی از حساب شما کسر شده باشد، تا پایان روز جاری به حساب شما باز خواهد گشت.');
            edd_update_payment_status($_SESSION['bank_mellat_payment'], 'failed');
            edd_insert_payment_note($_SESSION['bank_mellat_payment'], 'V00:' . '<pre>' . $BpmWs->getError() . '</pre>');
            edd_send_back_to_checkout('?payment-mode=bank_mellat');
        }

        $parameters = array(
            'terminalId' => $terminalId,
            'userName' => $userName,
            'userPassword' => $userPassword,
            'orderId' => $orderId,
            'saleOrderId' => $SaleOrderId,
            'saleReferenceId' => $SaleReferenceId
        );
        // verify request
        if (!edd_is_test_mode()) {
            // Call the SOAP method
            $VerResult = hmbpm_Request($BpmWs, 'bpVerifyRequest', $parameters);
            if ($VerResult[0] == "0") {
                // Note: Successful Verify means complete successful sale was done.
                //SETTLE REQUEST
                $do_settle = true;
                $do_inquiry = false;
            } else {
                //INQUIRY REQUEST
                $do_inquiry = true;
            }
        } else {
            //in test mode
            $do_reversal = true;
            $do_settle = false;
            $do_publish = false;
            $do_inquiry = false;
        }

        // inquiry request
        if ($do_inquiry) {
            // Call the SOAP method
            $i = 0;
            do {
                $InqResult = hmbpm_Request($BpmWs, 'bpInquiryRequest', $parameters);
                $i++;
            } while ($InqResult[0] != "0" and $i < 4);

            if ($InqResult[0] == "0") {
                // Note: Successful Inquiry means complete successful sale was done.
                //SETTLE REQUEST
                $do_settle = true;
                $do_inquiry = false;
            } else {
                //REVERSAL REQUEST
                $do_reversal = true;
                $do_inquiry = false;
                $do_settle = false;
            }
        }

        // settle request
        if ($do_settle) {
            // Call the SOAP method
            $i = 0;
            do {
                $SettResult = hmbpm_Request($BpmWs, 'bpSettleRequest', $parameters);
                $i++;
            } while ($SettResult[0] != "0" and $i < 5);
            if ($SettResult[0] == "0") {
                // Note: Successful Settle means that sale is settled.
                $do_publish = true;
                $do_settle = false;
                $do_reversal = false;
            } else {
                $do_reversal = true;
                $do_settle = false;
                $do_publish = false;
            }
        }

        // reversal request
        if ($do_reversal) {
            $i = 0;
            do { //REVERSAL REQUEST
                $RevResult = hmbpm_Request($BpmWs, 'bpReversalRequest', $parameters);
                $i++;
            } while ($RevResult[0] != "0" and $i < 5);
            // Note: Successful Reversal means that sale is reversed.
            edd_update_payment_status($payment, 'failed');
            edd_insert_payment_note($payment, 'REV:' . hmbpm_CheckStatus((int) $RevResult[0]));
            edd_set_error('rev_' . $RevResult[0], 'R00:تراکنش ناموفق بود.<br>اگر وجهی از حساب شما کسر شده باشد، تا پایان روز جاری به حساب شما باز خواهد گشت.');
            edd_send_back_to_checkout('?payment-mode=bank_mellat');
            $do_publish = false;
            $do_reversal = false;
        }

        if ($do_publish == true) {
            // Publish Payment
            $do_publish = false;
            edd_update_payment_status($payment, 'publish');
            edd_insert_payment_note($payment, 'شماره تراکنش:' . $SaleReferenceId);
            echo "<script type='text/javascript'>alert('کد تراکنش خرید بانک : " . $SaleReferenceId . "');</script>";
        }
    } else if (isset($_GET['order']) and $_GET['order'] == 'bank_mellat' and isset($_POST['SaleOrderId']) and $_SESSION['bank_mellat_payment'] == substr($_POST['SaleOrderId'], 10) and $_POST['ResCode'] != '0') {
        edd_update_payment_status($_SESSION['bank_mellat_payment'], 'failed');
        edd_insert_payment_note($_SESSION['bank_mellat_payment'], 'V02:' . hmbpm_CheckStatus((int) $_POST['ResCode']));
        edd_set_error($_POST['ResCode'], hmbpm_CheckStatus((int) $_POST['ResCode']));
        edd_send_back_to_checkout('?payment-mode=bank_mellat');
    }
}
add_action('init', 'hmbpm_verify');

// adds the settings to the Payment Gateways section
function hmbpm_settings_panel($settings)
{
    $bank_mellat_settings = array(
        array(
            'id'        =>    'bank_mellat_settings',
            'name'        =>    '<span style="color:green">پيکربندي درگاه به پرداخت بانک ملت</span><p class="description">در حالت آزمایشی میتوانید این قسمت را خالی بگذارید.</p>',
            'desc'        =>    'پيکربندي درگاه بانک ملت با تنظيمات فروشگاه',
            'type'        =>    'header'
        ),
        array(
            'id'        =>    'bank_mellat_TermID',
            'name'        =>    'شماره ترمينال',
            'desc'        =>    '',
            'type'        =>    'text',
            'size'        =>    'medium'
        ),
        array(
            'id'        =>    'bank_mellat_UserName',
            'name'        =>    'نام کاربري',
            'desc'        =>    '',
            'type'        =>    'text',
            'size'        =>    'medium'
        ),
        array(
            'id'        =>    'bank_mellat_PassWord',
            'name'        =>    'رمز',
            'desc'        =>    '',
            'type'        =>    'text',
            'size'        =>    'medium'
        )
    );
    return array_merge($settings, $bank_mellat_settings);
}
add_filter('edd_settings_gateways', 'hmbpm_settings_panel');

// check status codes
function hmbpm_CheckStatus($ecode)
{
    $tmess = "شرح خطا: ";
    switch ($ecode) {
        case -2:
            $tmess .= "شکست در ارتباط با بانک";
            break;
        case -1:
            $tmess .= "شکست در ارتباط با بانک";
            break;
        case 0:
            $tmess .= "تراکنش با موفقیت انجام شد";
            break;
        case 11:
            $tmess .= "شماره کارت معتبر نیست";
            break;
        case 12:
            $tmess .= "موجودی کافی نیست";
            break;
        case 13:
            $tmess .= "رمز دوم شما صحیح نیست";
            break;
        case 14:
            $tmess .= "دفعات مجاز ورود رمز بیش از حد است";
            break;
        case 15:
            $tmess .= "کارت معتبر نیست";
            break;
        case 16:
            $tmess .= "دفعات برداشت وجه بیش از حد مجاز است";
            break;
        case 17:
            $tmess .= "شما از انجام تراکنش منصرف شده اید";
            break;
        case 18:
            $tmess .= "تاریخ انقضای کارت گذشته است";
            break;
        case 19:
            $tmess .= "مبلغ برداشت وجه بیش از حد مجاز است";
            break;
        case 111:
            $tmess .= "صادر کننده کارت نامعتبر است";
            break;
        case 112:
            $tmess .= "خطای سوییچ صادر کننده کارت";
            break;
        case 113:
            $tmess .= "پاسخی از صادر کننده کارت دریافت نشد";
            break;
        case 114:
            $tmess .= "دارنده کارت مجاز به انجام این تراکنش نمی باشد";
            break;
        case 21:
            $tmess .= "پذیرنده معتبر نیست";
            break;
        case 23:
            $tmess .= "خطای امنیتی رخ داده است";
            break;
        case 24:
            $tmess .= "اطلاعات کاربری پذیرنده معتبر نیست";
            break;
        case 25:
            $tmess .= "مبلغ نامعتبر است";
            break;
        case 31:
            $tmess .= "پاسخ نامعتبر است";
            break;
        case 32:
            $tmess .= "فرمت اطلاعات وارد شده صحیح نیست";
            break;
        case 33:
            $tmess .= "حساب نامعتبر است";
            break;
        case 34:
            $tmess .= "خطای سیستمی";
            break;
        case 35:
            $tmess .= "تاریخ نامعتبر است";
            break;
        case 41:
            $tmess .= "شماره درخواست تکراری است";
            break;
        case 42:
            $tmess .= "تراکنش Sale یافت نشد";
            break;
        case 43:
            $tmess .= "قبلا درخواست Verify داده شده است";
            break;
        case 44:
            $tmess .= "درخواست Verify یافت نشد";
            break;
        case 45:
            $tmess .= "تراکنش Settle شده است";
            break;
        case 46:
            $tmess .= "تراکنش Settle نشده است";
            break;
        case 47:
            $tmess .= "تراکنش Settle یافت نشد";
            break;
        case 48:
            $tmess .= "تراکنش Reverse شده است";
            break;
        case 49:
            $tmess .= "تراکنش Refund یافت نشد";
            break;
        case 412:
            $tmess .= "شناسه قبض نادرست است";
            break;
        case 413:
            $tmess .= "شناسه پرداخت نادرست است";
            break;
        case 414:
            $tmess .= "سازمان صادر کننده قبض معتبر نیست";
            break;
        case 415:
            $tmess .= "زمان جلسه کاری به پایان رسیده است";
            break;
        case 416:
            $tmess .= "خطا در ثبت اطلاعات";
            break;
        case 417:
            $tmess .= "شناسه پرداخت کننده نامعتبر است";
            break;
        case 418:
            $tmess .= "اشکال در تعریف اطلاعات مشتری";
            break;
        case 419:
            $tmess .= "تعداد دفعات ورود اطلاعات بیش از حد مجاز است";
            break;
        case 421:
            $tmess .= "IP معتبر نیست";
            break;
        case 51:
            $tmess .= "تراکنش تکراری است";
            break;
        case 54:
            $tmess .= "تراکنش مرجع موجود نیست";
            break;
        case 55:
            $tmess .= "تراکنش نامعتبر است";
            break;
        case 61:
            $tmess .= "خطا در واریز";
            break;
        default:
            $tmess .= "خطای تعریف نشده";
    }
    return $ecode . ': ' . $tmess;
}
