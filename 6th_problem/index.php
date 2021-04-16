<?php

class MyName{
   public $full ="What is my name?<br>";
   public function __construct($name){
		echo "I am ". $name . '<br>';
	}
    public function say(){
		echo "Welcome!<br>";
	}
}

include 'MyName.php';
$Call = new MyName("Oyshi");

?>