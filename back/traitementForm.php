

<?php
require('dataBase.php');


if (isset($_POST['movieName']) and isset($_POST['supportMovie']) and isset($_POST['comment']) and isset($_FILES['cover'])) {
    $movieName = utf8_decode(filter_var($_POST['movieName'], FILTER_SANITIZE_STRING));
    $comment = utf8_decode(filter_var($_POST['comment'], FILTER_SANITIZE_STRING));
    $supportMovie = $_POST['supportMovie'];
    //  set table name because inserto take this as argument
    $table = "film";

    // operation to add a picture

    $var1 = rand(1111, 9999);
    $var2 = rand(1111, 9999);
    $var3 = $var1 . $var2;
    $var3 = md5($var3);

    $fileName = $_FILES["cover"]["name"];
    $dst = "../assets/UploadImage/" . $var3 . $fileName;
    $dst_db = "assets/UploadImage/" . $var3 . $fileName;
    move_uploaded_file($_FILES["cover"]["tmp_name"], $dst);

    insertInto($table, $movieName, $supportMovie, $dst_db, $comment);
    header('Location:http://moviecollection/index.php');
    exit();
} else {
    echo "problème !!!!!";
}

?>