<?php require("functions.php");
if (isset($_GET)) {
    if ($_GET['action'] === "login") {
        if (isset($_POST['email']))
            if (User->loginUser($_POST)) {
                header("Location: ../menu1.php");
            } else {
                $_SESSION['message']['message'] = "Nieprawidłowy login lub hasło";
                $_SESSION['message']['type'] = "error";
                header("Location: ../index.php");
            }

        exit();
    }
    if ($_GET['action'] === "logout") {
        User->logout();
        header("Location: ../index.php");
        exit();
    }
    if ($_GET['action'] === "register") {
        if (isset($_POST['email'])) {
            if (!User->register($_POST)) User->setMessage("", "Taki użytkownik już istnieje", "error");
        }
        header("Location: ../index.php");
        exit();
    }
    if ($_GET['action'] === "review") {
        if (isset($_POST['review'])) User->addReview($_POST);
        header("Location: ../index.php");
        $_SESSION['message']['message'] = "Dziękujemy za opinię";
        $_SESSION['message']['type'] = "info";
        exit();
    }
}
header("Location: ../index.php");
