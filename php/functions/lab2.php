<?php 

function calc(...$nums){

    $sum = 0;
    $avg = 0;
    $max = $nums[0];
    $min = $nums[0];

    for($i = 0 ; $i < count($nums); $i++){

        $sum = $sum + $nums[$i];

        $avg = $sum / count($nums); 

        if($nums[$i] > $max){

            $max = $nums[$i];
        }

        if($nums[$i] < $min){

            $min = $nums[$i];
        }
    }

    return "  Sum =      " . $sum . "<br>"
           ." Average = " . $avg . "<br>"
           ." Maximum = " . $max . "<br>"
           ." Minimum = " . $min . "<br>";



}



echo calc(2 , 15 , 21 , 1.5 , 6 , 2.5 , 63 , 4 , 8);