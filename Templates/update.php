<?php
include_once('defaults/head.php');
?>


<?php
//try {
//    $db = new PDO("mysql:host=localhost;dbname=fietsenmaker", "root","");
//    if(isset($_POST['verzenden'])){
//        $merk = filter_input(INPUT_POST,"merk",FILTER_SANITIZE_STRING);
//        $type = filter_input(INPUT_POST,"type",FILTER_SANITIZE_STRING);
//        $prijs = filter_input(INPUT_POST,"merk",FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
//
//        $query = $db->prepare("UPDATE fietsen SET merk = :merk, type = :type, prijs = :prijs WHERE id=:id");
//
//        $query->bindParam("merk", $merk);
//        $query->bindParam("type", $type);
//        $query->bindParam("prijs", $prijs);
//        $query->bindParam("id", $_GET['id']);
//        if ($query->execute()) {
//            echo "De nieuwe gegevens zijn toegevoegd.";
//        } else {
//            echo "Er is een fout opgetreden";
//        }
//        echo "<br";
//    } else {
//        $query = $db->prepare("SELECT * FROM fietsen WHERE id = :id");
//        $query->bindParam("id", $_GET['id']);
//        $query-> execute();
//        $result = $query->fetchALL(PDO::FETCH_ASSOC);
//        foreach ($result as &$data) {
//            $merk = $data["merk"];
//            $type = $data["type"];
//            $prijs = $data["prijs"];
//        }
//    }
//} catch (PDOException $e) {
//    die("Error!: " . $e->getMessage());
//}
//
//    ?>


<div class="container">
    <div class="row">
        <div class="col-12 col-md-12">
            <form method="post">
                <label for="Merk">Merk</label>
                <input type="text" name="merk" class="form-control" value="<?=$fiets['Merk']?>" id="merk"><br>

                <label for="type">type</label>
                <input type="text" name="merk" class="form-control" value="<?=$fiets['Merk']?>" id="merk"><br>

                <label for="Merk">Merk</label>
                <input type="text" name="merk" class="form-control" value="<?=$fiets['Merk']?>" id="merk"><br>

                <input type="submit" name="verzenden" value="opslaan"> <br>
            </form>
        </div>
    </div>

</div>


<!--<form method="post">-->
<!--    <label>Merk</label>-->
<!--    <input type="text" name="merk" value="--><?php //echo $type; ?><!--"> <br>-->
<!--    <label>Type</label>-->
<!--    <input type="text" name="type" value="--><?php //echo $type; ?><!--> <br>-->
<!--    <label>Prijs</label>-->
<!--    <input type="text" name="prijs" value="--><?php //echo $prijs; ?><!--> <br>-->
<!---->
<!--    <input type="submit" name="verzenden" value="opslaan"> <br>-->
<!--</form>-->
