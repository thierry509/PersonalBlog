<?php
namespace Ht\Blog\Model;

use \PDO;
use PDOException;
use PDOStatement;

class Database{
    private $pdo;
    /**
     * @param string $hostname
     * @param string $username
     * @param string $password
     * @param string $database
     */
    public function __construct(string $hostname, string $username, string $password,  string $database){
        try{
            $this->pdo = new PDO("mysql:host=". $hostname . ";dbname=" . $database, $username, $password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
        }catch(PDOException $e){
            echo "impossible de se connecter a la base de donne" . $e;
        }
    }
    /**
     * @param string $request
     * @param string|null $value
     * 
     * @return PDOStatement
     */
    public function getData(string $request, ?array $value = []):PDOStatement{
        $res = $this->pdo->prepare($request);
        $res->execute($value);
        return $res; 
    }
    /**
     * @param string $request
     * @param string|null $value
     * 
     * @return [type]
     */
    public function insertData(string $request, ?string $value){
        $res = $this->pdo->prepare($request);
        $res->execute($value);
        return true;
    }
}