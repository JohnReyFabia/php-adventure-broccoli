<!-- 
    Write a program that takes a string as input and outputs the string with all vowels removed.
 -->

 <?php
    $input = readline ('Enter a String: ');
    $vowel = [a,e,i,o,u,A,E,I,O,U];

    $output = "";

    for ($i=0; $i <strlen ($input); $i++){
        if (!in_array($input[$i], $vowel)) {
            $output .= $input[$i];
        }
    }
    echo "Without the Vowel the String is $output";
 ?>