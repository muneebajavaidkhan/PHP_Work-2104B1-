<?php include 'header.php'; ?>
<?php include 'connection.php'; ?>

<a href="home.php" class = "btn btn-primary m-5">INSERT MORE RECORDS</a>


<?php
$querys = 'select * from students';
if (isset($_GET['srch'])) {
    $search = $_GET['search'];
    $querys = "select * from students where  StduentName like '%$search%' or Education like '%$search%' 
    or Fees like  '%$search%' or Gender like '%$search%' or City like '%$search%' or Courses like '%$search%'";
}
($res = mysqli_query($con, $querys)) or die('incorrect Query!!');
$rowCount = mysqli_num_rows($res);
?>

<form action = "" method = "get">
                <div class="input-group col-lg-6 container mb-5 mt-3">
                    <input type="text" class="form-control" placeholder="Search" name = "search">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary" name = "srch" >Search</button>
                        <a href="ViewData.php" class = "btn btn-primary ml-3">Reset</a>
                    </div>
                        
                </div>
                
            </form>

<?php
if ($rowCount > 0) { ?>

<table class = "container table table-bordered mt-5">

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
                    <td><?= $data['Education'] ?> </td>
                    <td><?= $data['Fees'] ?> </td>
                    <td><?= $data['Gender'] ?></td>
                    <td><?= $data['City'] ?> </td>
                    <td><?= $data['Courses'] ?> </td>
                    <td><a href="Edit.php?id=<?= $data[
                        'StdId'
                    ] ?>" class = "btn btn-primary">Edit</a></td>
                     <td><a href="ViewData.php?Delid=<?= $data[
                         'StdId'
                     ] ?>" class = "btn btn-danger"
                     onclick = "return confirm('Are you sure you want to delete!!');return false;">Delete</a></td>
           
    <?php echo '</tr>';
    } ?>

</table>

<?php } else {echo '<p>No Records Found </p>';}
error_reporting(0);
$DelID = $_GET['Delid'];
$quer = "delete from students where StudId = $DelID";
$res = mysqli_query($con, $quer);
echo $res;
if ($res) {
    echo "<script>alert('Data Deleted!!');window.location.href = 'ViewData.php';</script>";
}
mysqli_close($con);
?>



<?php include 'footer.php'; ?>
