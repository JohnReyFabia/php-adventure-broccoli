<!-- 
    Write a program that outputs the first n triangular numbers.
 -->

 <?php
 $input = readline ('Enter a maximum layer of a Triangular Number: ');
 $num = intval($input);

 for ($i = 1; $i <=$num; $i++ )
 {

    $trinum = $i * ($i+1 ) / 2;
    echo "$trinum \n";
 }



 
 ?>