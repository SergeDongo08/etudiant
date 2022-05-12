<?php
$ide = $row['ide'];
$checketudiant = "SELECT * FROM etudiants WHERE id = '$ide'";
$resultetudiant = mysqli_query($conn, $checketudiant);// execution requet check
$rowetudiant = mysqli_fetch_assoc($resultetudiant);// sauv information des champs de la table dans row
$publisherid = $rowetudiant['id'];
?>