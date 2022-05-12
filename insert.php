<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>PLATEFORM D'INSCRIPTION D'ELEVES/ETUDIANT(E)S</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style type="text/css">
    
    header{
  position: relative;
  top: 0;
  width: 100%;
  padding: 30px 100px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

header .logo{
  position: relative;
  color: #000;
  font-size: 30px;
  text-decoration: none;
  text-transform: uppercase;
  font-weight: 800;
  letter-spacing: 1px;
}

header .navigation a{
  color: #000;
  text-decoration: none;
  font-weight: 500;
  letter-spacing: 1px;
  padding: 2px 15px;
  border-radius: 20px;
  transition: 0.3s;
  transition-property: background;
}

header .navigation a:not(:last-child){
  margin-right: 30px;
}

header .navigation a:hover{
  background: #fff;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: DEEAEF; /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 10px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 50%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
    </style>
</head>

<body style="background-color:#FFEEF0;">
 <header style=" font-style: italic;">
        <img src="images/ediant.jpeg" style="width: 50px; height: 50px; margin-left: 250px; ">
        <h2><a href="#" class="logo" style="margin-right: 370px;">Welcome!!</a></h2>
        <div class="navigation">
          <a href="debut.php">Home</a>
          <a href="#">Inscription</a>
          <a href="#">Info</a>
          <a href="#">Services</a>
          <a href="#">Contact</a>
        </div>
      </header>

    <div class="container">
        <h1>INSCRIPTION</h1>
        <form action="" method="post"  enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Nom</label>
                    <input type="text" class="form-control" id="name" name="nom" placeholder="Entrer votre nom" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="prenom">Prenom</label>
                    <input type="text" class="form-control" id="prenom" placeholder="Entrer votre prenom" name="prenom" required>
                </div>
            </div>
            <div class="form-group">
                <label class="mr-sm-2" for="inlineFormCustomSelect">Genre</label>
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="genre">
                    <option selected>Choisir</option>
                    <option value="homme">Homme</option>
                    <option value="femme">Femme</option>
                    <option value="autre">Autre</option>
                </select>
            </div>
            <div class="form-group">
                <label for="classe">Classe</label>
                <input type="text" class="form-control" id="classe" placeholder="Entrer votre classe" name="classe" required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="matricule">Matricule</label>
                    <input type="text" class="form-control" id="matricule" placeholder="Entrer votre matricule"
                        name="matricule" required>
                </div>
            </div>
            <div class="form-row">
                <!-- <div class="form-group col-md-6"> -->
                <label for="password">Mot de Passe</label>
                <input type="password" class="form-control" id="password" placeholder="Entrer votre mot de passe"
                    name="password" required>
                <!-- </div> -->
            </div>

            <div class="mb-3">
                <label for="photo">Photo</label>
                <input type="file" class="form-control" id="photo" placeholder="Ajouter une photo" name="photo" required>
            </div>
            <button type="submit" class="btn btn-primary" name="envoyer">Envoyer</button>

        </form>

        <p>Vous avez un compte? Connectez-vous! <img src="lebas.png" style="width: 20px;"></p>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto; margin-left: 80px;">Login</button>

        <div id="id01" class="modal">
  
  <form class="modal-content animate" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="avatar.png" alt="Avatar" style="width: 25%;" class="avatar">
    </div>

    <div class="container">
      <label for="matricule"><b>Matricule</b></label>
      <input type="text" placeholder="Entrer votre matricule" name="matricule" required>

      <label for="password"><b>Mot de passe</b></label>
      <input type="password" placeholder="Entrer votre mot de passe" name="password" required>
        
      <button type="submit" name="login">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Se Souvenir de moi
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Retour</button>
      <span class="psw">Vous n'avez pas de compte? <a href="insert.php">inscrivez-vous!</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

    </div>
    <?php
    //Inclusion de la connexion à la BD
  include 'connexion.php';
  //Inscription
  if (isset($_POST['envoyer'])) {
    $nom = addslashes($_POST['nom']);
    $prenom = addslashes($_POST['prenom']);
    $genre = addslashes($_POST['genre']);
    $classe = addslashes($_POST['classe']);
    $matricule = addslashes($_POST['matricule']);
    $password = md5(addslashes($_POST['password']));
    

    //check user
    $check = "SELECT * FROM etudiants WHERE matricule ='$matricule'";
    $result = mysqli_query($conn, $check);
    $nombre = mysqli_num_rows($result);
    //a = 2
    //si a = 0 display 5 sinon display 4
    echo $matricule . '-';
//ajout d'image

$target_dir = "image/";//dossier de reception
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
//if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["photo"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
//renomer l'image
  $temp = explode(".", $_FILES["photo"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);
$finaldestination = $target_dir. $newfilename;
//}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], "".$finaldestination)) {
      echo "The file ". htmlspecialchars( basename( $_FILES["photo"]["name"])). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
}
    if ($nombre == 0) {
      //insertion
      $sql = "INSERT INTO etudiants (nom, prenom, genre,classe,matricule,photo,date_poste,passe)
VALUES ('$nom', '$prenom', '$genre' , '$classe' ,'$matricule' ,'$finaldestination','$date_poste', '$password')";

      if (mysqli_query($conn, $sql)) {
        echo "New record created successfully ";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    } else {
      echo 'eleve existe';
    }
  }
  //fin d'inscription
  //login
  if (isset($_POST['login'])) {
    $matricule = addslashes($_POST['matricule']);
    $password = md5(addslashes($_POST['password']));

    //check user
    $check = "SELECT * FROM etudiants WHERE matricule ='$matricule' AND passe = '$password' ";
    $result = mysqli_query($conn, $check);
    $nombre = mysqli_num_rows($result);
    //a = 2
    //si a = 0 display 5 sinon display 4

    if ($nombre == 1) {
      //aller à la page 
      $row = mysqli_fetch_assoc($result);
      $id = $row['id'];
     //Création de la session
    $_SESSION["id"] = $id;
 echo '<script>window.location.replace("page.php")</script>';
  } else {
      //afficher message d'erreure
      echo "mot de passe eronné";
    }
  }


  //fin login
  mysqli_close($conn);
  ?>
</body>

</html>