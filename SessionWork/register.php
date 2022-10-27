<?php include 'header.php'; ?>
<?php include 'connection.php'; ?>




    
<div class = 'container mt-5'>

        
                <H1 class =  "text-center">REGISTRATION FORM</H1>
                <form action="register.php" method = "post">
                    <div class="row mt-5">

                        <div class="col-sm-12 col-lg-6 ">
                            <img src="images/img1.jpg" alt="dummyImage" style = "width:350px;height:280px;margin-left:95px">
                        </div>

                        <div class="col-sm-12 col-lg-6 mt-5">

                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter Your name" name="name" required>
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone Number:</label>
                                <input type="text" class="form-control" id="phone" placeholder="Enter Your Phone Number" name="Phone" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter Your Email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="Pass">Password:</label>
                                <input type="password" class="form-control" id="Pass" placeholder="Enter Your Password" name="Pass" required>
                            </div>
                            <div class="form-group">
                                <label for="Confpass">Confirm Password:</label>
                                <input type="password" class="form-control" id="Confpass" placeholder="Enter Your Confirm Password" name="ConfPass" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" value = "Create Account" class = "btn btn-primary" name = "btn">
                            </div>
                            <p class = "text-center">Already Have an Account <a href="login.php">Login</a></p>
                        </div>

                    </div>
                  
                </form>


         

</div>


<?php if (isset($_POST['btn'])) {
    $Name = $_POST['name'];
    $PhoneNum = $_POST['Phone'];
    $Email = $_POST['email'];
    $Password = $_POST['Pass'];
    $ConfPass = $_POST['ConfPass'];
    $Pass = password_hash($Password, PASSWORD_BCRYPT);
    $CPass = password_hash($ConfPass, PASSWORD_BCRYPT);
    $Emailquery = "select * from register where Email = '$Email'";
    $res = mysqli_query($con, $Emailquery);
    if (mysqli_num_rows($res) > 0) {
        echo "<script>alert('Email Already Exist')</script>";
    } else {
        if ($Password === $ConfPass) {
            $Insquery = "insert into register (Name,Email,Password,ConfPassword,Phone) values ('$Name','$Email','$Pass','$CPass','$PhoneNum')";
            $rs = mysqli_query($con, $Insquery);
            if ($rs) {
                echo "<script>alert('Data Inserted')</script>";
            } else {
                echo "<script>alert('Data not Inserted')</script>";
            }
        } else {
            echo "<script>alert('Password not match')</script>";
        }
    }
} ?>













