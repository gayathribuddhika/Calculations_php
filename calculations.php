<?php


if(isset($_REQUEST["num1"]) && isset($_REQUEST["num2"])){
	
	$Addition = $_REQUEST["num1"] + $_REQUEST["num2"];
	$Substraction = $_REQUEST["num1"] - $_REQUEST["num2"];
	$Multiplication = $_REQUEST["num1"] * $_REQUEST["num2"];
	$Division = $_REQUEST["num1"] / $_REQUEST["num2"];
	$Remainder = $_REQUEST["num1"] % $_REQUEST["num2"];

		echo "Addition = ".$Addition."<br>";
		echo "Substraction = ".$Substraction."<br>";
		echo "Multiplication = ".$Multiplication."<br>";
		echo "Division = ".$Division."<br>";
		echo "Remainder = ".$Remainder;
	
}else{
	echo "Fill the blanks."; 
}


?>