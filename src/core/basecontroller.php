<?php 

namespace Pure\Mvs\core;

class basecontroller{

    public function __call($name, $arguments)
    {
        echo "This Method is not found";
    }

    protected function view($path,$data=[]){
        extract($data);
        require "../src/views/" . $path . ".php" ;
        
 
     } 
}