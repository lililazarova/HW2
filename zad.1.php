<?php
$a=rand(0,180);
$b=rand(0,180);
$c=rand(0,180);

if($a+$b+$c<=180 && $a!=0 && $b!=0 && $c!=0){
	echo "You can draw a triangle!";
}else{
	echo "Error!Try adain!";
}
?> 
