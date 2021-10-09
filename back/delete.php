

<?php 

require('dataBase.php');

if (isset($_GET['deleteId'])){
    $id = $_GET['deleteId'];
    $db = dbConnect();
    deleteOne($id);
    header('Location:http://moviecollection/index.php');
    exit();
}

?>