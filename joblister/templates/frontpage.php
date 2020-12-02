<?php include 'inc/header.php'; ?>

      <div class="jumbotron">
        <h1>Choose A Student Club</h1>
        <form method="GET action=index.php">
            <select name="category" class="form-control">
                <option value ="0">All Clubs</option>
                <?php foreach($categories as $category): ?>
                    <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                <?php endforeach; ?>
            </select>
            <br>
            <input type="submit" class="btn btn -lg btn-success" value="FIND">
         </form>
      </div>
        <h3><?php echo $title; ?></h3>
      <?php foreach($events as $event) : ?>
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
<?php endforeach; ?>

<?php include 'inc/footer.php'; ?>
