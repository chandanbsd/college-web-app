<?php include 'inc/header.php'; ?>
<div class="jumbotron">
    <h2 class="page-header">Edit Notification</h2>
    <form method="post" action="edit.php?id=<?php echo $event->id; ?>">

         <div class="form-group">
            <label>Category</label>
            <select  class="form-control" name="category">
            <option value ="0">Choose Category
            </option>
               <?php foreach($categories as $category): ?>
                    <?php if($event->category_id == $category->id) :?>
                        <option value="<?php echo $category->name; ?>" selected>
                            <?php echo $category->name; ?></option>
                    <?php else: ?>
                        <option value="<?php echo $category->name; ?>"><?php echo
                            $category->name; ?></option>
                    <?php endif; ?>
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
        
         <div class="form-group">
            <label>Event Title</label>
            <input type="text" class="form-control" name="event_title" value="<?php
                echo $event->event_title; ?>">
        </div>


        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="description"><?php echo $event->description; ?> </textarea>
        </div>

        <div class="form-group">
            <label>Contact User</label>
            <input type="text" class="form-control" name="contact_user" value="<?php
                echo $event->contact_user; ?>">
        </div>
        <div class="form-group">
            <label>Contact Email</label>
            <input type="text" class="form-control" name="contact_email" value="<?php
                echo $event->contact_email; ?>">
        </div>
    
        <input type ="submit" class="btn btn-default" value="Submit" name="submit">
    </form>
</div>
<?php include 'inc/footer.php'; ?>