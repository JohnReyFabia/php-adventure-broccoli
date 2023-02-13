<!-- 
   Write a program that takes a character as input and outputs whether it is a vowel or a consonant.
//-->

<?php
    
    $output = readline('enter the Character: ');

    if (
          $output == 'a' || $output == 'e' || $output=='i' || $output == 'o' || $output == 'u' 
        ||$output == 'A' || $output == 'E' || $output=='I' || $output == 'O' || $output == 'U'
    )
       { 
        echo "$output  is Vowel";
       }
        
        else{
            echo "$output is Consonant";
        }
    
    






?>