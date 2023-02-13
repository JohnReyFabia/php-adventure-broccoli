<!-- 
    Write a program that takes a string as input and outputs the number of words in the string.
 -->

 <?php
    $input = readline('Enter a Paragraph: ');
    $word = explode (" ",$input);

    $Count= count($word);

    echo " The Number of Words is $Count";

 
 ?>