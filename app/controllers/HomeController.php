<?php
namespace App\Controllers;
use App\Models\Users;
// use Phroute\Phroute\RouteCollector;

class HomeController extends BaseController{
  public function index(){
    $this->render('home.index', ['title' => 'Trang Chủ']);
    // $this->render('home.index', compact('users','title'));
  }
}


 ?>