<?php namespace CWS\Facades;

use Illuminate\Support\Facades\Facade;


/**
* Check - Sets up Check message
*/
class Toastr extends Facade{

     protected static function getFacadeAccessor()
     {
          return 'toastr';
     }

}