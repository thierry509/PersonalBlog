<?php
namespace Ht\Blog\Utils;
use \AltoRouter;
use Ht\Blog\Controllers\MainController;
class Router{
    /**
     * @var Altorouter
     */
    private $router;
        public function __construct(){
            $this->router = new AltoRouter();
        }
        /**
         * @param string $url
         * @param string $controller
         * @param string|null $name
         * 
         * @return [type]
         */
        public function get(string $url, array $controller, ?string $name = null){
            $this->router->map('GET', $url, $controller, $name);
        }
        /**
         * @param string $url
         * @param string $controller
         * @param string|null $name
         * 
         * @return [type]
         */
        public function get_post(string $url, string $controller, ?string $name = null){
            $this->router->map('GET|POST', $url, $controller, $name);
        }
        /**
         * @param string $url
         * @param string $controller
         * @param string|null $name
         * 
         * @return [type]
         */
        public function post(string $url, string $controller, ?string $name = null){
            $this->router->map('POST', $url, $controller, $name);
        }
        public function run(){
            $match = $this->router->match();
            if($match){
                [$clasName, $method] = $match['target'];
                if(class_exists($clasName) && method_exists($clasName, $method)){
                    $class = new $clasName;
                    call_user_func([$class, $method], $match['params']);
                }
                else{
                    $class =new MainController();
                    $class->default();
                }
                
            }
            else{
                header('HTTP/1.0 404 not found');
                exit();
            }
        }
}