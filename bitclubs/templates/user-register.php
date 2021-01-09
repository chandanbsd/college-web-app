<?php include 'inc/header.php'; ?>

    <h2 class="page-header">Student Registration to Event</h2>
    <?php

      $query = $_SERVER['QUERY_STRING'];
    parse_str($query, $params);
    $id = $params['category'];
    
    ?>

    <form method="post" action="register.php">
        <div class="form-group">
            <label>USN: </label>
            <input type="text" class="form-control" name="usn">
        </div>
        <div class="form-group">
            <label>Name: </label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label>Email: </label>
            <input type="text" class="form-control" name="email">
        </div>
        <input type="hidden"  name="category" value="<?php echo $id ?>">
        <input type ="submit" class="btn btn-default" value="Submit" name="submit">
    </form>

<?php include 'inc/footer.php'; ?>
