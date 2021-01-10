<?php include 'inc/header.php'; ?>
 <div class="jumbotron">
      <ul class = "list-group">

         <li class="list-group-item"><strong>Notification Type:</strong> <?php echo $event->category_id; ?></li>
        <li class="list-group-item"><strong>Title:</strong> <?php echo $event->event_title; ?></li>
        <li class="list-group-item"><strong>Description:</strong> <?php echo $event->description; ?></li>
       <!--  <li class="list-group-item"><strong>Category:</strong> <?php echo $event->
            club; ?></li> -->
             <li class="list-group-item"><strong>Department:</strong> <?php echo $event->
            dept; ?></li>
             <li class="list-group-item"><strong>Semester:</strong> <?php echo $event->
            sem; ?></li>
             <li class="list-group-item"><strong>Section:</strong> <?php echo $event->
            sec; ?></li>
        <li class="list-group-item"><strong>Coordinator:</strong> <?php echo $event->
            contact_user; ?></li>
        <li class="list-group-item"><strong>Contact Email:</strong> <?php echo $event->
            contact_email; ?></li>
    </ul>

    <a href="index.php">Go Back</a>
    <hr>
    Registered Students
     <div class="well">
        <form style ="display:inline;" method="post" action="register.php">
            <a class="btn btn-danger" style="color: white" href="registeredTable.php?category=<?php echo $event ->id?>">See List</a>
        </form>
    </div><hr>
    For Students
     <div class="well">
        <form style ="display:inline;" method="post" action="register.php">
            <a class="btn btn-danger" style="color: white" href="register.php?category=<?php echo $event ->id?>">Fill Deatils Here</a>
        </form>
    </div><hr>
    For Co-ordinators
    <div class="well">
        <a href = "edit.php?id=<?php echo $event->id; ?>" class="btn btn-danger">Edit</a>
        
        <form style ="display:inline;" method="post" action="event.php">
            <input type="hidden" name="del_id" value="<?php echo $event->id;
            ?>">
            <input type="submit" class="btn btn-danger" value="Delete">
        </form>
    </div>
</div>
<?php include 'inc/footer.php'; ?>