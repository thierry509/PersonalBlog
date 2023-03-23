<?php
namespace Ht\Blog\Controllers;

use GuzzleHttp\Psr7\Header;
use Ht\Blog\Controllers\Controllers;

class MainController extends Controllers{
    public function home(){
        $this->render('home.php');
    }

    public function default(){
        header('HTTP/1.0 404');
        $this->returnJson([]);
    }
}