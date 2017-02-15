<?php
	$a = "strin"; 
	$b = "g";
	$c = $a.$b;

	echo $c."<br>";
//new example
	$a1 = sqrt(25);  #корень квадратный с 25 
	echo $a1."<br>";
//new example
	$a2 = 25;
	$b2 = true;
	$c2 = false;
	$d = $a2 + $b2; #добавило 1
	$e = $a2 + $c2; #добавило 0

	echo $d . ", " . $e . "<br>";
//new example
	$a3 = 33;
	$a3 += 2; 

	echo $a3."<br>"; #добавило 2
//new example
	$a4 = 3;
	echo $a4;

	$a5 = 10;
	$b5 = 2;
	$c5 = ($a5 + $b5)*($a5 - $b5);
	echo $c5. "<br>";
//new example
	$a6 = 10;
	$b6 = 2;

	$c6 = pow($a6, $b6);
	echo $c6."<br>"; #1000
//new example
	$a7 = 430; 
	$b7 = 5*($a7 - 32)/9;
	echo $b7 . "<br>"; #переводит Цельсий в Фаренгейт
//new example
	$text = 'Я';
	$text = $text .' хочу' ;
	$text = $text .' знать' ;
	$text = $text .' PHP!' ;
	echo $text . "<br>";
//new example
		$var = 10;
		$var = $var + 1;
		$var = $var + 1;
		$var = $var - 1;
		echo $var. " <br>";

	$var = 10;
	$var++;
	$var++;
	$var--;
	echo $var."<br>";

//new example arrays

	$v = array(
		"girls" => array("Ann", "Ket", "Sonya"),
		"boys" => array("Max", "Den", "Artem")
		);

	echo $v["girls"][2]."<br>";
//new example

	$a8 = array("Hello", "world", "!");

	echo $a8[0]." ". $a8[1]." ".$a8[2]."<br>";
//new example

	 $arr=array('joomla', 'wordpress', 'netcat');
	 var_dump($arr);
	 echo "<br>";
 //new example
	  $arr1=array('joomla', 'wordpress', 'netcat');
	  echo $arr1[0]." ";
	  echo $arr1[1]." ";
	  echo $arr1[2]."<br>";
//new example
	  $arr2=array(2, 5, 3, 9);
	  $res=$arr2[0]*$arr2[1]*$arr2[2]*$arr2[3];

	  echo $res."<br>";
//new example

	  $arr3=array('a', 'b', 'c', 78 );

	  $arr4[] = 'a';
	  $arr4[] = 'b';
	  $arr4[] = 'c';
	  $arr4[] = 78;
//new example
	  $arr5=array('Я', 'учу', 'PHP', '!');
	  foreach ($arr5 as $key11 => $value11) {
	  	echo $value11." ";
	   }
	   echo "<br>";
//new example
	   $arr6=array('a', 'b', 'c', 'd', 'e');
	   $var666=$arr6[1];
	   $arr6[1]=$arr6[2];
	   $arr6[2]=$var666;
	   var_dump($arr6);
	   echo "<br>";
//new example
	   $arr7=array('a', 'b', 'c', 'd', 'e');
	   rsort($arr7);
	   foreach ($arr7 as $key12 => $value12) {
		 echo $value12.", ";
	   }
	   echo "<br>";
//new example
		$arr8 = array('text'=>'текст!', 1=>'125', 'key'=>'element');
		var_dump($arr8);
		echo "<br>";
//new example
		$arr9 = array('Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$');  
		echo "Коля зарабатывает - " .$arr9['Коля']."<br>";
//new example
		$arr10= array(1=>"Su", 2=>"Mo", 3=>"Tu", 4=> "We", 5=> "Th", 6=>"Fr", 7=>"Sa");
		echo $arr10[3]."<br>";
//new example
		$arr11= array('I', 'study', 'php', 'sign');
		echo $arr11[0]." " . $arr11[1]." ".$arr11[2]."<br>";
//new example
		$arr12 = array(
			'cms'=>array('joomla', 'wordpress', 'drupal'),
			'colors'=>array('blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый')
		);
		echo $arr12['cms'][0].", ".$arr12['cms'][2].", ".$arr12['colors']['green'].", ". $arr12['colors']['red']."<br>";
//new example
		$arr13=array(
			"en" => array('Su', 'Mo', 'Tu'),
			"ru" => array('Вс','Пн','Вт')
		);
		echo $arr13["en"][0]. " " .$arr13["ru"][0]. "<br>";
?>