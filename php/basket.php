<?php require("functions.php");
if(isset($_GET)) {
    if($_GET['action'] === "remove") {
        $id = $_GET["id"];
        $count = 1;
        if(isset($_GET["count"])) $count = $_GET["count"];
        Basket->removeProduct($id, $count);
    }
    if($_GET['action'] === "removeCustom") {
        $id = $_GET["id"];
        Basket->removeCustomProduct($id);
    }
    if($_GET['action'] === "add") {
        $id = $_GET["id"];
        $count = 1;
        if(isset($_GET["count"])) $count = $_GET["count"];
        Basket->addProduct($id, $count);
    }
    if($_GET['action'] === "clear") {
        Basket->clearBasket();
    }
}
if(isset($_POST["ingredient"])) {
    $ingredients = $_POST["ingredient"];
    Basket->addCustomProduct($ingredients);
}
header("Location: /index.php");