<?php $title = "Register" ?>
<?php require('header.php') ?>


<div class="registration-form">
    <form method="post" enctype="multipart/form-data" action="../back/register.php">
                <div class="form-group">
                    <label for="nickname">Rentrez un pseudo :</label>
                    <input type="text" name="nickname" class="form-control item" id="nicknameRegister" placeholder="Votre pseudo">
                </div>
                <div class="form-group">
                    <label for="mail"> Rentrez une adresse email :</label>
                    <input type="text" name="mail" class="form-control item" id="mailRegister" placeholder="Votre e-mail">
                </div>
                <div class="form-group">
                    <label for="mdp">Choisir un mot de passe:</label>
                    <input type="password" name="mdp" class="form-control item" id="mdpRegister" placeholder="Votre mot de passe">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-block create-account">Créer son profil</button>
                </div>
        
    </form>
</div>
<?php require('footer.php') ?>