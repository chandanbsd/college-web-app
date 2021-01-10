<?php include 'inc/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>BIT CLUBS PORTAL</title>
    <link rel = "stylesheet" href="css/journal.min.css">
    <!-- <link rel = "stylesheet" href="css/bootstrap.min.css">   -->
    <link rel = "stylesheet" href="css/styles.css">
</head>
<body>
<div class="jumbotron">
    <h2 class="page-header">Club Membership Form</h2>
    <form method="post" action="create.php">
        <!-- <div class="form-group">
            <label>Club</label>
            <input type="text" class="form-control" name="club">
        </div> -->
        <div class="form-group">
            <label>Club Name</label>
            <select  class="form-control" name="category">
            <option value ="0">Choose Club</option>
                <?php foreach($categories as $category): ?>
                    <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label>Enter USN</label>
            <input type="text" class="form-control" name="location">
        </div>
        <div class="form-group">
            <label>Enter Name:</label>
            <input type="text" class="form-control" name="event_title">
        </div>
         

        <div class="form-group">
            <label>Registration Fee</label>
            <input type="text" class="form-control" name="fee">
        </div>
        
        <div class="form-group">
            <label>Contact Email</label>
            <input type="text" class="form-control" name="contact_email">
        </div>
        <input type ="submit" class="btn btn-default" value="Submit" name="submit">
    </form>
</div>
<?php include 'inc/footer.php'; ?>
</body>
</html>