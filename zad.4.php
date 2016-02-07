<?php

$a = (50*0.10)+(50*0.10)*20/100;
$b = (150*0.15)+(150*0.15)*20/100;
$c = (250*0.25)+(250*0.25)*20/100;
$d = ('kw'*0.35)+('kw'*0.35)*20/100;
$sum=$a+$b;
$sum1=$a+$b+$c;
$sum2=$a+$b+$c+$d;


if ($sum2=$sum1){
	echo "You can pay $sum1 lv.<br>";
} else {
	echo "Your bill is calculated ...";
		}
?>
