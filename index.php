<?php $title = "Acceuil"; ?>

<?php require('template/header.php') ?>
<?php require('back/dataBase.php') ?>


<?php

$pageNumber = 1;
if(isset($_GET['page'])){
  $pageNumber = intval($_GET['page']);
}

if (isset($_SESSION['log']) === true) {

  $req = getFilms(($pageNumber-1)*5);
  $numberMovie = (($pageNumber-1)*5)+1;
  $reqCount = getCountFilms();
  $count = floatval($reqCount[0] / 5);
  $countRound = ceil($count);

?>
  <table class="table">
    <caption>List des films</caption>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nom du film</th>
        <th scope="col">Support</th>
        <th scope="col">Commentaire</th>
      </tr>
    </thead>
    <tbody>
      <?php
      while ($donnees = $req->fetch()) {
        echo '<tr>';
        echo '<th scope="row">' . $numberMovie++ . '</th>';
        echo '<td><a href="template/detailOne.php?movieId=' . $donnees['id'] . '">' . $donnees['movieName'] . '</a></td>';
        echo '<td>' . $donnees['supportType'] . '</td>';
        echo '<td>' . $donnees['comment'] . '</td>';
        echo '<td>';
        echo '<form method="get" action="template/updateView.php?movieId=' . $donnees['id'] . '" id="formDelete">';
        echo '<button class="buttonUpdate" name="updateId" "id="delete" type="submit" value="' . $donnees['id'] . '"/>';
        echo 'Modifier';
        echo '</button>';
        echo '</form>';
        echo '</td>';
        echo '<td>';
        echo '<form method="get" action="back/delete.php" id="formDelete">';
        echo '<button class="buttonDelete" name="deleteId" "id="delete" type="submit" value="' . $donnees['id'] . '"/>';
        echo 'Delete';
        echo '</button>';
        echo '</form>';
        echo '</td>';
        echo '</tr>';
      }
      $req->closeCursor();

      ?>
    </tbody>
  </table>
  <nav aria-label="Page navigation example">
  <ul class="mx-auto pagination justify-content-center">
    <?php 
      for($i=1;$i<=$countRound;$i++){
        echo '<li class="page-item"><a class="page-link" href="'.$url.'/index.php?page='.$i.'">'.$i.'</a></li>';
      }   
    ?>
  </ul>
</nav>

<?php } else {
?>
  <div class="messageAcceuil">
    <h1>Pour voir le contenu de la page vous devez vous connecter !</h1>

  </div>
<?php
}



?>



<?php require('template/footer.php') ?>