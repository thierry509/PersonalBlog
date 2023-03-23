<?php
namespace Ht\Blog\Model;
abstract class Table{
    protected $database;
    public function __construct(){
        $this->database = new Database(HOST,username, password, database);
    }
}