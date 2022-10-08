<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

echo "<h1>Operators in php</h1>";
echo "<h3>1. Arithematic operators</h3>";

$num1 = 4.5;
$num2=2;

echo "Addition result is <b>".($num1+$num2)."</b><br>";
echo "Subtraction result is <b>".($num1-$num2)."</b><br>";
echo "Multiplication result is <b>".($num1*$num2)."</b><br>";
echo "Division result is <b>".($num1/$num2)."</b><br>";
echo "Modulus result is <b>".($num1%$num2)."</b><br>";




echo "<h3>2. Assignment operators</h3>";
$x=10;
$y=30;
$z=100;

echo "Actual x value is $x and Acutal y value is $y <br>";
echo "Equal operator ".$z."<br>";
echo "$x += $y is ".($x+=$y)."<br>"; //$x = $x + $y OR $x+= $y
echo "$x -= $y is ".($x-=$y)."<br>";
echo "$x *= $y is ".($x*=$y)."<br>";
echo "$x /= $y is ".($x/=$y)."<br>";
echo "$x %= $y is ".($x%=$y)."<br>";

echo "<h3>3. Comparison operators</h3>";

$i = 23;
$j = 10;

var_dump($i == $j); echo "$i == $j --> equal <br>"; //

var_dump($i === $j); echo "$i === $j --> identical <br>";
var_dump($i != $j); echo "$i != $j --> not equal <br>";
var_dump($i <> $j); echo "$i <> $j --> not equal <br>";
var_dump($i !== $j); echo "$i !== $j --> not identical <br>";




var_dump($i > $j); echo "$i > $j --> greater then <br>";
var_dump($j < $i); echo "$j < $i --> less then  <br>";
var_dump($i >= $j); echo "$i >= $j --> greater then equal to <br>";
var_dump($j <= $i); echo "$j <= $i --> less then equal to <br>";


echo "<p>1. Logical operator</p>";

$a = 10;
$b = 20;

var_dump($a >= 150 && $b <= 100); //false && true = false
var_dump($a == 70 || $b != 30); // false || true = true
var_dump($a >= 150 and $b <= 100);
var_dump($a == 70 or $b != 30);


echo "<br>";

?>




</body>
</html>