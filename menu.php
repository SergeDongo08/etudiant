<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="<?php echo $image; ?>" width="30" height="30" class="d-inline-block align-top" alt="">
    <?php echo $nom. " ".$prenom ; ?>
  </a> 

  <a class="navbar-brand" href="edit.php?ide=<?php echo $id;?>">
   configuration
  </a> 
  <a class="navbar-brand" href="#">
   publication
  </a> 
  <a class="navbar-brand" href="logout.php">
   deconnexion
  </a> 
</nav>