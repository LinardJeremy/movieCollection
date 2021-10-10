<?php require('dataBase.php') ?>
<?php require('../template/header.php') ?>

<?php
if (isset($_POST['nickname']) and isset($_POST['mdp'])) {

    $nickname = utf8_decode(filter_var($_POST['nickname'], FILTER_SANITIZE_STRING));
    $mdp = utf8_decode(filter_var($_POST['mdp'], FILTER_SANITIZE_STRING));
    $member = getOneMember($nickname);

    if (!$member) {
?>
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">Well done!</h4>
            <p>Mauvais identifiant ou mot de passe !</p>
            <hr>
            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
        </div>
        <?php
    } else {

        $isPasswordCorrect = password_verify($mdp, $member['pwd']);

        if (!$isPasswordCorrect) {
        ?>
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Attention !</h4>
                <p>Mauvais identifiant ou mot de passe !</p>
                <hr>
                <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
            </div>
<?php
        } else {
            // session_start();
            $_SESSION['nickname'] = $member['nickname'];
            $_SESSION['log'] = true;
            header('Location:http://moviecollection/index.php');
            exit();
        }
    }
}

?>