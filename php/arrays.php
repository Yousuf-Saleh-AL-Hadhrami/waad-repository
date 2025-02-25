
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./../node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    
</body>
</html>
<?php 

// Indexed Array

$months = array(1,"aaa",3,4,5,true,7,null,9,10,11,12);

echo $months[1];
echo "<br>";
echo count($months);
echo "<br>";


// ===============================================================

// Associative Array 

$countries = [

    "om" => "Oman",
    "sa" => "Saudi Arabia",
    "uae" => "United Arab of Emarates",
    "qa" => "Qatar",
    "bh" => "Bharain",
    "kw" => "Kuwait",

];

$fruits_vegetables = [

     ["Banana"],["Apple","Cucumber","Qarrot"],["Orange","Tomatos", ["A","B","C"] ],
     ["Strawberry","Pear"],["Kiwi","Coconut"],["Watermelon"],
     ["Peach","Pomogranet"],["Onion","Garlic"],["Ginger","green chili"],

];

echo count($countries);
?>

<div class="ontainer">
<table class="table table-bordered table-striped text-center">
    <tr>
        <th>Key</th>
        <th>Value</th>
    </tr>

<?php

foreach($countries as $key => $value){

    echo "<tr>";
    echo "<td> $key </td>";
    echo "<td> $value </td>";
    echo "</tr>";
}

?>

</table>
</div>

 <?php 

 echo $fruits_vegetables[1][1];
 echo "<br>";
 echo $fruits_vegetables[2][2][1];
