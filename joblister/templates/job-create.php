<?php include 'inc/header.php'; ?>

    <h2 class="page-header">Post Club Event</h2>
    <form method="post" action="create.php">
        <!-- <div class="form-group">
            <label>Company</label>
            <input type="text" class="form-control" name="company">
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
            <label>Choose Club</label>
            <input type="text" class="form-control" name="job_title">
        </div>

        <div class="form-group">
            <label>Event Title</label>
            <input type="text" class="form-control" name="job_title">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="description"> </textarea>
        </div>
        <div class="form-group">
            <label>Location</label>
            <input type="text" class="form-control" name="location">
        </div>
        <div class="form-group">
            <label>Registration Fee</label>
            <input type="text" class="form-control" name="salary">
        </div>
        <div class="form-group">
            <label>Event Co-ordinator</label>
            <input type="text" class="form-control" name="contact_user">
        </div>
        <div class="form-group">
            <label>Contact Email</label>
            <input type="text" class="form-control" name="contact_email">
        </div>
        <input type ="submit" class="btn btn-default" value="Submit" name="submit">
    </form>

<?php include 'inc/footer.php'; ?>
