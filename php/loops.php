<?php

/*

1- for loop
2- while loop 
3- do while loop
4- foreach loop


*/

for($i = 1 ; $i < 11; $i++){

    echo $i . "<br>";
}

echo "<br>";

$x = 1;

while($x < 11 ){

     echo $x . "<br>";

     $x++;
}

$y = 1;

do{
    echo $y . "<br";

    $y++;

} while($y <= 10);

echo "<br>";


$names = [
    "Ali",
    "Salim",
    "Nasser",
    "Yousuf"
];

$names = [
    "name1" => "Ali",
    "name2" =>  "Salim",
    "name3" => "Nasser",
    "name4" => "Yousuf"
];

foreach($names as $value){

    echo $value . "<br>";
}

echo "<br>";


foreach($names as $key => $value){

    echo $key . " => ". $value . "<br>";
}


