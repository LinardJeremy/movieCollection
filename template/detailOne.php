<?php require('header.php'); ?>
<?php require('../back/dataBase.php') ?>
<?php 
if(isset($_GET['movieId'])){
    $id= $_GET['movieId'];
    $req = getOne($id);
}
?>

<div class="card mx-auto" style="width: 18rem;">
  <img class="card-img-top" src="../<?= $req['coverImg'] ?>" alt="Affiche du film">
  <div class="card-body">
    <h5 class="card-title"><?= ucfirst($req['movieName']) ?></h5>
    <h6>Comment :</h6>
    <p class="card-text"><?= $req['comment'] ?></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Support : <?=$req['supportType'] ?></li>
  </ul>
  <!-- <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div> -->
</div>


