<?php
echo "1.)". "<br>";
	$a111=10;
	$b111=3;
	$c111 = $a111 % $b111;

	echo $c111. "<br>";
echo "2.)". "<br>";
		$a112=12;
		$b112=3;

		if($a112%$b112 == 0){
			echo "right"."<br>";
		}
		else{
			echo "wrong";
		}

echo "3.)". "<br>";
	$a113=25;
	$b113 = 30;

	$c113= abs($a113 - $b113);
	echo "<b>".$c113."</b>"."<br>";
echo "4.)". "<br>";
	$a114=3;
	$b114=6;
	$d114=5;
	$e114=1;
	$c114=abs($a114-$b114);
	$f114=abs($d114-$e114);
	echo $c114 . ",".$f114."<br>";

echo "5.)". "<br>";
	$st12=pow(2, 10);
	echo $st12."<br>";

echo "6.)". "<br>";
	$a115=sqrt(245);
	echo $a115."<br>";

echo "7.)". "<br>";

	$a116 = array(4, 2, 5, 19, 13, 0, 10);
	$tt=0;
	foreach($a116 as $key){
		$tt += sqrt($key);	
	}
	//$b116=sqrt($tt);
	echo $tt."<br>";

echo "8.)". "<br>";
	$a117 = sqrt(379);
	echo round($a117)."<br>";
	echo round(sqrt(379), 1)."<br>"; #до десятых
	echo round(sqrt(379), 2)."<br>"; #до сотых

echo "9.)". "<br>";
	$a118 = floor(sqrt(587));
	$b118 = ceil(sqrt(587));
	$array118 = array("floor" => $a118, "ceil" => $b118);
	var_dump($array118);

echo "10.)". "<br>";
	$arr119 = array(4, -2, 5, 19, -130, 0, 10.);
	$b119 = min($arr119);
	$a119 = max($arr119);

	echo $a119. " ". $b119. "<br>";

echo "11.)". "<br>";
	$b120 = mt_rand(1, 100);
	echo $b120."<br>";

echo "12.)". "<br>";
	$randPic = mt_rand(1, 3);
	echo '<img width=60px src="pic/'.$randPic.'.jpg">'."<br>"; #рандомная картинка

echo "13.)". "<br>";
	$arr110 = array();

	for ($u=0; $u < 10; $u++) { 
		$arr110[] = mt_rand(1, 100);
	}
	var_dump($arr110);

echo "14.)". "<br>";
	$q = 2;
	$w = 4;
	$e = pow($q, $w);
	$r = sqrt($e);

	echo $r."<br>";
	echo sqrt(pow(3, 6))."<br>";
echo "15.)". "<br>";
	$t= 5;
	$y = 1;
	for ($o=1; $o <= $t; $o++) { 
		$y *= $o;
	}
	echo $y."<br>";

echo "16.)". "<br>";
	
echo "17.)". "<br>";
	$arr66 = array(12, 15, 20, 25, 59, 79);
	$b2 = 0;
	foreach ($arr66 as $key => $value) {
		$b2 += $value;
	}
	echo $b2 / count($arr66)."<br>";
#method 2
	$a4 = count($arr66);
	$a5 =array_sum($arr66)/$a4;
	
	echo $a5."<br>";

echo "18.)". "<br>";
echo "19.)". "<br>";
echo "20.)". "<br>";
echo "21.)". "<br>";


?>