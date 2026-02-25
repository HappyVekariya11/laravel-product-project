<?php

namespace App\Services;
//use App\Services\ApiClient;
use MailchimpMarketing\ApiClient;
use Illuminate\Console\Application;
//use MailchimpMarketing\ApiClient;
class MailchimpNewsletter implements Newsletter
{
  protected ApiClient $client;

  public function __construct(ApiClient $client/*, protected string $foo*/)
  {
    $this->client = $client;
  }

  public function subscribe(string $email, string $list = null)
  {

    $list = config('services.mailchimp.lists.subscribers');

    //     $mailchimp= new ApiClient();
    //   // $mailchimp = new \MailchimpMarketing\ApiClient();

    //     $mailchimp->setConfig([
    //       'apiKey' => config('services.mailchimp.key'),
    //       'server' => 'us10'
    //     ]);

    
    return $this->client->lists->addListMember($list, [
      'email_address' => $email,
      'status' => 'subscribed'
    ]);
  }
  // protected function Client(){

  //  // $mailchimp= new ApiClient();
  // // $mailchimp = new \MailchimpMarketing\ApiClient();

  // //  return $this->client->setConfig([
  // //     'apiKey' => config('services.mailchimp.key'),
  // //     'server' => 'us10'
  // //   ]);

  // }
}
