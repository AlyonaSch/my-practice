<?php 
	$a = $_POST["watt"];

	
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
<h1>Калькулятр электроэнергии</h1>
<div class="block">
	<form method="post">
		<h2>Расщитать оплату в этом месяце</h2>
		<p>
			<label for="numb">Введите вашу сумму:</label>
			<input type="text" name="watt">
		</p>
		<input type="submit" name="send" value="Узнать сумму">
		<p>
		<span>Результат:</span>
		<?php getSum($summ)?>
		</p>
	</form>
</div>
</div>
</body>
</html>