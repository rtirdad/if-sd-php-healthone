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

    <table class="table">
        <th>nr</th>
        <th>Merk</th>
        <th>Type</th>
        <th></th>
        <th></th>
        <th></th>

        <?php
        global $result;
        $num = 1;

        foreach($result as &$data){
            echo "<tr>";
            echo "<td>" . $num . '' . "</td>" ;
            echo "<td>" . $data['merk'] . "</td>" ;
            echo "<td>" . $data['type'] . "</td>" ;
            echo "<td> <a href='detail/" . $data['id']. "'>" . "Details" . "</a> </td>" ;
            echo "<td> <a href='update/" . $data['id']. "'>" . "update" . "</a> </td>" ;
            echo "<td> <a href='delete/" . $data['id']. "'>" . "Delete" . "</a> </td>" ;
            $num ++;
            echo "</tr>";
        }
        ?>
    </table>
</div>
<?php      include_once '../Templates/defaults/footer.php';?>
</body>
</html>
