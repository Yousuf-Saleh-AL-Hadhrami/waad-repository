<?php 

date_default_timezone_set("Asia/Muscat");

echo date_default_timezone_get();

echo "<br>";

echo time();

echo"<br>";

$secondsAfterOneWeek = strtotime('+ 7 days', strtotime("24-02-2025"));

echo date("Y-m-d H:i:s", $secondsAfterOneWeek);

echo "<br>";

$years = floor(time() / 365 / 24 / 60 / 60) ;

echo $years;
echo "<br>";
echo "<hr>";

echo date("Y-m-d / l" , strtotime("1995-03-03"));

echo "<br>";
echo "<hr>";

$yourDateOfBirth = "2002-04-27";
$yourDateOfBirthInSeconds = strtotime($yourDateOfBirth);

// Difference in seconds
$difference = time() - $yourDateOfBirthInSeconds;

// Calculate age in years (including leap years)
$ageInYears = $difference / (365.25 * 24 * 60 * 60);  // Divide by the number of seconds in a year

// Calculate age in months (approximate)
$ageInMonths = $ageInYears * 12;  // 12 months per year

// Calculate age in days
$ageInDays = $difference / (24 * 60 * 60); // Convert seconds to days

echo "Your Age in Years = " . floor($ageInYears) . "<br>";
echo "Your Age in Months = " . floor($ageInMonths) . "<br>";
echo "Your Age in Days = " . floor($ageInDays) . "<br>";




