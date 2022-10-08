<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>WHILE LOOP</h3>
    <form action="Loop.php" method = "post">
        <input type="number" name = "num" placeholder = "Enter your num">
        <input type="Submit" value = "Submit" name = "ChckNum">


    </form>

    <?php
        if(isset($_POST["ChckNum"]))
        {

            $number = $_POST["num"];

            $i = 1;
            while($i < 10){
                $res = $number * $i;
                echo "$number + $i = $res <br>";

                $i++;
            }
        }
    ?>

    <h3>For Loop</h3>

    <form action="Loop.php" method = "post">
        <input type="number" name = "num1" placeholder = "Enter your num">
        <input type="number" name = "num2" placeholder = "Enter your num">
        <input type="number" name = "numIte" placeholder = "Enter your num of Iteration">

        <input type="Submit" value = "Submit" name = "FibNum">
    </form>
<?php
 if(isset($_POST["FibNum"])){
     $number1 = $_POST['num1'];
     $number2 = $_POST['num2'];
     $iteration = $_POST['numIte'];

     echo "$number1 <br>";
     echo "$number2 <br>";

     for($i = 0;$i < $iteration;$i++)
     {

        $number3 = $number1 + $number2;
        $number1 = $number2;
        $number2 = $number3;

        echo "$number3 <br>";
     }
 }

?>
    
</body>
</html>