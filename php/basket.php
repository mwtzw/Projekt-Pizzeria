<?php require("functions.php");

if (User->isNotLoggedIn()) {
    $_SESSION['message']['message'] = "Musisz być zalogowany aby dodać produkt do koszyka";
    $_SESSION['message']['type'] = "error";
    header("Location: ../menu.php");
}

if (isset($_GET['action'])) {
    if ($_GET['action'] === "remove") {
        $id = $_GET["id"];
        $size = $_GET["size"];
        $count = 1;
        if (isset($_GET["count"])) $count = $_GET["count"];
        Basket->removeProduct($id, $size, $count);
        User->setMessage("Usunięto", "produkt z koszyka", "info");
    }
    if ($_GET['action'] === "removeCustom") {
        $id = $_GET["id"];
        Basket->removeCustomProduct($id);
        User->setMessage("Usunięto", "produkt z koszyka", "info");
    }
    if ($_GET['action'] === "clear") {
        Basket->clearBasket();
    }
    if ($_GET['action'] === "order") {
        if (isset($_POST["paymentMethod"])) Basket->order($_POST);
        User->setMessage("", "Dziękujemy za złożenie zamówienia", "success");
    }
} else {
    if (isset($_POST["ingredient"])) {
        $ingredients = $_POST["ingredient"];
        Basket->addCustomProduct($ingredients);
        User->setMessage("Dodano", "produkt do koszyka", "info");
    }
    if (isset($_POST["size"])) {
        $size = $_POST["size"];
        $id = $_POST["id"];
        Basket->addProduct($id, $size);
        User->setMessage("Dodano", "produkt do koszyka", "info");
    }
}
header("Location: ../menu.php#pizzas");
