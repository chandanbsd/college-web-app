<!DOCTYPE html>
<html lang="en">
<head>
    <title>BIT ONLINE NOTIFICATION BOARD AND EVENT REGISTRATION</title>
    <link rel = "stylesheet" href="css/journal.min.css">
    <style type="text/css">
          body{
            background-color: #006400;
            color: black;
            background-color: #64e764;
          }
          *{
            color: black;
          }
          .container .jumbotron {

  text-align: left;
}
 @media (min-width: 768px) {
    .container {
      max-width: 730px;
    }
  }
  @media screen and (min-width: 768px) {
    /* Remove the padding we set earlier */
    .header,
    .marketing,
    .footer {
      padding-right: 0;
      padding-left: 0;
    }
    .header {
      margin-bottom: 30px;
    }
    .jumbotron {
      border-bottom: 0;
    }
  }
body {
    padding-top: 20px;
    padding-bottom: 20px;
  }   </style>
</head>

<body>
    <div class="container">
        <div class="header clearfix">
            <nav>
              <ul class="nav nav-pills pull-right" >
                <li style="margin-right: 10px">
               <img src="../templates/inc/bitlogo.jpg">
               </li>
                <li role="presentation" style="margin-top: 30px;margin-right: 10px"><button class="btn btn-dark"><a href="../index.php">Home</a></button></li>
                <li  style="margin-top: 30px;margin-right: 10px"><button class="btn btn-dark"><a href="downloads.php">Files</a></button></li>
                <li role="presentation" style="margin-top: 30px;margin-right: 10px;"><button class="btn btn-dark"><a href="../coordinator-panel.php">Coordinator Section</a></button></li>
            </nav>
            <h3 class="text">BIT ONLINE NOTIFICATION BOARD AND EVENT REGISTRATION</h3> 

        </div>

<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>

<div class="jumbotron"  >
        
        <form action="index.php" method="post" enctype="multipart/form-data" style="width: 75%;">
          <h3>Upload File</h3>
          <input type="file" name="myfile"> <br>
          <button type="submit" class="btn btn-primary" name="save">upload</button>
        </form>
      </div>
    </div>
  </div>
  </body>
</html>