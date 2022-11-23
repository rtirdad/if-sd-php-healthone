<?php
 try{
     $db = new PDO("mysql:host=localhost;dbname=fietsenmaker", "root", "");
     if(isset($_GET['id'])){
         $query = $db->prepare("DELETE FROM fietsen WHERE id = :id");
         $id = filter_input(INPUT_GET,"id", FILTER_SANITIZE_NUMBER_INT);
         $query->bindParam("id",$id);
         if ($query->execute()){
             echo "Het item is verwijderd";
         } else {
             echo "Er is een fout opgetreden!";
         }
     } echo "<br>";
 }  catch (PDOException $e) {
     die("Error!: " . $e->getMessage());
 }

 $query = $db->prepare("SELECT * FROM fietsen");
 $query->execute();
 $result = $query->fetchALL(PDO::FETCH_ASSOC);
 foreach ($result as &$data) {
     echo "a href='delete_master.php?id=" . $data['id'] . "'>";
        echo $data["merk"] . "" . $data["type"];
        echo "</a>";
        echo "<br>";
 }
