<?php include 'header.php'?>
<?php include '../MainLayout/connection.php'; ?>


<!-- Data Insert Code -->
<?php if (isset($_POST['ins'])) {
    $Name = $_POST['name'];
    
    $FileProp = $_FILES['uploaded'];
        // echo '<pre>';
        //     print_r($FileProp);
        // echo '</pre>';
        $FileName = $_FILES['uploaded']['name'];
        $FileType = $_FILES['uploaded']['type'];
        $FileTempLoc = $_FILES['uploaded']['tmp_name'];
        $FileSize  = $_FILES['uploaded']['size'];

        $folder = "assets/images/";
       
    
    if(strtolower($FileType) == "image/jpeg" || strtolower($FileType) == "image/jpg" || strtolower($FileType) == "image/png"){
             
        if($FileSize <= 1000000){ //1MB likha hai bytes mai convert kar k

                $folder = $folder.$FileName;
                $query = "insert into category (categoryName,categoryImg) values ('$Name','$folder')";
                $res = mysqli_query($con, $query);
                if ($res) {
                    echo "<script>alert('Data Inserted Successfully');window.location.href = 'CategoryView.php';</script>";
                    move_uploaded_file($FileTempLoc,$folder);

                
                } else {
                    echo "<script>alert('Data Insertion Failed')</script>";
                }

             
         }   

         else{
            echo "<script>alert('Image should be less than 1MB !! ');window.location.href = 'ViewData.php';</script>";

         }
    }
    else{
        echo "<script>alert('Image Formate not supported!! ');window.location.href = 'ViewData.php';</script>";
    }
    
} ?>



<!-- Data Updated Code -->


<?php

if (isset($_POST['Upd'])) {

    $CatId = $_POST['CatId'];
    $Name = $_POST['name'];
    


    $FileProp = $_FILES['uploaded'];
        // echo '<pre>';
        //     print_r($FileProp);
        // echo '</pre>';
        $FileName = $_FILES['uploaded']['name'];
        $FileType = $_FILES['uploaded']['type'];
        $FileTempLoc = $_FILES['uploaded']['tmp_name'];
        $FileSize  = $_FILES['uploaded']['size'];

        $folder = "assets/images/";




    if(is_uploaded_file($_FILES['uploaded']['tmp_name'])){

        if(strtolower($FileType) == "image/jpeg" || strtolower($FileType) == "image/jpg" || strtolower($FileType) == "image/png"){
             
            if($FileSize <= 1000000){ //1MB likha hai bytes mai convert kar k
    
                    $folder = $folder.$FileName;
                    $query = "update category set categoryName = '$Name',categoryImg = '$folder' where categoryId  = '$CatId'";
                    $res = mysqli_query($con, $query);
                    if ($res) {
                        echo "<script>alert('Data Updated Successfully');window.location.href = 'CategoryView.php';</script>";
                        move_uploaded_file($FileTempLoc,$folder);
    
                    
                    } else {
                        echo "<script>alert('Data Updation Failed');window.location.href  = 'CategoryView.php';</script>";
                    }
    
                 
             }   
    
             else{
                echo "<script>alert('Image should be less than 1MB !! ')</script>";
    
             }
        }
        else{
            echo "<script>alert('Image Formate not supported!! ')</script>";
        }
    }
    else{
        $query = "update category set categoryName = '$Name' where categoryId  = '$CatId'";

         echo $query;
        $res = mysqli_query($con, $query);
        if ($res) {
            
            move_uploaded_file($FileTempLoc,$folder);
            echo "<script>alert('Data Updated Successfully');window.location.href = 'CategoryView.php';</script>";
            
        } else {
            echo "<script>alert('Data Updation Failed');window.location.href = 'CategoryView.php'</script>";
        }

    }

}

