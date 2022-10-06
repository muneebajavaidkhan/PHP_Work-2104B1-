<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
</head>

<body>


<?php if (isset($_POST['btn'])) {
    echo $_FILES['fileupload']['name'] . '<br>';
    echo $_FILES['fileupload']['size'] . '<br>';
    echo $_FILES['fileupload']['tmp_name'] . '<br>';
    echo $_FILES['fileupload']['type'];

    $fn = $_FILES['fileupload']['name'];
    $temp = $_FILES['fileupload']['tmp_name'];

    $destination = 'images/';
    if (file_exists($destination.$fn)) {
        $message = 'file exist';
    } else {
        if (move_uploaded_file($temp, $destination.$fn)) {
            $message = 'file Upload';
        } else {
            $message = 'file not Upload';
        }
    }
} ?>

<div class="container">

	<div class="row">
    <div class="col-md-12">
    <form method="post" enctype="multipart/form-data">
    	<table class="table table-borderless">
        	<tr><td><h1>File Uploading Work</h1></td></tr>
        	<tr><td><input class="form-control" type="file" name="fileupload"/></td></tr>
            <tr><td><input class="btn btn-primary" type="submit" value="Upload" name="btn"/></td></tr>
             <tr><td> <?= @$message ?></td></tr>
        </table>    
    </form>   
    </div>  
  </div>
</div>
</body>
</html>