<form action="" method="post"  enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Saisissez votre pensée</label>
    <textarea name="publication" class="form-control" id="publication" rows="2"></textarea>
  </div>
  <div class="form-group">
    <input type="file" name="photo" class="form-control-file" id="photo">
  </div>
  <button type="submit" name="subpublication" value="publication" class="btn btn-primary mb-2">Publier</button>
</form>
<?php
  if (isset($_POST['subpublication'])) {
    $publication = addslashes($_POST['publication']);

//ajout d'image

$target_dir = "publication/";//dossier de reception
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

      //insertion
      $sql = "INSERT INTO publication (content, photo, date_pub, ide)
VALUES ('$publication', '$finaldestination', '$datetime', '$id_session_sauv')";

      if (mysqli_query($conn, $sql)) {
        echo "New record created successfully ";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

  }

?>