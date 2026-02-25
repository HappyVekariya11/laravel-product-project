<?php
namespace App\PaymentService;

class PaypalAPI implements PaymentServiceInterface{
    public function pay(): array
    { 
 //  return "hello";
 return [
    'amount'=> 123,
    'transaction'=>'jchwuegfgwda'

 ];
    }
    public function checkout(): string
    {
      return "you checked out with paypal";
    }
    
}

?>