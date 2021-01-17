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
                <li  style="margin-top: 30px;margin-right: 10px"><button class="btn btn-dark"><a href="downloads.php">Files</a></button></li>
                
                <li  style="margin-top: 30px;margin-right: 10px"><button class="btn btn-dark"><a href="../create.php">Post Event</a></button></li>
                <li role="presentation" style="margin-top: 30px;margin-right: 10px;"><button class="btn btn-dark"><a href="../login.php">Login</a></button></li>
                <li role="presentation" style="margin-top: 30px;margin-right: 10px;"><button class="btn btn-dark"><a href="../logout.php">Logout</a></button></li>
            </ul>

            </nav>
            <h3 class="text">BIT ONLINE NOTIFICATION BOARD AND EVENT REGISTRATION</h3> 

        </div>
<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Download files</title>
</head>
<body>
 <div class="jumbotron">
<table style="width: 100%; text-align: center;">
<thead>
    <th>ID</th>
    <th>Filename</th>
    <th>size (in mb)</th>
    <th>Downloads</th>
    <th>Action</th>
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['id']; ?></td>
      <td><?php echo $file['name']; ?></td>
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
      <td><?php echo $file['downloads']; ?></td>
      <td><a href="downloads.php?file_id=<?php echo $file['id'] ?>" class="btn btn-primary">Download</a></td>
    </tr>
  <?php endforeach;?>

</tbody>
</table>
</div>

</body>
</html>