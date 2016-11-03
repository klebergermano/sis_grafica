<?php
namespace App\View\Helper;
use Cake\View\Helper;

class MoneyHelper extends Helper {
    public function format($number){

        return "<span>R$ </span>". number_format($number, 2, "," , "." );


    }
  
}
