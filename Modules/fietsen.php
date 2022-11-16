<?php

function getFietsen():array {
    $db = new PDO("mysql:host=localhost;dbname=fietsenmaker", "root", "");
    $query = $db->prepare("SELECT * FROM fietsen");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    $num = 1;
    return $result;
}

function getfiets($id):array {

    $db = new PDO("mysql:host=localhost;dbname=fietsenmaker", "root", "");
    $query = $db->prepare("SELECT * FROM fietsen WHERE id = :id ");
    $query->bindParam("id", $id);
    $query->execute();
    $detail = $query->fetchAll(PDO::FETCH_ASSOC);
    return $detail;
}
?>