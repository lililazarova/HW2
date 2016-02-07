<?php
header('Content-type:text/html;charset=utf-8');

$days="Неделя";

switch($days){
  case "Понеделник":echo"Работен ден!";break;
  case "Вторник":echo "Работен ден!";break;
  case "Сряда":echo "Работен ден!";break;
  case "Четвъртък":echo "Работен ден!";break;
  case "Петък":echo "Работен ден!";break;
  case "Събота":echo "Почивен ден!";break;
  case "Неделя":echo "Почивен ден!";break;
  default:echo "Unknown";break;
 }
?>