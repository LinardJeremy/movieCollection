<?php require('dataBase.php'); ?>
<?php
if (isset($_POST['movieName']) AND isset($_GET['movieId']) AND isset($_POST['supportMovie'])AND isset($_POST['comment'])){
    $movieName = utf8_decode(filter_var($_POST['movieName'], FILTER_SANITIZE_STRING));
    $comment = utf8_decode(filter_var($_POST['comment'], FILTER_SANITIZE_STRING));
    $supportMovie = $_POST['supportMovie'];
    var_dump($_POST['loadedImg']);
    $id = $_GET['movieId'];
    $dst_db;
    // operation to add a picture
    if(isset($_FILES['cover'])){
    unlink($_POST['loadedImg']);
     $var1= rand(1111,9999);
     $var2= rand(1111,9999);
     $var3 = $var1.$var2;
     $var3 = md5($var3);

     $fileName = $_FILES["cover"]["name"];
     $dst = "../assets/UploadImage/".$var3.$fileName; 
     $dst_db = "assets/UploadImage/".$var3.$fileName;
     move_uploaded_file($_FILES["cover"]["tmp_name"],$dst);
    }else{
        $dst_db = $_POST['loadedImg'];
    };
    updateOne($movieName,$supportMovie,$dst_db,$comment,$id);
    header('Location:http://moviecollection/index.php');
    exit();
}


?>