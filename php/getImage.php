<?php require("functions.php");
    header("Content-type: image/jpg");
try {
    $name = $_GET['name'];
    $id = $_GET['id'];
    echo(strval(Database->getImage($name, $id)));
} catch(Exception $e) {}