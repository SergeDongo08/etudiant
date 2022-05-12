<?php
if(isset($_SESSION["id"])){
    $id_session_sauv = $_SESSION["id"];
    //Information Etudiant
    $check = "SELECT * FROM etudiants WHERE id ='$id_session_sauv'";
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
    $time = date("h:i:sa");
    $datetime = date("Y-m-d h:i:sa");


    echo 'WELCOME!!! '.'<br>'.$nom.'<br>';
     // echo date("Y/m/d"). " The time is " . date("h:i:sa");
    echo date("Y-m-d h:i:sa");

}else{
    header('Location: insert.php');
}

?>