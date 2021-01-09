<?php include 'inc/header.php'; ?>
    <h2 class="page-header">Post Notification</h2>
    <form method="post" action="create.php">
        <!-- <div class="form-group">
            <label>Club</label>
            <input type="text" class="form-control" name="club">
        </div> -->

        <div class="form-group">
            <label>Category Name</label>
            <select  class="form-control" name="category">
            <option value ="0">Choose Category
            </option>
                <?php foreach($categories as $category): ?>
                    <option value="<?php echo $category->name; ?>"><?php echo $category->name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        

        <div class="form-group">
            <label>Department Name</label>
            <select  class="form-control" name="dept">
            <option value ="0">Choose Department
            </option>
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
            <option value ="0">Choose Department
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
            <label>Semester</label>
            <select  class="form-control" name="sec">
            <option value ="0">Choose Section
            </option>
                <option value="ALL">ALL</option>
                <option value="A">A SEC</option>
                <option value="B">B SEC</option>
                <option value="C">C SEC</option>
            </select>
        </div>











        <!-- /////////////////////////////////////// -->

        

        <div class="form-group">
            <label>Event Title</label>
            <input type="text" class="form-control" name="event_title">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="description"> </textarea>
        </div>
       <!--  <div class="form-group">
            <label>Location</label>
            <input type="text" class="form-control" name="location">
        </div> -->
       <!--  <div class="form-group">
            <label>Registration Fee</label>
            <input type="text" class="form-control" name="fee">
        </div> -->
        <div class="form-group">
            <label>Event Co-ordinator</label>
            <input type="text" class="form-control" name="contact_user">
        </div>
        <div class="form-group">
            <label>Contact Email</label>
            <input type="text" class="form-control" name="contact_email">
        </div>
<!-- 
        <div class="form-group">
            <label>Category Name</label>
            <select  class="form-control" name="club">
            <option value ="0">Choose Category
            </option>
                <?php foreach($categories as $category): ?>
                    <option value="<?php echo $category->name; ?>"><?php echo $category->name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
 -->
        <input type ="submit" class="btn btn-primary" value="Submit" name="submit">
    </form>

<?php include 'inc/footer.php'; ?>
