<?php
namespace Ht\Blog\Model;
class PostTable extends Table{
    public function getAllPost(){
        $fetch = $this->database->getData(
            "SELECT * FROM post"
        );
        $data = $fetch->fetchAll();
        return $data;
    }
    public function getRecentPost(){
        $fetch = $this->database->getData(
            'SELECT p.id, p.title, p.created_at, c.id category_id, c.name AS category
            from post p
           JOIN post_category pc ON p.id = pc.post_id
           JOIN category c ON c.id = pc.category_id'
        );
        $data = $fetch->fetchAll();
        return $data;
    }
    public function getPopularPost(){
        $fetch = $this->database->getData(
            'SELECT p.id, p.title, p.created_at, c.id category_id, c.name AS category
            from post p
           JOIN post_category pc ON p.id = pc.post_id
           JOIN category c ON c.id = pc.category_id'
        );
        $data = $fetch->fetchAll();
        return $data;
    }
}