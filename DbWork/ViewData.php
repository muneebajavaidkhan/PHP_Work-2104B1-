<?php include 'header.php'; ?>
<?php include 'connection.php'; ?>

<?php
$querys = 'select * from students';
($res = mysqli_query($con, $querys)) or die('incorrect Query!!');
$rowCount = mysqli_num_rows($res);
?>

<!-- <form action = "" method = "get">
                <div class="input-group col-lg-6 container mb-5 mt-3">
                    <input type="text" class="form-control" placeholder="Search" name = "search">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary" name = "srch" >Search</button>
                        <a href="ViewData.php" class = "btn btn-primary ml-3">Reset</a>
                    </div>
                        
                </div>
                
            </form> -->

<?php if ($rowCount > 0) { ?>

<table class = "container table table-bordered ">

    <tr>
        <th>Name</th>
        <th>Education</th>
        <th>Fees</th>
        <th>Gender</th>
        <th>City</th>
        <th>Courses</th>
        <th></th>
    </tr>
    <?php while ($data = mysqli_fetch_assoc($res)) {
        echo '<tr>'; ?>       
                    <td><?= $data['StduentName'] ?></td>
                    <td><?= $data['Gender'] ?></td>
                    <td><?= $data['Education'] ?> </td>
                    <td><?= $data['Fees'] ?> </td>
                    <td><?= $data['City'] ?> </td>
                    <td><?= $data['Courses'] ?> </td>
                    <td><a href="Edit.php?id=<?= $data['StdId'] ?>" class = "btn btn-primary">Edit</a></td>
                     <td><a href="ViewData.php?Delid=<?= $data['StdId'] ?>" class = "btn btn-danger">Delete</a></td>
           
    <?php echo '</tr>';
    } ?>

</table>

<?php } else {echo '<p>No Records Found </p>';} 

    $DelID =  $_GET['Delid'];
        $query =  "delete from students where StdId = $DelID";

    $res = mysqli_query($con,$query);


    if ($res) {
        echo "<script> alert('Data Deleted')</script>";
    } else {
        echo "<script> alert('Data Deletion Failed') </script>";
    }
    

?>



<?php include 'footer.php'; ?>
