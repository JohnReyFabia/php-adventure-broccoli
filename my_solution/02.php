<!-- 
    Write a program that takes a string as input and outputs whether it is a palindrome.
-->

<?php
    $input = readline('Enter a String: ');

    $reversed = strrev($input);

    if ($input == $reversed)
    {
        echo "$input is a Palindrome.";
    }   
    else{
        echo "$input is not a Palindrome.";

    }
        

?>