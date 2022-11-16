<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    include_once '../Templates/defaults/head.php';

    ?>
</head>
<body>

<div class="container">
    <?php
    include_once '../Templates/defaults/header.php';
    include_once '../Templates/defaults/menu.php';
    include_once '../Templates/defaults/pictures.php';
    ?>



        <?php
        global $detail;
        $num = 1;

           foreach ($detail as &$data){
                echo "<h2>" . "Artikelnummer:" . $data['id'] .  "<br> </h2>";
                echo "<h2>" . "Merk: " . $data['merk'] . "<br> </h2>";
                echo "<h2>" . "Type: " . $data['type'] . "<br> </h2>";
                echo "<h2>" . "Voorraad: " . $data['voorraad'] . "<br> </h2>";
                echo "<h2>" . "Prijs: &euro; " .
            number_format($data["prijs"],2,",",",") . "<br> </h2> <br>";
}

        ?>
    <a href="http://healthone.localhost/fietsen">Terug naar master pagina.</a>
</div>
<?php      include_once '../Templates/defaults/footer.php';?>
</body>
</html>