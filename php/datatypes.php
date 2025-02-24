<?php 

$name = "Waad AL Rawahi";
$age = 20;
$salary = 90.5;
$countries = array("Oman","Saudi Arabia", "UAE"); // ["Oman","Saudi Arabia", "UAE"]
$status = false;
$address = null;

class Person {

}

$waad = new Person();

echo gettype($name);
echo "<br>";
echo gettype($age);
echo "<br>";
echo gettype($salary);
echo "<br>";
echo gettype($countries);
echo "<br>";
echo gettype($status);
echo "<br>";
echo gettype($address);
echo "<br>";
echo gettype($waad);
echo "<br>";