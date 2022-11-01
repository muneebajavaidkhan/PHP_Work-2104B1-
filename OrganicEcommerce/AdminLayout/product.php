<?php include  'header.php';?>
<?php include '../MainLayout/connection.php'; ?>

<!-- Content Start -->
<div class="content">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
        <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
            <h2 class="mb-0" style="color:#7fad39;"><i class="fa fa-hashtag"></i></h2>
        </a>
        <a href="#" class="sidebar-toggler flex-shrink-0">
            <i class="fa fa-bars" style="color:#7fad39;"></i>
        </a>
        <form class="d-none d-md-flex ms-4">
            <input class="form-control border-0" type="search" placeholder="Search">
        </form>
        <div class="navbar-nav align-items-center ms-auto">
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <i class="fa fa-envelope me-lg-2"></i>
                    <span class="d-none d-lg-inline-flex">Message</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                    <a href="#" class="dropdown-item">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle" src="assets/img/User-green.png" alt=""
                                style="width: 40px; height: 40px;">
                            <div class="ms-2">
                                <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                <small>15 minutes ago</small>
                            </div>
                        </div>
                    </a>
                    <hr class="dropdown-divider">
                    <a href="#" class="dropdown-item">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle" src="assets/img/User-green.png" alt=""
                                style="width: 40px; height: 40px;">
                            <div class="ms-2">
                                <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                <small>15 minutes ago</small>
                            </div>
                        </div>
                    </a>
                    <hr class="dropdown-divider">
                    <a href="#" class="dropdown-item">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle" src="assets/img/User-green.png" alt=""
                                style="width: 40px; height: 40px;">
                            <div class="ms-2">
                                <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                <small>15 minutes ago</small>
                            </div>
                        </div>
                    </a>
                    <hr class="dropdown-divider">
                    <a href="#" class="dropdown-item text-center">See all message</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <i class="fa fa-bell me-lg-2"></i>
                    <span class="d-none d-lg-inline-flex">Notificatin</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                    <a href="#" class="dropdown-item">
                        <h6 class="fw-normal mb-0">Profile updated</h6>
                        <small>15 minutes ago</small>
                    </a>
                    <hr class="dropdown-divider">
                    <a href="#" class="dropdown-item">
                        <h6 class="fw-normal mb-0">New user added</h6>
                        <small>15 minutes ago</small>
                    </a>
                    <hr class="dropdown-divider">
                    <a href="#" class="dropdown-item">
                        <h6 class="fw-normal mb-0">Password changed</h6>
                        <small>15 minutes ago</small>
                    </a>
                    <hr class="dropdown-divider">
                    <a href="#" class="dropdown-item text-center">See all notifications</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <img class="rounded-circle me-lg-2" src="assets/img/User-green.png" alt=""
                        style="width: 40px; height: 40px;">
                    <span class="d-none d-lg-inline-flex">John Doe</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                    <a href="#" class="dropdown-item">My Profile</a>
                    <a href="#" class="dropdown-item">Settings</a>
                    <a href="../MainLayout/logout.php" class="dropdown-item">Log Out</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <div class="container"> <br>
        <h3 class="mt-5">Product Data In DataBase</h3> <br>

        <form action="ProductCrud.php" method="post" enctype="multipart/form-data">

            <div class="row">


                <div class="col-sm-12 col-lg-6" style="margin-top:50px;">

                    <div class="form-group wrap-input1">
                        <label for="name">Product Name:</label>
                        <input type="text" class="form-control input1" id="name" placeholder="Enter Your Product Name"
                            name="name">
                    </div>
                    <div class="form-group wrap-input1">
                        <label for="name">Product Price:</label>
                        <input type="text" class="form-control input1" id="name" placeholder="Enter Your Product Price"
                            name="price">
                    </div>

                    <div class="form-group wrap-input1">
                        <label for="name">Select Category:</label>
                        <select class="form-control wrap-input1" id="cat" name="Category">
                        <option value="">--Select--</option>
                            <!-- Get dropdown data code -->

                            <?php
                                $query = "select * from category";
                                $rs = mysqli_query($con,$query);
                                if(mysqli_num_rows($rs) > 0){
                                    while($data  = mysqli_fetch_array($rs)){?>
                            <option value="<?= $data['categoryId']?>"><?= $data['categoryName']?></option>
                            <?php
                            }
                            }else{  ?>
                            <option>NO records Found</option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group wrap-input1">
                        <label for="name">Product Description:</label>
                        <input type="text" class="form-control input1" id="name"
                            placeholder="Enter Your Product Description" name="Proddesc">
                    </div>
                    <button type="submit" class="btn btn-success" name="ins">Submit</button>

                </div>
                <div class="col-sm-12 col-lg-4 ">
                    <div class="d-flex flex-column align-items-center text-center  user-profile-image">

                        <input class="form-control hidden" type="file" id="Pro_Image" name="uploaded"
                            style="visibility: hidden;" />

                        <img class="mt-5" style="width:250px;" src="assets/images/noImg.jpg" id="UserImage">
                        <div class="upload-photo text-center ">
                            <br />
                            <button type="button" class="btn btn-success"
                                onclick="document.getElementById('Pro_Image').click(); return false;">
                                <i class="fas fa-download"></i> Upload Image
                            </button>
                        </div>
                    </div>

                </div>
            </div>


        </form>
    </div>

</div>
<!-- Content End -->




<script>
$(document).ready(function() {


    //$("#upload-photos").click(function () {
    //    $("#BrowseImage").trigger('click')
    //})

    $("#UserImage").click(function() {
        $("#Pro_Image").trigger('click')
    })


    $("#Pro_Image").change(function() {
        if (this.files && this.files[0]) {
            var fileReader = new FileReader();
            fileReader.readAsDataURL(this.files[0]);
            fileReader.onload = function(x) {

                $("#UserImage").attr('src', x.target.result);
            }
        }
    })
})
</script>