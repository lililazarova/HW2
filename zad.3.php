<?php
header('Content-Type: text/html; charset=utf-8');
$n=rand( 0,1000);


echo ' n = ' . $n;

	if($n%3==0 && $n%35==0){
		echo "Дели се едновременно на 3,5 и 7";	
	}elseif ($n%3==0 && $n%7==0){
		echo "Дели се едновременно на 3 и 7";
	}elseif ($n%5==0 && $n%7==0){
		echo "Дели се едновременно на 5 и 7";
	}elseif ($n%5==0 && $n%3==0){
		echo "Дели се едновременно на 3 и 5";
	}elseif ($n%3==0) {
		echo "Дели се на 3.";
	}elseif ($n%5==0) {
		echo "Дели се на 5.";
	}elseif ($n%7==0) {
		echo "Дели се на 7.";
	}else {
		echo "Не се дели на 3, 5 и 7.";
	}
?>
