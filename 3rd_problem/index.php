<?php

class SuperPower{
	public function power()
	{
		echo "I have power!<br>";
	}
	public function Flying()
	{
		echo "I can fly <br>";
	}
	public function leasereye()
	{
		echo "I have leasereye <br>";
	}
}

include 'SuperPower.php';
class CaptainAmerica extends SuperPower{
}

include 'SuperPower.php';
class IronMan extends SuperPower{
	}
	
include 'SuperPower.php';
class Thor extends SuperPower{
	
}


include 'IronMan.php';
include 'CaptainAmerica.php';
include 'Thor.php';

$IronMan = new IronMan();
$IronMan->Flying();

$CaptainAmerica = new CaptainAmerica();
$CaptainAmerica->leasereye();

$Thor = new Thor();
$Thor->power();

?>