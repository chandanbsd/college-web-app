<?php include_once 'config/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>BIT ONLINE NOTIFICATION BOARD AND EVENT REGISTRATION</title>
    <link rel = "stylesheet" href="css/journal.min.css">
    <!-- <link rel = "stylesheet" href="css/bootstrap.min.css">   -->
    <link rel = "stylesheet" href="css/styles.css">
    <style type="text/css">
          body{
            background-color: #006400;
            color: black;
          }
          *{
            color: black;
          }
      </style>
</head>

<body>
    <div class="container">
        <div class="header clearfix">
            <nav>
            <ul class="nav nav-pills pull-right">
                <li>
               <img src="templates/inc/bitlogo.jpg">
               </li>
                <li role="presentation" style="margin-top: 30px;margin-right: 10px"><button class="btn btn-dark"><a href="index.php">Home </a></button></li>
                <li  style="margin-top: 30px;margin-right: 10px"><button class="btn btn-dark"><a href="create.php">Post Event</a></button></li>
                <li role="presentation" style="margin-top: 30px;margin-right: 10px;"><button class="btn btn-dark"><a href="login.php">Login</a></button></li>
                <li role="presentation" style="margin-top: 30px;margin-right: 10px;"><button class="btn btn-dark"><a href="logout.php">Logout</a></button></li>
            </ul>


            </nav>
            <h3 class="text"><?php echo SITE_TITLE; ?></h3> 

        </div>

<!DOCTYPE html>
<html>
<head>
<style>
th, td {
}
</style>
</head>
<body>
     <div class="jumbotron">
<?php
$query = $_SERVER['QUERY_STRING'];
parse_str($query, $params);
$id = $params['category'];

$sql = "SELECT usn, name, email FROM registrations where id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>USN</th><th>Name</th><th>Email</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["usn"]. "</td><td>" . $row["name"]. "</td><td>" . $row["email"]. "</td></tr>";
    }
    echo "</table>";
} 
else {
    echo "0 results";
}
?>
</div>
            <footer class="footer">
  <p>Project By CHANDAN B.S.D and B.K. PARITOSH</p>
      </footer>


</body>
</html>