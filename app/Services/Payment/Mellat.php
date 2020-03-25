<?php
namespace App\Services\Payment;

use App\Models\Payment;
//use SoapClient;
use App\Utility\Order;

class Mellat
{

  private $terminalID;

  private $userName;

  private $password;

  private $client;

  private $namespace;

  public function __construct()
  {

    $this->terminalID = config('gateways.mellat.terminalID');
    $this->userName = config('gateways.mellat.userName');
    $this->password = config('gateways.mellat.password');
    
    $this->client = new \nusoap_client('https://bpm.shaparak.ir/pgwchannel/services/pgw?wsdl', TRUE);
    $this->namespace  = 'http://interfaces.core.sw.bps.com/';
  }
  public function doPayment(array $params)
  {


    $args = [

      'terminalId' => $this->terminalID,
      'userName' => $this->userName,
      'userPassword' => $this->password,
      'orderId' => $params['order_id'],
      'amount' => $params['amount'],
      'localDate' => date('Ymd'),
      'localTime' => date('Hms'),
      'additionalData' => "",
      'cllBackUrl' => route('payment.verify'),
      'payerId' => 0



    ];

    $response = $this->client->call('bpPayRequest', $args, $this->namespace);

    //dd($response);
    if ($response) {

      $rawResponseResult = $response['return'];

      $statusCode = explode(',', $rawResponseResult); // 0,6as4fd98q7rfasqwqw7d98

      if ($statusCode[0] == "0") {

        $newPayment = Payment::create([
          'user_id'      => $params['user_id'],
          'payment_method'       => Payment::ONLINE,
          'payment_gateway_name' => 'ملت',
          'payment_res_num'      => $params['order_id'],
          'payment_amount'       => $params['amount'],
          'payment_status'       => Payment::INCOMPLETE
        ]);
        if ($newPayment) {
          $this->redirectToBank($statusCode[1]);
        }
      }

      return [
        'success' => FALSE,
        'message' => 'خطایی در مرحله پرداخت به وجود آمده است . لطفا بعدا امتحان کنید',
        'code'    => $rawResponseResult
      ];
    }
   
  }

  public function  verifyPayment(array $params)
  {

   if($params['ResCode'] !="0"){

      return false;
   }  

   $args=[
      'terminalId' => $this->terminalID,
      'userName' => $this->userName,
      'userPassword' => $this->password,
      'orderId' => Order::generateOrderId(),
      'saleOrderId'=>$params['SaleOrderId'],
      'saleReferenceId'=>$params['SaleReferenceId']

   ];

   $response=$this->client->call('bpVerifyRequest',$args,$this->namespace);
    

   if(!$response || empty($response) ){

    return false;
   } 

   $result=$response['return'];

   if($result  !=0){

    return false;
   } 
    
//action for update database 

$paymentItem=Payment::where('payment_res_num',$params['SaleOrderId'])->get();

$paymentItem->payment_ref_num=$params['SaleReferenceId'];

$paymentItem->payment_status=Payment::COMPLETE;

$paymentItem->save();


   $settleArgs=[

      'terminalId' => $this->terminalID,
      'userName' => $this->userName,
      'userPassword' => $this->password,
      'orderId' => Order::generateOrderId(),
      'saleOrderId' => $params['SaleOrderId'],
      'saleReferenceId' => $params['SaleReferenceId']



   ];

   $settleResponse=$this->client->call('bpSettleRequest',$settleArgs,$this->namespace);

   if($settleResponse && $settleResponse['return'] == "0"){


   }

   return true;
  }

  private function redirectToBank(string $code)
  {


?>
    <script type="text/javascript">
      function postRefId(refIdValue) {
        var form = document.createElement("form");
        form.setAttribute("method", "POST");
        form.setAttribute("action", "https://bpm.shaparak.ir/pgwchannel/startpay.mellat");
        form.setAttribute("target", "_self");
        var hiddenField = document.createElement("input");
        hiddenField.setAttribute("type", "hidden");
        hiddenField.setAttribute("name", "RefId");
        hiddenField.setAttribute("value", refIdValue);
        form.appendChild(hiddenField);
        document.body.appendChild(form);
        form.submit();
        document.body.removeChild(form);
      }
    </script>
    <script type='text/javascript'>
      postRefId(<?php echo $code; ?>);
    </script>


<?php



  }
}
