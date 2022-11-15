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
    echo "<table>";
    foreach ($result as &$data){
        echo "<tr>";
        echo "<td>" . $num . " " . "</td>";
        echo "<td>" . $data["merk"]. "</td>";
        echo "<td>" . "<a href='detail.php?id=" . $data["id"] . "'>" . $data["type"]  . "</a>" . "</td>" ;
        $num++;
        echo "<tr>";
    }
    echo "</table>";
}

?>