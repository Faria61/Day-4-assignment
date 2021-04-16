<?php 
class KeyClass{
    public $key;

    public function setter($key){
        $this->key=$key;
    }

    public function getter(){
        echo $this->key;
    }
}

    include "KeyClass.php";
    $key=new KeyClass();
    $key->setter(156);
    $key->getter();

 ?>