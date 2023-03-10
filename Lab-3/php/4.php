<?php

$num1 = 10;
$num2 = 100;
$num3 = 100;

if ($num1 >= $num2 && $num1 >= $num3) 
{
  echo"$num1  is the largest Number";
} 
elseif ($num2 >= $num1 && $num2 >= $num3) 
{
  echo "$num2 is the largest Number";
} 
else 
{
  echo "$num3  is the largest Number";
}
?>