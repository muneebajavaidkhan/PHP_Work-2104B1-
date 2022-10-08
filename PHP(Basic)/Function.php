<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Simple Function</h3>
    <?php
    function Add()
    {
        $num1 = 90;
        $num2 = 80;
        $res = $num1 + $num2;
        echo "<p>$res</p>";
    }
    Add();
    ?>
    <h3>Parameterized Function</h3>
    <?php
    function Avg($n1, $n2, $n3)
    {
        $sum = $n1 + $n2 + $n3;
        $Avg = $sum / 3;

        echo "The Average Value is: $Avg <br>";
    }
    Avg(48, 90, 70);
    ?>
    <h3>Function With Default Values</h3>
    <?php
    function WithDefault($name, $Age = 12)
    {
        echo "Name is: $name and Age is $Age";
    }
    WithDefault('Abc', 18);
    echo '<br>';
    WithDefault('Xyz');
    ?>
    <h3>Return Value In Function</h3>
    <?php
    function Cube($num1)
    {
        $number = $num1 * $num1 * $num1;
        return $number;
    }
    $SaveVal = Cube(3);
    $res = $SaveVal + 4;
    echo "Cube of 3 is $SaveVal <br>";
    echo $res;
    ?>
    <h3>Function Pass By Value And Pass By Reference</h3>

    <?php
    function Val($num)
    {
        $num += 4;
        echo "Pass By Actual Value Res $num <br>";
        return $num;
    }
    $n = 10;
    val($n);
    echo "The orginal value is still $n <br>";

    function ref(&$num)
    {
        $num += 5;
        echo "Pass By Ref Value is $num <br>";
        return $num;
    }
    ref($n);
    echo "The orginal value change to  $n <br>";
    ?>
<h1>CYx</h1>
    <p>Something</p>
</body>
</html>