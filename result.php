<?php
	session_start();
 ?>

 <!DOCTYPE html>
<html>
<body>
	<?php

	echo "Value 1 Answer is ". $_SESSION["id"] . "<br>";
	echo "Value 2 Answer is ". $_SESSION["num"] . "<br>";
	
/*
	$one = $_SESSION["q1"];
	$two = $_SESSION["q2"];
	$three = $_SESSION["q3"];
	$four = $_SESSION["q4"];
	$five = $_SESSION["q5"];
	$Total = $one + $two + $three + $four + $five;

	echo "Total Answer is ". $Total; */

	echo "<html><pre>";
	print_r($_SESSION);
	echo "<pre></html>";

	if($_SESSION['id'] > $_SESSION['num']){
		echo "Your Party is PDP";
	}
	  else{
	  	echo "Your Policies are Inline with UPP Manifestos";
	  }

	 ?>
</body>
</html> 
