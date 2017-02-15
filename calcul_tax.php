<?php 
	$a = $_POST["money1"];

	$stavka = 137.80;
	$p = 5;
	

	function getSum($summ){
		global $a, $stavka, $p;
		$a = str_replace(" ", "", $a);
		if($a < $stavka * 30){
			if ($_POST["money1"] == true)
				echo "Вы платите только ставку, в размере: ".$stavka." грн!";
		}
		elseif ($a > $stavka * 30) {
			$diff = $a - $stavka;
			$proc = $diff * $p / 100;
			$result = $proc + $stavka;

			echo "Ваша сумма <b>".$a."</b> превшает минимум, и вам следует заплатить: <b>".$result."</b> грн!";
		}
		else{
			echo "Вы ввели не число";
		}
	}

	$b = $_POST["money2"];
	$stavka2 = 275.60;
	$p2 = 5;
	function getSum1($summ1){
		global $b, $stavka2, $p2;
		$b = str_replace(" ", "", $b);
		if($b < $stavka2 * 30){
			if ($_POST["money2"] == true)
				echo "Вы платите только ставку, в размере: ".$stavka2." грн!";
		}
		elseif ($b > $stavka2 * 30) {
			$diff2 = $b - $stavka2;
			$proc2 = $diff2 * $p2 / 100;
			$result2 = $proc2 + $stavka2;

			echo "Ваша сумма <b>".$b."</b> превшает минимум, и вам следует заплатить: <b>".$result2."</b> грн!";
		}
		else{
			echo "Вы ввели не число";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8"/>
	<style>
	.wrapper{
		width: 1200px;
		margin: 0 auto;
	}
	</style>
</head>
<body>
<div class="wrapper"> 
<h1>Калькулятр налога</h1>
<div class="block">
	<form method="post">
		<h2>Для платильщиков первой группы</h2>
		<p>
			<label for="numb">Введите вашу сумму:</label>
			<input type="text" name="money1">
		</p>
		<input type="submit" name="send" value="Узнать сумму">
		<p>
		<span>Результат:</span>
		<?php getSum($summ)?>
		</p>
	</form>
</div>
<div class="block">
	<form method="post">
		<h2>Для платильщиков второй группы</h2>
		<p>
			<label for="numb">Введите вашу сумму:</label>
			<input type="text" name="money2">
		</p>
		<input type="submit" name="send" value="Узнать сумму">
		<p>
		<span>Результат:</span>
		<?php getSum1($summ1)?>
		</p>
	</form>
</div>
</div>
</body>
</html>