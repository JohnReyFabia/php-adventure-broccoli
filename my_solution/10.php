    <!-- 
    Write a program that takes an array of numbers as input and outputs the median of the numbers.
 -->
 <?php
    $input = readline('Enter a List of Number seperated by ",": ');
    $num = explode (",", $input);

    sort($num);
    $Count = count($num);

    $median = 0;

    if ($Count % 2 == 0) {
        $median = ($num[$Count / 2 - 1] + $num[$Count / 2]) / 2;
    } else {
        $median = $num[($Count - 1) / 2];
    }

    echo "The Median of the Number is $median"

 
 ?>
