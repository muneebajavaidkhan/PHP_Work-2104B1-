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
    <h3>ASSOCIATIVE ARRAY WITH MULTIDIMENSIONAL</h3>
    <?php
    $StudentMarks = [
        'Student1' => ['PHP' => 70, 'MVC' => 80, 'JS' => 90],
        'Student2' => ['PHP' => 90, 'MVC' => 85, 'JS' => 98],
        'Student3' => ['PHP' => 80, 'MVC' => 50, 'JS' => 70],
    ];

    echo '<pre>';
    print_r($StudentMarks);
    echo '</pre>';
    ?>

    <table border = 1>
        <?php foreach ($StudentMarks as $key => $Val) {
            echo '<tr>';
            echo "<th colspan = 6>$key</th>";
            echo '</tr>';
            echo '<tr>';
            foreach ($Val as $key2 => $V2) {
                echo "<th>Student[$key2]</th>";
                echo "<td>  $V2 </td>";
            }
            echo '</tr>';
        } ?>
    </table>

</body>
</html>