<?php
$a = $_POST[number1];
$b = $_POST[number2];
$rr = $_POST[send];
$tt = $_POST[send2];

function getNum($num){
		global $a, $b, $rr, $tt;

		if($rr){	
		
			$c = range($a, $b);
			
			$d = array_rand($c);	
			return $d;	
			break;
		}
		 elseif($tt){
			unset($a); 
			unset($b); 
			unset($d);
			unset($c);
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
</head>
<body>
	<div>
		<form class="subform" method="post">
			<p>
				<label for="nubmber">Write youe number1</label>
				<input type="text" name="number1">
			</p>
			<p>
				<label for="nubmber">Write youe number2</label>
				<input type="text" name="number2">
			</p>
			<input type="submit" name="send">
			<input type="reset" name="send2" value="clear">
			<h2>Your reult: <?php echo getNum($num); ?></h2>
		</form>
	</div>
</body>
</html>