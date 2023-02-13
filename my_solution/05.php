<!-- 
    Write a program that takes an array of numbers as input and outputs the sum of the numbers.
 -->

 <?php
 $input = readline ('Enter a list of Numbers seperated by ",": ');
 $num1 = explode (",", $input);

 $sum = 0;

 foreach ($num1 as $num1)
 {
$sum += intval ($num1);

 }

 echo "The sum of all the number is $sum";
 
 ?>