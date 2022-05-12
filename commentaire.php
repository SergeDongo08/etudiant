<?php
$idp = $row['id'];
?>
<div class="w3-container">
<?php
//Selection et affichage des commentaires
$sqlcomment = "SELECT* FROM commentaire WHERE idp = '$idp'";
      $resultcomment = mysqli_query($conn, $sqlcomment);

      if (mysqli_num_rows($resultcomment) > 0) {
        // output data of each row
        while ($rowcomment = mysqli_fetch_assoc($resultcomment)) {
            include 'lescomments.php';
        } //fin de la boucle
      } else {
        echo "Soyez le premier à publier un commentaire";
      }
      ?>


    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">

            <textarea name="<?php echo 'commentaire' . $idp; ?>" class="form-control" id="<?php echo 'commentaire' . $idp; ?>" rows="2"></textarea>
        </div>
        <button type="submit" name="<?php echo 'subcommentaire' . $idp; ?>" value="<?php echo 'subcommentaire' . $idp; ?>" class="btn btn-primary mb-5">Votre commentaire</button>
    </form>
</div>
<?php


if (isset($_POST['subcommentaire' . $idp])) {
    $commentaire = addslashes($_POST['commentaire' . $idp]);


    //insertion
    $sql = "INSERT INTO commentaire (idc, idp, date_c, commentaire)
VALUES ('$id_session_sauv', '$idp', '$datetime', '$commentaire')";

    if (mysqli_query($conn, $sql)) {
        header('Location: page.php');
        //echo "New record created successfully ";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

?>