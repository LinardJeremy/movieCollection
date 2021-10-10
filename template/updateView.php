<?php $title = "ajouter" ?>
<?php require('header.php') ?>
<?php require('../back/database.php') ?>
<?php 
if(isset($_GET['updateId'])){
    $id= $_GET['updateId'];
    $req = getOne($id);
}
?>

<div class="registration-form">
    <form method="post" enctype="multipart/form-data" action="../back/update.php?movieId=<?=$id?>">
                <div class="form-icon">
                    <img width="100%" class="icon icon-user" id="image" alt="Login" src="../<?= $req['coverImg'] ?>">
                    <input name="loadedImg" width="100%" class="icon icon-user" type="hidden" id="image" alt="Login" value="../<?= $req['coverImg'] ?>">
                </div>
                <div class="form-group">
                    <label for="cover"> Ajouter une image d'illustration : </label>
                    <input class="form-control item" type="file" id="cover" name="cover" accept="image/png, image/jpeg">
                </div>
                <div class="form-group">
                    <input type="text" name="movieName" class="form-control item" id="movieName" value="<?= $req['movieName'] ?> ">
                </div>
                <div class="form-group">
                    <label for="supportMovie">Choisisez le format du film :</label>
                    <select name="supportMovie" class="form-control item" type="password" id="supportType">
                        <option class="optionSelect" value="DVD">DVD</option>
                        <option class="optionSelect" value="Blu-ray">Blu-ray</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="comment">Ajouter un commentaire :</label>
                    <textarea name="comment" type="text" class="form-control item" id="comment" placeholder="Commentaire">
                        <?= $req['comment'] ?>
                    </textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-block create-account">Modifier le film</button>
                </div>
        
    </form>
</div>
<?php require('footer.php') ?>