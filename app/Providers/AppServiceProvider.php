<?php

namespace App\Providers;

use App\Models\User;
use App\Services\MailchimpNewsletter;
use Illuminate\Support\ServiceProvider;
use App\Services\Newsletter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
use MailchimpMarketing\ApiClient;
use Illuminate\Support\Facades;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    //put in to the conreooler
    public function register(): void
    {
        app()->bind(Newsletter::class, function () {
           // $client = new ApiClient();


            $client=(new ApiClient)->setConfig([
                'apiKey' => config('services.mailchimp.key'),
                'server' => 'us10'
              ]);
            return new MailchimpNewsletter($client);
               
            
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //for authentication people(layouy.blade)for first way or second way
        Gate::define('admin', function(User $user){
   return $user->username=='happyvekariya'; 
        });

//for second way
    //   Blade::if ('admin',function(){
    //     return request()->user?->can('admin');
    //   }) ;
    }
}
