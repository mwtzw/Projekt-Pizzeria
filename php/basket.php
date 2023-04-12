<?php require("functions.php");
if(isset($_GET['action'])) {
    if($_GET['action'] === "remove") {
        $id = $_GET["id"];
        $size = $_GET["size"];
        $count = 1;
        if(isset($_GET["count"])) $count = $_GET["count"];
        Basket->removeProduct($id, $size ,$count);
    }
    if($_GET['action'] === "removeCustom") {
        $id = $_GET["id"];
        Basket->removeCustomProduct($id);
    }
    if($_GET['action'] === "clear") {
        Basket->clearBasket();
    }
}
if(isset($_POST["ingredient"])) {
    $ingredients = $_POST["ingredient"];
    Basket->addCustomProduct($ingredients);
}
if(isset($_POST["size"])) {
    $size = $_POST["size"];
    $id = $_POST["id"];
    Basket->addProduct($id, $size);
}
header("Location: /menu1.php");