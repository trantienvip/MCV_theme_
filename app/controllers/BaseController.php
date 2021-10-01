<?php
namespace App\Controllers;
use Jenssegers\Blade\Blade;

class BaseController{
  protected function render($viewPath, $data = []){
    $blade = new Blade('./app/views', 'storage');
    echo $blade->make($viewPath, $data)->render();
  }
}


 ?>