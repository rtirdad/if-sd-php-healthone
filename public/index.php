<?php
require '../Modules/categories.php';
require '../Modules/login.php';
require '../Modules/logout.php';
require '../Modules/database.php';
require '../Modules/common.php';

session_start();
//var_dump($_SESSION);
//var_dump($_POST);
$message="";

$request = $_SERVER['REQUEST_URI'];

$params = explode("/", $request);
print_r($request);
$title = "HealthOne";
$titleSuffix = "";

//$params[1] is de action
//$params[2] is een extra getal die de action nodig heeft om zijn taak uit te voeren
switch ($params[1]) {

    case 'categories':
        $titleSuffix = ' | Categories';
        $categories = getCategories();
        //var_dump($categories);die;
        include_once "../Templates/categories.php";
        break;

    case 'category':
        include_once "../Templates/home.php";
        break;

    case 'product':
        break;

    case 'login':
        $titleSuffix = ' | Home';
        include_once "../Templates/home.php";
        break;

    case 'logout':
        $titleSuffix = ' | Home';
        include_once "../Templates/home.php";
        break;

    case 'register':
        $titleSuffix = ' | Home';
        include_once "../Templates/home.php";
        break;

    case 'contact':
        $titleSuffix = ' | Home';
        include_once "../Templates/home.php";
        break;

    case 'admin':
        include_once ('admin.php');
        break;

    case 'member':
        include_once ('member.php');
        break;

    case 'fietsen':
        echo "<h1>Fietsen</h1>";
        $db = new PDO("mysql:host=localhost;dbname=fietsenmaker", "root", "");
        $query = $db->prepare("SELECT * FROM fietsen");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        $num = 1;
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
        break;


    default:
        $titleSuffix = ' | Home';
        include_once "../Templates/home.php";
}







