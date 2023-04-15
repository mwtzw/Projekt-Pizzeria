<?php require("functions.php");
if(isset($_GET)) {
    if($_GET['action'] === "login") {
        if(isset($_POST['email'])) 
            if(User->loginUser($_POST)) {
                header("Location: ../menu1.php");
            } else {
                $_SESSION['message']['message'] = "Nieprawidłowy login lub hasło";
                $_SESSION['message']['type'] = "error";
                header("Location: ../index.php");
            }  
                
        exit();
    }
    if($_GET['action'] === "logout") {
        User->logout();
        header("Location: ../index.php");
        exit();
    }
    if($_GET['action'] === "register") {
        if(isset($_POST['email'])) User->register($_POST);
        header("Location: ../index.php");
        exit();
    }
}
header("Location: ../index.php");