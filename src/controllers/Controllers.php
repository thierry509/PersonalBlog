<?php
namespace Ht\Blog\Controllers;
abstract class Controllers{
    /**
     * @var string
     */
    protected $viewPath;
    public function __construct(){   
        $this->viewPath = viewPAth;
    }
    protected function render( string $view, ?array $data = []){
        $data;
        require $this->viewPath. DIRECTORY_SEPARATOR . $view;
    }
    protected function returnJson($data){
        header('Content-Type: application/json');
        $res = $data;
        echo json_encode($res);
    }
}