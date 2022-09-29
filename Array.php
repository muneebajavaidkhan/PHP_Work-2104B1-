<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>ARRAY IN PHP</h3>

    <h1>Indexed Array</h1>
    <?php
    $color = ['blue', 'orange', 'Yellow', 'Red'];
    echo "<p>$color[0]</p>";

    echo '<pre>';
    print_r($color);
    echo '</pre>';

    //Array using Loop
    echo '<ul>';
    for ($i = 0; $i <= 3; $i++) {
        echo "<li>Array[$i] => $color[$i]</li>";
    }
    echo '</ul>';
    ?>

    <h3>ASSOCIATIVE ARRAY</h3>
    <?php
    $students = ['Name' => 'Abc', 'Age' => 12, 'Education' => 'Inter'];
    echo $students['Name'];

    echo '<pre>';
    print_r($students);
    echo '</pre>';

    foreach ($students as $key => $Val) {
        echo "Array[$key] => $Val <br>";
    }
    ?>

    <h3>MULTIDIMENSIONAL ARRAY Ex1</h3>

    <?php
    $stud = [
        ['Abc', 'Inter', 19],
        ['Xyz', 'Matric', 20],
        ['Efg', 'Graduate', 29],
    ];

    echo '<pre>';
    print_r($stud);
    echo '</pre>';

    for ($row = 0; $row < 3; $row++) {
        echo "<p> <b> Row Number $row </b></p>";
        echo '<ul>';
        for ($col = 0; $col < 3; $col++) {
            echo '<li>' . $stud[$row][$col] . '</li>';
        }
        echo '</ul>';
    }
    ?>

     <h3>MULTIDIMENSIONAL ARRAY Ex2</h3>

     <?php $Emp = [
         ['fahad', 'Graduate', 21, 25000],
         ['Sajid', 'Master', 22, 35000],
         ['Saud', 'Inter', 23, 15000],
         ['Ahmed', 'Mphill', 24, 45000],
         ['Zahid', 'Computer Science', 25, 55000],
     ]; ?>

     <table border = 1>
        <?php for ($row = 0; $row < 5; $row++) {
            echo '<tr>';
            echo "<th colspan = 8> Array[$row] </th>";
            echo '</tr>';
            echo '<tr>';
            for ($col = 0; $col < 4; $col++) {
                echo "<th>Array[$row][$col]</th>";
                echo '<td>' . $Emp[$row][$col] . '</td>';
            }
            echo '</tr>';
        } ?>
     
     </table>


     <table border = 1>
            <tr>
                <th>Name</th>
                <th>Education</th>
                <th>Age</th>
                <th>Salary</th>
            </tr>
            <?php foreach ($Emp as $row) {
                echo '<tr>';

                foreach ($row as $col) {
                    echo '<td>' . $col . '</td>';
                }
                echo '</tr>';
            } ?>
     
     </table>

</body>
</html>