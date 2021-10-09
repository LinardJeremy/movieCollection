<?php $title = "ajouter" ?>
<?php require('template/header.php') ?>


<div class="registration-form">
    <form method="post" enctype="multipart/form-data" action="back/traitementForm.php">
                <div class="form-icon">
                    <span><i class="icon icon-user"></i></span>
                </div>
                <div class="form-group">
                    <label for="cover"> Ajouter une image d'illustration : </label>
                    <input class="form-control item" type="file" id="cover" name="cover" accept="image/png, image/jpeg">
                </div>
                <div class="form-group">
                    <input type="text" name="movieName" class="form-control item" id="movieName" placeholder="Nom du film">
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
                    </textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-block create-account">Ajouter un film</button>
                </div>
        
    </form>
</div>
<?php require('template/footer.php') ?>