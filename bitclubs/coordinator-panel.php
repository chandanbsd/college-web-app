
<?php
// first thing is to start session 
session_start();
// now to check if variable is true

if(!$_SESSION['anything'])
{
    header('location:login.php');
}
?>

<?php include_once 'config/init.php'; ?>


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
          .container 
          .jumbotron {
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
  }

  .btn-primary{
    width: 200px;
    margin-bottom: 10px;
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
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
</head>
<body>
 <div class="jumbotron">
<table style="width: 100%; text-align: center;">
<thead>
    <th>Coordinators Operations</th>
</thead>
<tbody>
  <tr>
      <td><a href="create.php" class="btn btn-primary">Post Notification</a></td>
    </tr>

    <tr>
      <td><a href="file-upload-download/index.php" class="btn btn-primary">Upload Files</a></td>
    </tr>
    
    
    <tr>
    <td><a href="logout.php" class="btn btn-primary">Logout</a></td>
    </tr>
</tbody>
</table>
</div>

</body>
</html>