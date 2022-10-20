<?php include 'connection.php' ?>


<!-- Get dropdown data code -->
<?php

    

    $query = "select * from department";
    $rs = mysqli_query($con,$query);
    if(mysqli_num_rows($rs) > 0){
          while($data  = mysqli_fetch_array($rs)){
                
    ?>
            <option value="<?= $data['DepId']?>"><?= $data['DepName']?></option>
    <?php
            }
    }
    else{
?>
            <option>NO records Found</option>
    <?php
            
        }
    


?>
   