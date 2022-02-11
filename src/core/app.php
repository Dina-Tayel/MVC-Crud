<?php 
namespace Pure\Mvs\core;


class app {
    private $controller;
    private $method ;
    private $params;
  
    public function __construct()
    {
      $this->buildUrl();
      $this->runUrl();
      }
  
    private function buildUrl(){
      $url=explode("/",$_SERVER["QUERY_STRING"]);
      // $this->controller=$url[0];
      // $this->method=$url[1];
      $this->controller= empty($url[0]) ? 'users' : $url[0] ;
      $this->method=empty($url[1]) ? 'index' : $url[1];
      unset($url[0],$url[1]);
      $this->params=$url;
  
    }
  
    public function runUrl(){
      $controller="Pure\Mvs\controllers\\" . $this->controller ;
      if(class_exists($controller)){
           call_user_func_array([new $controller,$this->method],$this->params);
      }else{
        echo "This Class is not found";
      }
    }
  }
