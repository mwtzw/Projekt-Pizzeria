<?php require("functions.php");
    header("Content-type: image/jpg");
try {
    $name = $_GET['name'];
    $id = $_GET['id'];
    if($name === "avatar") $result = Database->getData("SELECT avatar FROM users WHERE id=$id")->results;
    if($name === "product") $result = Database->getData("SELECT image FROM products WHERE id=$id")->results;
    echo($result[0][0]);
} catch(Exception $e) {}