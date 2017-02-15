<?php
	/* 
	$i = 0;
	while ($i < 10) {
		echo "string";
		$i++;
	} 
	*/

//while 

	/*  
	$user_list = array("Andy", "Vill", "Ann", "Steph");
	$i = 0;

	while ($i < count($user_list)) {
		echo $user_list[$i] . "<br>";
		$i++;
	}
	*/
//do while


	/*  
	$user_list = array("Andy", "Vill", "Ann", "Steph");
	$i = 0;
	do{
		echo "$i" . ")" . $user_list[$i] . "<br>";
		$i++;
	}

	while ($i < count($user_list));
*/

/*
	$user_list = array("Andy", "Vill", "Ann", "Steph");
	for ($i=0; $i < count($user_list); $i++) { 
		echo "$i" . ")" . $user_list[$i] . "<br>";
	}
*/
	$int = array(15, 44, 65, 77, 98);
	$counter = 0;
	for ($i=0; $i < count($int); $i++) { 
		$counter += $int[$i];
	}
		$result = $counter / count($int);
		echo $result;
?>