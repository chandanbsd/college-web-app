<?php include_once 'config/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>BIT EVENTS AND ACTIVITIES</title>
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

<!DOCTYPE html>
<html>
<head>
<style>
th, td {
}
</style>
</head>
<body>
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

            <footer class="footer">
  <p>Project By CHANDAN B.S.D and B.K. PARITOSH</p>
      </footer>


</body>
</html>