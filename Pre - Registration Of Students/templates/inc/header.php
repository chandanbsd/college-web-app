<!DOCTYPE html>
<html lang="en">
<head>
    <title>BIT CLUBS PORTAL</title>
    <link rel = "stylesheet" href="css/journal.min.css">
    <!-- <link rel = "stylesheet" href="css/bootstrap.min.css">   -->
    <link rel = "stylesheet" href="css/styles.css">
</head>
<body>
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
            <h3 class="text-muted"><?php echo SITE_TITLE; ?></h3> 

        </div>
   <?php displayMessage();?>
