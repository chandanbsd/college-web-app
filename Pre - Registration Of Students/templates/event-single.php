<?php include 'inc/header.php'; ?>

    <h2 class="page-header"><?php echo $event->event_title; ?> (<?php echo $event->
        location; ?>)</h2>
    <small>Posted By <?php echo $event->contact_user; ?> on <?php echo $event->
        post_date; ?></small>
    <hr>
    <p class ="lead"><?php echo $event->description; ?></p>
    <ul class = "list-group">
        <li class="list-group-item"><strong>club:</strong> <?php echo $event->
            club; ?></li>
        <li class="list-group-item"><strong>fee:</strong> <?php echo $event->
            fee; ?></li>
        <li class="list-group-item"><strong>Contact Email:</strong> <?php echo $event->
            contact_email; ?></li>
    </ul>
    <br><br>

    <a href="index.php">Go Back</a>
    <br><br><hr>
    For Students
     <div class="well">
        <form style ="display:inline;" method="post" action="register.php">
            <input type="submit" class="btn btn-danger" value="Register">
        </form>
    </div><hr>
    For Co-ordinators
    <div class="well">
        <a href = "edit.php?id=<?php echo $event->id; ?>" class="btn btn-default">Edit</a>
        
        <form style ="display:inline;" method="post" action="event.php">
            <input type="hidden" name="del_id" value="<?php echo $event->id;
            ?>">
            <input type="submit" class="btn btn-danger" value="Delete">
        </form>
    </div>


<?php include 'inc/footer.php'; ?>