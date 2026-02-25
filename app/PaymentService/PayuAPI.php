<?php 
namespace App\PaymentService;

class PayuAPI implements PaymentServiceInterface{
 public function checkout(): string{
    return "you checked out with payu money";
 }
}