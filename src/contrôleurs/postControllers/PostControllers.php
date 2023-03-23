<?php
namespace Ht\Blog\Controllers\PostControllers;
use Ht\Blog\Controllers\Controllers;
use Ht\Blog\Model\PostTable;

class PostControllers extends Controllers{
    public function allPost(){
        $postTable = new PostTable();
        $data = $postTable->getAllPost();
        $this->returnJson($data);
    }
    public function recentPost(){
        $postTable = new PostTable();
        $data = $postTable->getRecentPost();
        $this->returnJson($data);
    }
    public function popularPost(){
        $postTable = new PostTable();
        $data = $postTable->getPopularPost();
        $this->returnJson($data);
    }
    public function postIndex(){
        $this->render('blog/home.php');
    }
    public function comment(){
    
    }
    
}
