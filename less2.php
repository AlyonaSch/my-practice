<?php
	$q = 1;
	if ($q == 0) {
		echo 'Верно!';
	} else {
		echo 'Неверно!';
	}

	echo "<br>";

	$w = 0;
	if ($w == 0) {
		echo 'Верно!';
	} else {
		echo 'Неверно!';
	}

	echo "<br>";

	$e = -1;
	if ($e == 0) {
		echo 'Верно!';
	} else {
		echo 'Неверно!';
	}

	echo "<br>";
//anoter example
	$r = 5;
	if($r > 0){
		echo "hi";
	}
	echo "<br>";
//anoter example
	$t = "1";

	if ($t == 1) {
		echo "true";
	} 
	elseif($t === "1"){
		echo "true2";
	}
	else {
		echo "false";
	}
	echo "<br>";
//если переменная пустая
	$y = 1;
	$u = false;
	if (empty($y)) {
		echo 'Верно!';
	} else {
		echo 'Неверно!';
	}                    
						 # 'Неверно!'


	if (empty($u)) {
		echo 'Верно!';
	} else {
		echo 'Неверно!';
	}
							#'Верно!'
	echo "<br>";
//eсли переменная существует 
	$o = 25;

	if (isset($o)) {
		echo "woo-hoo";
	} else {
		echo "oh no";
	}
	echo "<br>";
//работа с тру и фолс 
	$p = true;

	if($p){
		echo "rigt";
	}

	echo "<br>";

//сокращенная запись if else 

	$number = 5;
	echo "Число ";
	if ($number < 0) echo 'отрицательное';
	else echo 'положительное';

	echo "<br>";

	echo 'Число '.($number < 0 ? 'отрицательное' : 'положительное');
	echo "<br>";
//anoter example

	$q1 = 5;
	$q2 = 6;
	$res = $q1 + $q2;

	if($res > 5){
		$res = 5;
	}
	else{
		$res *= 10;
	}

	echo $res;
	echo "<br>";
//anoter example

	$aa = 2;

	if ($aa == 2 or $aa == 0) {
		$aa /= 10;
	} else {
		$aa += 7;
	}
	echo $aa. "<br>";
//anoter example
	$number = 1;

	switch ($number) {
		case 1:
			echo "winter";
			break;
		case 2:
			echo "spring";
			break;
		case 3:
			echo "autumn";
			break;
		case 4:
			echo "summer";
			break;
		default:
			echo "it is not number";
			break;
	}
	echo "<br>";
//anoter example

	$qqw = 25;

	switch ($qqw) {
		case $qqw > 0 and $qqw < 10:
			echo "0 - 10";
			break;
		case $qqw > 10 and $qqw < 30:
			echo "10- 30";
			break;
		default:
			echo "else";
			break;
	}
	echo "<br>";
//anoter example
	$month = 3;

	switch ($month) {
		case $month >= 3 and $month <= 5:
			echo "spring";
			break;
		case $month > 5 and $month <= 8:
			echo "summer";
			break;
		case $month > 8 and $month <= 11:
			echo "autumn";
			break;
		case $month > 11 and $month <= 12:
			echo "winter";
			break;
		case $month > 1 and $month <= 2:
			echo "winter";
			break;
		default:
			echo "it is not month";
			break;
	}
	echo "<br>";
//anoter example
	$s = 1; 

	while ($s <= 5) {
		echo "1";
		$s++; #11111
	}

	$s1 = 1; 

	while ($s1 <= 4) {
		echo $s1;
		$s1++; #1234
	}
	echo "<br>";
//anoter example
	$d = array(1,2,3,4,5,6,7,8,9,11,22,33);
	foreach ($d as $key => $value) {
		if ($value === 9) {
			break;
		} else {
			echo $value."<br>";
		}
	}
//anoter example вычислить сумму элементов массива. 
	$g = array(2,4,5,6,3,7,77,5);
	$h = 0;

	foreach ($g as $key => $value) {
		$h += $value;
	}
	echo $h;

	$k= array(2,4,5,6,3,7,77,5);

	foreach ($k as $key => $value) {
		$l = array_sum($k);
	}
	echo $l . "<br>";
//anoter example
	$z = array(26, 17, 136, 12, 79, 15);
	$n = 0;

	foreach ($z as $key => $value) {
		$n += $value * $value;
	}
	echo $n."<br>";
//anoter example
	$arr12 = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
	foreach ($arr12 as $key => $value) {
		echo $key. " " . $value . " ";
	}
	echo "<br>";
//anoter example
	$arr13 = array('Kolya' => 200, 'Vasya' => 300, 'Petya' => 400);
	foreach ($arr13 as $key => $value) {
		echo $key . " zarplata - " . $value . " dollarov". "<br>";
	}
//anoter example
	$arr14 = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
	foreach ($arr14 as $key => $value) {
		$en[] = $key;
		$ru[] = $value;
	}
	var_dump($en);
	echo "<br>";
	var_dump($ru);
	echo "<br>";
//anoter example
	$qwe = array(2, 5, 9, 15, 0, 4);
	foreach ($qwe as $key => $value) {
		if($value > 3 and $value < 10)
			echo $value. "<br>";
	}
//anoter example
	$qwer = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
	foreach ($qwer as $key => $value) {
		echo "-".$value." ";
	}
	echo "<br>";
//anoter example
	for ($q=1; $q <= 100; $q++) { 
		echo $q;
	}
	echo "<br>";
//anoter example
	for ($e=1; $e <= 33; $e++) { 
		echo $e;
	}
	echo "<br>";
//anoter example
	$e1 = 0;
	while ($e1 <= 100) {
		echo $e1;
		$e1 +=2;
	}
	echo "<br>";
//anoter example
	$qqq = array(1, 4, 2, 5, 19, 13, 0, 10);
	$www = 4;
	foreach ($qqq as $key22 => $value22) {
		if($value22 == $www){
			echo "here";
		}
	}
	echo "<br>";
//anoter example 
//количество ключей
	$aeq = array(4, 2, 5, 19, 13, 0, 10);
	$count = 0;
	foreach ($aeq as $key => $value) {
			$count++;
			echo $count;
		}	
	echo "<br>";
//anoter example 
	$qwsa = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
	foreach ($qwsa as $key => $value) {
		if ($value === 3 or $value === 6 or $value === 9) {
			echo $value. "<br>";
		}
		else{
			echo $value . " ";
		}
	}
//anoter example 
	$qwsaaaa = array('Ян', 'Фв', 'Мр', 'Ап');
	$eee = 1;
	foreach ($qwsaaaa as $key => $value) {
		if($key==$eee){
			echo "<b>".$value."</b>". " ";
		}
		else{
			echo $value. " ";
		}
	}
	echo "<br>";
//anoter example 
	$arr1212 = array('Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс');
	$day = 3;

	foreach ($arr1212 as $key => $value) {
		if ($key == $day) {
			echo "<b>".$value."</b>" . " ";
		}
		else{
			echo $value. " ";
		}
	}
//anoter example 
	
?>