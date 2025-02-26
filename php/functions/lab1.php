<?php 


function Arabic_days($englishDay) {

    $weekDaysInArabic = [
        "Sunday"    => "الأحد",    // Sunday
        "Monday"    => "الإثنين",  // Monday
        "Tuesday"   => "الثلاثاء", // Tuesday
        "Wednesday" => "الأربعاء", // Wednesday
        "Thursday"  => "الخميس",   // Thursday
        "Friday"    => "الجمعة",   // Friday
        "Saturday"  => "السبت"     // Saturday
    ];

    // Check if the provided English day exists in the array
    if(array_key_exists($englishDay, $weekDaysInArabic)) {
        return $weekDaysInArabic[$englishDay];
    } else {
        // Return a default message or handle the error if day is invalid
        return "Invalid day"; // Or you can return null or an error message
    }
}


function manage_date($date , $days , $operation = "add" ){

    if($operation != "add" && $operation != "sub" ){

        return "Operation is Invalid";
    }

    $dateInSeconds = strtotime($date);

    if($operation == "add"){
        $dateInSeconds = strtotime("+ $days days", $dateInSeconds);
    } else {
        $dateInSeconds = strtotime("- $days days", $dateInSeconds);
    }

    // Get the English day of the week
    $englishDay = date("l", $dateInSeconds);

    // Return the formatted date with Arabic day
    return date("Y-m-d / [ l ] " . Arabic_days($englishDay), $dateInSeconds);

}


echo manage_date("1980-05-15", 5 , "add");