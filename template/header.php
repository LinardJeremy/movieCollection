    <?php session_start() ?>
    <?php
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
      $url = "https://";
    else
      $url = "http://";
    $url .= $_SERVER['HTTP_HOST'];

    // $url .= $_SERVER['REQUEST_URI'];
    ?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
      <link href="../assets/style.css" rel="stylesheet">
      <title><?= $title ?></title>
    </head>

    <body>
      <nav class="navbar navbar-expand-lg  navbar-dark bg-primary">
        <a class="navbar-brand" href="<?= $url ?>/">Navigation</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="http://moviecollection/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= $url ?>/form.php">Ajouter un film</a>
            </li>
            <?php if (!isset($_SESSION['log'])) { ?>
              <li class="nav-item">
                <a class="nav-link" href="<?= $url ?>/template/register.php">Enregistrer</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= $url ?>/template/connection.php">Connexion</a>
              </li>
            <?php }; ?>
            <?php if (isset($_SESSION['log']) === true) {
            ?>
              <li class="nav-item">
                <p class="helloMessage"> Salut <?= $_SESSION['nickname'] ?> </p>
              </li>
              <li class="nav-item">
                <a href="<?= $url ?>/back/deconnection.php" class="nav-link">D??connexion</a>
              </li>
            <?php
            } ?>
          </ul>
        </div>
      </nav>