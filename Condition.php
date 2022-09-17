<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>IF ELSE CONDITION</h3>

    <?php
        $side = 28.46;
        $perimeter = $side * 4.00;
        $area = $side * $side;

        if($side < 15 && $perimeter < 1000){

            $sidevalue = $side;
            $perimetervalue = $perimeter;
            $areavalue = $area;
        }
        else{
            $sidevalue = 0;
            $perimetervalue = 0;
            $areavalue = 0;
        }
    ?>

    <table border = 1>
        <tr>
            <td>Side: </td>
            <td>
                <input type="text" value = "<?= $sidevalue ?>">
             </td>
        </tr>
        <tr>
            <td>perimeter: </td>
            <td>
                <input type="text" value = "<?= $perimetervalue ?>">
             </td>
        </tr>
        <tr>
            <td>Area: </td>
            <td>
                <input type="text" value = "<?= $areavalue ?>">
             </td>
        </tr>
    </table>
</body>
</html>