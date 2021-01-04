<div class="container">
        <div class="header clearfix">
            <nav>
            <ul class="nav nav-pills pull-right">
                <li>
               <img src="templates/inc/bitlogo.jpg">
               </li>
                <li role="presentation" style="margin-top: 30px;margin-right: 10px"><a href="index.php">Home </a></li>
                <li role="presentation" style="margin-top: 30px;margin-right: 10px"><a href="create.php">Post Event</a></li>
                <li role="presentation" style="margin-top: 30px;margin-right: 10px;"><a href="login.php">Login</a></li>
                <li role="presentation" style="margin-top: 30px;margin-right: 10px;"><a href="logout.php">Logout</a></li>
            </ul>
            </nav>
                        <h3 class="text-muted"><?php echo "BIT CLUBS PORTAL"; ?></h3> 


<?php include_once 'config/init.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>BIT CLUBS PORTAL</title>
    <link rel = "stylesheet" href="css/journal.min.css">
    <link rel = "stylesheet" href="css/styles.css">
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
        header('location:index.php');
    }
}

?>


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
</div></div>
</body></html>