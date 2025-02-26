<?php 

declare(strict_types = 1); // يقوم بالتحقق الصارم من مدخلات الدوال يجب أن تكون من نفس النوع

function add(int $x , int $y = 5 , float $z = 2): mixed  // Parameters
{
      return $x + $y + $z;

      $y++; // لا يتنفذ الكود بعد كلمة return  
}

$value = add(5 , 8 , 6.3);

$value + 20;

echo $value;

echo "<br>";

echo strlen(" waadaaa ?");