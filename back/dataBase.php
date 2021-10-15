<?php

function dbConnect()
{
    try {
        $db = new PDO('mysql:host=localhost;dbname=moviecollection;charset=utf8', 'root', '');
        return $db;
    } catch (Exception $e) {
        die('Erreur :' . $e->getMessage());
    }
};

function insertInto($table, $movieName, $supportType, $coverImg, $comment)
{
    $db = dbConnect();
    $req = $db->prepare('INSERT INTO ' . $table . '(movieName, supportType, coverImg, comment) VALUES(?,?,?,?)');
    $req->execute(array($movieName, $supportType, $coverImg, $comment));
};

function getFilms($offset)
{
    $db = dbConnect();
    $reponse = $db->query("SELECT * FROM film ORDER BY movieName LIMIT 5 OFFSET $offset");
    return $reponse;
};
function getCountFilms()
{
    $db = dbConnect();
    $reponse = $db->query('SELECT COUNT(*) FROM film');
    $count = $reponse->fetch();
    return $count;
}

function deleteOne($id)
{
    $db = dbConnect();
    $req = $db->exec("DELETE FROM film WHERE id =$id");
    // $req = $db->prepare('DELETE INTO film WHERE id = ?');
    // $req->execute(array($id));
};

function getOne($id)
{
    $db = dbConnect();
    $req = $db->query("SELECT * FROM film WHERE id =$id");
    $post = $req->fetch();
    return $post;
}
function updateOne($movieName, $supportType, $coverImg, $comment, $id)
{
    $db = dbConnect();
    $req = $db->prepare('UPDATE film SET movieName = ?, supportType = ?, coverImg = ?, comment = ? WHERE id = ?');
    $req->execute(array($movieName, $supportType, $coverImg, $comment, $id));
}

// traitement de la table members
function insertIntoMembers($nickname, $email, $pwd)
{
    $db = dbConnect();
    $req = $db->prepare('INSERT INTO members(nickname, email, pwd) VALUES(?,?,?)');
    $req->execute(array($nickname, $email, $pwd));
}

function getOneMember($nickname)
{
    $db = dbConnect();
    $req = $db->prepare("SELECT * FROM members WHERE nickname =?");
    $req->execute(array($nickname));
    $member = $req->fetch();
    return $member;
}
