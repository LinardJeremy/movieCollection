<?php $title = "Connexion" ?>
<?php require('header.php') ?>


<div class="registration-form">
    <form method="post" enctype="multipart/form-data" action="../back/connection.php">
                <div class="form-group">
                    <label for="nickname">Rentrez votre pseudo :</label>
                    <input type="text" name="nickname" class="form-control item" id="nicknameRegister" placeholder="Votre pseudo">
                </div>
                <div class="form-group">
                    <label for="mdp">Rentrez votre mot de passe:</label>
                    <input type="password" name="mdp" class="form-control item" id="mdpRegister" placeholder="Votre mot de passe">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-block create-account">Connexion</button>
                </div>
        
    </form>
</div>
<?php require('footer.php') ?>