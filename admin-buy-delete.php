<?php
if( isset($_GET["id"]) ){
    $id = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "shopping";

    //Create connection
    $connection = new mysqli($servername, $username, $password, $database);

   $sql = "DELETE FROM buy_order WHERE id=$id";
   $connection->query($sql);
    }
    header("location: buy-order-view.php");
    exit;


?>
