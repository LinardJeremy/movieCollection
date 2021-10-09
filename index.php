<?php $title = "Acceuil"; ?>

<?php require('template/header.php') ?>
<?php require('back/dataBase.php') ?>


<?php
$req = getFilms();
$numberMovie =1;

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
  while ($donnees = $req->fetch()){
    echo '<tr>';
    echo '<th scope="row">'.$numberMovie++.'</th>';
    echo '<td><a href="template/detailOne.php?movieId='.$donnees['id'].'">'.$donnees['movieName'].'</a></td>';
    echo '<td>'.$donnees['supportType'].'</td>';
    echo '<td>'.$donnees['comment'].'</td>';
    echo '<td>';
    echo '<form method="get" action="template/updateView.php?movieId='.$donnees['id'].'" id="formDelete">';
    echo '<button class="buttonUpdate" name="updateId" "id="delete" type="submit" value="'.$donnees['id']. '"/>';
    echo 'Modifier';
    echo '</button>';
    echo '</form>';
    echo '</td>';
    echo '<td>';
    echo '<form method="get" action="back/delete.php" id="formDelete">';
    echo '<button class="buttonDelete" name="deleteId" "id="delete" type="submit" value="'.$donnees['id']. '"/>';
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



<?php require ('template/footer.php') ?>