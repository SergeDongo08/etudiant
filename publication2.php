<?php
include 'publisherinfoquery.php';
?>
<div class="w3-card-4" style="width:70%">
    <header class="w3-container w3-light-grey">
        <h3><?php echo $rowetudiant['nom'] . ' ' . $rowetudiant['prenom']; ?></h3>
    </header>
    <div class="w3-container">
        <p><?php echo $row['date_pub']; ?></p>
        <hr>
        <img src="<?php echo $rowetudiant['photo']; ?>" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <p><?php echo $row['content']; ?></p><br>
        <img class="card-img-top w-50" src="<?php echo $row['photo']; ?>" alt="Card image cap"><br>
        <hr>

        <?php
        if($publisherid == $id_session_sauv){
        ?>
                <a> <i class='far fa-edit'  name="edit" style='font-size:24px'></i></a>
                <a><i class='fas fa-trash' name="supprimer" style='font-size:24px;color:red'></i></a><br>
        <?php
        }
        ?>
    </div>
    <hr>
    <?php
    include 'commentaire.php';
    ?>

    <button class="w3-button w3-block w3-dark-grey">+ Connect</button>
</div>



<br>