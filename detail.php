<div class="card" style="width:400px">
    <div class="card-body">
      <h4 class="card-title"><?php echo"". $row["nom"]." ".$row["prenom"];?></h4>
      <p class="card-text"><?php echo"Eleve en ".$row['classe']." de sexe ".$genre." avec le matricule ".$row['matricule'];?></p>
      <a href="#" class="btn btn-primary">enregistré le 21/09/2021</a>
    </div>
    <img class="card-img-bottom" src="<?php echo"".$row['photo'];?>" alt="Card image" style="width:100%">
  </div>