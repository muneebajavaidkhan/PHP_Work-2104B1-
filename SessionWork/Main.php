<?php session_start(); ?>
<?php include 'header.php'; ?>
<?php include 'connection.php'; ?>



<?php if (isset($_SESSION['db_Name'])) {
    echo 'Welcome ' . $_SESSION['db_Name'];
} else {
    header('location:login.php');
} ?>


<a href="logout.php" class = "btn btn-primary">logout</a>
