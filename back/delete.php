

<?php 

require('dataBase.php');

if (isset($_GET['deleteId'])){
    $id = $_GET['deleteId'];
    $db = dbConnect();
    $req = getOne($id);
    unlink('../'.$req['coverImg']);
    deleteOne($id);
    header('Location:http://moviecollection/index.php');
    exit();
}

?>