<?php 


function numbers(...$numbers){

    $sum = 0;

    foreach($numbers as $value){

          $sum += $value;
    }

    return $sum;

}


echo numbers(2,6,7,15,77,5,4,5);