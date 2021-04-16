<?php
   class Gorib{

	public $money = "Low money";
	public $home = "homeless";
	include 'gorib.php'; 

class MyStatus extends Gorib{
    public function getmOney(){
		echo $this->money;
	}
    public function gethome(){
		echo $this->home;
	}
}

$newStatus = new MyStatus;
echo "My current status <br>";
$newStatus->gethome();
echo " is : <br> ";
$newStatus->getmOney();

?>




