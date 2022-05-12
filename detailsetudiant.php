<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="container">
<?php
 include'connexion.php';
 if(isset($_GET['ide'])){ //verification si on a un get
//verification si l'information get egale a l'id dans la session
$id=$_GET['ide'];
$check = "SELECT * FROM etudiants WHERE id ='$id'";
    $result = mysqli_query($conn, $check);// execution requet check
    $nombre = mysqli_num_rows($result);// nombre de resultat
    $row = mysqli_fetch_assoc($result);// sauv information des champs de la table dans row
    $id = $row['id'];
    $nom = $row['nom'];
    $prenom = $row['prenom'];
    $matricule = $row['matricule'];
    $date_post = $row['date_poste'];
    $image = $row['photo'];
    $classe = $row['classe'];
    $genre = $row['genre'];
    // print($genre);
    if ($genre == "homme") {
        # code...
        $genre = "masculin";
       
    }elseif($genre == "femme"){
        $genre = "feminin"; 
        
    }else{
        $genre = "autre";
    }

    include'detail.php';

 }
    ?>
 
</div>

</body>
</html>