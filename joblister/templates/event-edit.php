<?php include 'inc/header.php'; ?>

    <h2 class="page-header">Edit event Listing</h2>
    <form method="post" action="edit.php?id=<?php echo $event->id; ?>">
        <div class="form-group">
            <label>club</label>
            <input type="text" class="form-control" name="club" value="<?php
                echo $event->club; ?>">
        </div>
        <div class="form-group">
            <label>Category</label>
            <select  class="form-control" name="category">
            <option value ="0">Choose Category</option>
                <?php foreach($categories as $category): ?>
                    <?php if($event->category_id == $category->id) :?>
                        <option value="<?php echo $category->id; ?>" selected>
                            <?php echo $category->name; ?></option>
                    <?php else: ?>
                        <option value="<?php echo $category->id; ?>"><?php echo
                            $category->name; ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>event Title</label>
            <input type="text" class="form-control" name="event_title" value="<?php
                echo $event->event_title; ?>">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="description"><?php echo $event->description; ?> </textarea>
        </div>
        <div class="form-group">
            <label>Location</label>
            <input type="text" class="form-control" name="location" value="<?php
                echo $event->location; ?>">
        </div>
        <div class="form-group">
            <label>fee</label>
            <input type="text" class="form-control" name="fee" value="<?php
                echo $event->fee; ?>">
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

<?php include 'inc/footer.php'; ?>