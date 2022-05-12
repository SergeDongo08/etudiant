<div class="card mb-3">
  <img class="card-img-top" src="<?php echo $row['photo']; ?>" alt="Card image cap">
  <div class="card-body">
    <p class="card-text"><?php echo $row['content']; ?></p>
    <p class="card-text"><small class="text-muted"><?php echo 'Publié le '. $row['date_pub']; ?></small></p>
  </div>
</div>