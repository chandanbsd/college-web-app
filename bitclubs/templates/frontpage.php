<?php include 'inc/header.php'; ?>

      <div class="jumbotron">
        <h1>Search For Notification</h1>
        <form method="GET action=index.php">
            <!-- <select name="category" class="form-control">
                <option value ="0">Choose Type</option>
                <option value="0">Administrative</option>
                <option value="1">Academic</option>
                <option value="2">Events</option>
                <option value ="0">All Categories</option>
                
                <?php foreach($categories as $category): ?>
                    <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                 <?php endforeach; ?>
            </select>
            <br> -->
        <div class="form-group">
            <label>Department Name</label>
            <select  class="form-control" name="dept">
            <option value ="0">Choose Department</option>
                <option value="ALL">ALL</option>
                <option value="CSE">CSE</option>
                <option value="ISE">ISE</option>
                <option value="EEE">EEE</option>
                <option value="ECE">ECE</option>
                <option value="CIVIL">CIVIL</option>
                <option value="MECHANICAL">Mechanical</option>
            </select>
        </div>

  <div class="form-group">
            <label>Semester</label>
            <select  class="form-control" name="sem">
            <option value ="0">Choose Semester
            </option>
                <option value="ALL">ALL</option>
                <option value="I SEM">I SEM</option>
                <option value="II SEM">II SEM</option>
                <option value="III SEM">III SEM</option>
                <option value="IV SEM">IV SEM</option>
                <option value="V SEM">V SEM</option>
                <option value="VI SEM">VI SEM</option>
                <option value="VII SEM">VII SEM</option>
                <option value="VIII SEM">VIII SEM</option>
            </select>
        </div>


<div class="form-group">
            <label>Section</label>
            <select  class="form-control" name="sec">
            <option value ="0">Choose Section
            </option>
                <option value="ALL">ALL</option>
                <option value="A">A SEC</option>
                <option value="B">B SEC</option>
                <option value="C">C SEC</option>
            </select>
        </div>
        
            <input type="submit" class="btn btn -lg btn-success" value="FIND">
         </form>
      </div>
        <h3><?php echo $title; ?></h3>
      <?php foreach($events as $event) : ?>
     <div class="jumbotron">
      <div class="row marketing">
        <div class="col-md-10">
          <h4><?php echo $event->event_title; ?></h4>
          <p><?php echo $event->description; ?></p>
        </div>
    

        <div class="col-md-2">
            <a class="btn btn-default" href="event.php?id=<?php echo $event-> id;
            ?>">View </a>
        </div>
        </div>
   </div>
<?php endforeach; ?>

<?php include 'inc/footer.php'; ?>
