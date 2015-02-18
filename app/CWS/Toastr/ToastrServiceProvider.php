<?php namespace CWS\Toastr;

use Illuminate\Support\ServiceProvider;

class ToastrServiceProvider extends ServiceProvider{

     public function register()
     {
          $this->app->bind('toastr', 'CWS\Toastr\Toastr');
     }


}