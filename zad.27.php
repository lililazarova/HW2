<?php
header('Content-Type: text/html; charset=utf-8');
$number='12';
switch($number){
	case "1":echo "January";break;
	case "2":echo "Februay";break;
	case "3":echo "March";break;
	case "4":echo "April";break;
	case "5":echo "May";break;
	case "6":echo "June";break;
	case "7":echo "Jaly";break;
	case "8":echo "August";break;
	case "9":echo "September";break;
	case "10":echo "October";break;
	case "11":echo "November";break;
	case "12":echo "December";break;
	default: echo 'Unknown';break;
} 
?>