<?php include 'header.php'; ?>

<?php include 'connection.php'; ?>


<?php if (isset($_POST['ins'])) {
    
    $Name = $_POST['name'];
    $Gender = $_POST['gen'];
    $City = $_POST['city'];
    $Education = $_POST['edu'];
    $Fees = $_POST['fee'];

    $Course = $_POST['Course'];

    $Cor = implode(',', $Course);

    $query = " insert into students(StduentName,Gender,Education,Fees,City,Courses) values ('$Name','$Gender','$Education','$Fees','$City','$Cor')";

    $res = mysqli_query($con, $query);

    if ($res) {
       
        echo "<script> alert('Data Inserted');window.location.href = 'ViewData.php';</script>";
    } else {
        echo "<script> alert('Data Insertion Failed') </script>";
    }
} ?>

<?php include 'footer.php'; ?>
