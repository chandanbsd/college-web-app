 <!DOCTYPE html>
<html lang="en">
<head>
    <title>BIT ONLINE NOTIFICATION BOARD AND EVENT REGISTRATION</title>
    <link rel = "stylesheet" href="css/journal.min.css">
    <!-- <link rel = "stylesheet" href="css/bootstrap.min.css">   -->
    <link rel = "stylesheet" href="css/styles.css">
    <style type="text/css">
          body{
            /*background-color: #006400;*/
            color: black;
            background-color: #64e764;
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
               <img src="templates/inc/bitlogo.jpg">
               </li>
                <li role="presentation" style="margin-top: 30px;margin-right: 10px"><button class="btn btn-dark"><a href="index.php">Home </a></button></li>
                <li  style="margin-top: 30px;margin-right: 10px"><button class="btn btn-dark"><a href="file-upload-download/downloads.php">Files</a></button></li>
                <li role="presentation" style="margin-top: 30px;margin-right: 10px;"><button class="btn btn-dark"><a href="coordinator-panel.php">Coordinator Section</a></button></li>
            </ul>


            </nav>
            <h3 class="text">BIT ONLINE NOTIFICATION BOARD AND EVENT REGISTRATION</h3> 

        </div>
<?php include_once 'config/init.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>BIT ONLINE NOTIFICATION BOARD AND EVENT REGISTRATION</title>
    <link rel = "stylesheet" href="css/journal.min.css">
    <link rel = "stylesheet" href="css/styles.css">
  <style type="text/css">
          body{
            background-color: #006400;
            color: black;
            background-color: #64e764;
          }
          *{
            color: black;
          }
      </style>
</head>
<body>
<?php


if($_POST)
{
    include 'config/config.php';
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sUser=mysqli_real_escape_string($conn,$username);
    $sPass=mysqli_real_escape_string($conn,$password);
    // For Security 
    $query="SELECT * From users where username='$sUser' and password='$sPass'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1)
    {
        session_start();
        $_SESSION['anything']='something';
        header('location:coordinator-panel.php');
    }
}

?>

 <div class="jumbotron">
<div class="container">
<form method="POST">
  
    <div class="form-group">
            <label>Enter Username:</label>
            <input type="text" class="form-control" name="username" width="200px">
    </div>

    <div class="form-group">
            <label>Enter Password</label>
            <input type="password" class="form-control" name="password">
             <input type ="submit" class="btn btn-default" value="Submit" name="submit">
    </div>
   
</form>
</div>
</div>

            <footer class="footer">
  <p>Project By CHANDAN B.S.D and B.K. PARITOSH</p>
      </footer>

    </body>
</html>
