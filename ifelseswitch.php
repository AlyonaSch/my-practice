<?php
// || - или 
// && - и 
$a = 25;
define("B", 23);

if($a < B){
	echo "hello";
}
elseif($a == B){
	echo "world";
}
else{
	echo "hi";
}

echo "<br/>";

switch($a){
	case 24:
	 echo "4";
	break;
	default:
	 echo "5";
	break;
}

switch($a):
	case 24:
	 echo "4";
	break;
	default:
	 echo "5";
	break;
endswitch;
}

switch($beer)
{
    case 'tuborg';
    case 'carlsberg';
    case 'heineken';
        echo 'Хороший выбор';
    break;
    default;
        echo 'Пожалуйста, сделайте новый выбор...';
    break;
}
?>