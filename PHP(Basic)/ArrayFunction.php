<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Sort Function Apply Index Array</h3>
<?php
$color = ['Blue', 'orange', 'Yellow', 'Red'];

sort($color);
rsort($color);

array_push($color, 'LightBlue');

array_pop($color);
$noOfElement = count($color);

echo $noOfElement;
//Array using Loop
echo '<ul>';
for ($i = 0; $i < $noOfElement; $i++) {
    echo "<li>Array[$i] => $color[$i]</li>";
}
echo '</ul>';
?>


<h3>ASSOCIATIVE ARRAY ASSENDING ORDER</h3>
    <?php
    $students = ['Name' => 'Abc', 'Age' => 12, 'Education' => 'Inter'];
    echo $students['Name'];

    asort($students);
    ksort($students);
    foreach ($students as $key => $Val) {
        echo "Array[$key] => $Val <br>";
    }
    ?>



    
<h3>ASSOCIATIVE ARRAY DESENDING ORDER</h3>
    <?php
    $students = ['Name' => 'Abc', 'Age' => 12, 'Education' => 'Inter'];
    echo $students['Name'];

    arsort($students);
    krsort($students);
    foreach ($students as $key => $Val) {
        echo "Array[$key] => $Val <br>";
    }
    ?>
</body>
</html>