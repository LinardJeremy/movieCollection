<?php 

function dbConnect()
{
    try{
        $db = new PDO('mysql:host=localhost;dbname=moviecollection;charset=utf8','root','');
        return $db;
    }
    catch(Exception $e){
        die('Erreur :'.$e->getMessage());
    }
};

function insertInto($movieName, $supportType,$coverImg,$comment){
    $db = dbConnect();
    $req = $db->prepare('INSERT INTO film(movieName, supportType, coverImg, comment) VALUES(?,?,?,?)');
    $req->execute(array($movieName,$supportType,$coverImg,$comment));

};

function getFilms()
{
$db = dbConnect();
$reponse = $db->query('SELECT * FROM film');
return $reponse;
};

function deleteOne($id){
    $db = dbConnect();
    $req= $db->exec("DELETE FROM film WHERE id =$id");
    // $req = $db->prepare('DELETE INTO film WHERE id = ?');
    // $req->execute(array($id));

};
function getOne($id){
    $db = dbConnect();
    $req = $db->query("SELECT * FROM film WHERE id =$id");
    $post=$req->fetch();
    return $post;
}


?>