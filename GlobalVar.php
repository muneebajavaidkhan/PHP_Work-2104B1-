<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


</head>
<body>

<div class =  "container mt-5">

    <form action = "GlobalVar.php" method = "post">
        <input type="text" placeholder = "Enter your Email" name = "email" class = "form-control"> 

        <input type="text" placeholder = "Enter your Password" name = "Pass" class = "form-control"> 

         <input type="submit" value = "submit" name = "btn" class = "btn btn-primary">

    </form>

</div>


<?php

if(isset($_POST['btn'])){

    $result1 = $_POST['email'];
    $result2 = $_POST['Pass'];

   
}

 
?>
<p>Email:   <?=  $result1 ?></p>
<p>Password:   <?=  $result2 ?></p>

    
</body>
</html>