<!-- 
    Write a program that takes an array of strings as input and outputs the longest string in the array.
 -->

 <?php
    $input = readline('Enter a LIST of string Seperated by a ",": ');
    $string = explode(",", $input);

    $longestString = "";

    foreach($string as $string){
        if (strlen ($string) > strlen($longestString) )
        {
    $longestString =$string;
        }

    }

    echo "The Longest String is $longestString";

 ?>