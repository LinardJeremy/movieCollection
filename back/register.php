<?php 
require('dataBase.php');
require('../template/header.php');

if (isset($_POST['nickname']) AND isset($_POST['mail']) AND isset($_POST['mdp'])){

    $nickname = utf8_decode(filter_var($_POST['nickname'], FILTER_SANITIZE_STRING));
    $pass_hache = password_hash($_POST['mdp'],PASSWORD_DEFAULT);
    $mail = filter_var($_POST['mail'], FILTER_SANITIZE_EMAIL);
    insertIntoMembers($nickname,$mail,$pass_hache);


?>
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Parfait</h4>
  <p>Vous êtes inscrit vous pouvez maintenant vous connecter. </p>
  <hr>
  <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
</div>
<?php
}else{
    echo "Vous devez remplir tous les champs!";
}

?>