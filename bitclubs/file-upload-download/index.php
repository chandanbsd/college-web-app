<!DOCTYPE html>
<html lang="en">
<head>
    <title>BIT ONLINE NOTIFICATION BOARD AND EVENT REGISTRATION</title>
    <link rel = "stylesheet" href="css/journal.min.css">
    <style type="text/css">
          body{
            background-color: #006400;
            color: black;
          }
          *{
            color: black;
          }
          .container .jumbotron {

  text-align: left;
}
      </style>
</head>

<body>
    <div class="container">
        <div class="header clearfix">
            <nav>
          <ul class="nav nav-pills pull-right" >
                <li style="margin-right: 10px">
               <img src="../templates/inc/bitlogo.jpg">
               </li>
                <li role="presentation" style="margin-top: 30px;margin-right: 10px"><button class="btn btn-dark"><a href="../index.php">Home </a></button></li>
                <li  style="margin-top: 30px;margin-right: 10px"><button class="btn btn-dark"><a href="file-upload-download/downloads.php">Files</a></button></li>
                
                <li  style="margin-top: 30px;margin-right: 10px"><button class="btn btn-dark"><a href="../create.php">Post Event</a></button></li>
                <li role="presentation" style="margin-top: 30px;margin-right: 10px;"><button class="btn btn-dark"><a href="../login.php">Login</a></button></li>
                <li role="presentation" style="margin-top: 30px;margin-right: 10px;"><button class="btn btn-dark"><a href="../logout.php">Logout</a></button></li>
            </ul>


            </nav>
            <h3 class="text">BIT ONLINE NOTIFICATION BOARD AND EVENT REGISTRATION</h3> 

        </div>

<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <link rel="stylesheet" href="style.css">
    <title>Files Upload and Download</title>
  </head>

  <body>

<div class="jumbotron" >
    <div class="container">
      <div class="row">
        
        <form action="index.php" method="post" enctype="multipart/form-data" >
          <h3>Upload File</h3>
          <input type="file" name="myfile"> <br>
          <button type="submit" class="btn btn-primary" name="save">upload</button>
        </form>
      </div>
    </div>
  </div>
  </body>
</html>