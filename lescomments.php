<?php

$idc = $rowcomment['idc'];
$checkcommenteur = "SELECT * FROM etudiants WHERE id = '$idc'";
$resultcommenteur = mysqli_query($conn, $checkcommenteur);// execution requet check
$rowcommenteur = mysqli_fetch_assoc($resultcommenteur);// sauv information des champs de la table dans row

$commenteur = $rowcommenteur['nom'].' '.$rowcommenteur['prenom'];
$imagecommenteur  = $rowcommenteur['photo']; ?>
<img src="<?php echo $imagecommenteur; ?>" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
<p><?php echo ' '.$commenteur.  '<br> '. $rowcomment['commentaire'].' <br>'.$rowcomment['date_c'];
 ?></p>