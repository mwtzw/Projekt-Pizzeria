<?php require("functions.php");
if(isset($_GET)) {
    if($_GET['action'] === "login") {
        if(isset($_POST['email'])) User->loginUser($_POST);
    }
    if($_GET['action'] === "logout") {
        User->logout();
    }
}
header("Location: /index.php");