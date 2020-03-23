<?php  


namespace App\Services\Payment ;


class Mellat{ 

    private $terminalID;

    private $userName;

    private $password;



  public function __construct(){

      

    $this->terminalID=config('gateways.mellat.terminalID');
    $this->userName=config('gateways.mellat.userName');
    $this->password = config('gateways.mellat.password');

  }
public function doPayment(){



}

public function  verifyPayment(){



}

}