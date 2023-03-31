<?php require("functions.php");
if(isset($_POST['email'])) User->loginUser($_POST);
header("Location: /index.php");