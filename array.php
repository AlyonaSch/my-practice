<?php
   $array = array(1, 2, "string", 25.3);
   print_r($array);
   echo "<br>" . $array[2] . "<br>";
   
   $ar1[0] = "hello";
   $ar1[1] = "hi";
   $ar1[2] = "good morning";
   
   print_r($ar1);
   echo "<br/>";
   
   $ar2 = array(10, 11, 12, 13, 14, 15);
   print_r($ar2);
   echo '<br/>';
   echo "<br/>" . $ar2[2] + $ar2[3];
   
   // Ukraine = индекс, Kiev = значение,
   
   $index = array("Ukraine" => "Kiev");
   print_r($index);
   echo "<br>" . $index["Ukraine"];