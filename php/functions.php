<?php require("config.php");

    function getDataFromDatabase(string $query) {
        $result = new stdClass();
        try {
            $server = new mysqli(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DATABASE);
            $r = $server->query($query);
        
            $result->success = 1;
            $result->error = null;
            $result->resultNum = $r->num_rows;
            $result->results = $r->fetch_all();
        
            $r->free_result();
            $server->close();

            return $result;
        } 
        catch(Exception $e) {
            $result->success = 0;
            $result->error = $e;
            $result->resultNum = null;
            $result->results = null;
            return $result;
        }
    }

    function loginUser(string $username, string $password) {
        try {
            $password = md5($password);
            $result = getDataFromDatabase("SELECT * FROM users WHERE email = '$username' AND password = '$password'");
            if($result->resultNum === 1) $_SESSION['userSignedIn'] = true;
            else return false;
            return true;
        } 
        catch (Exception $e) {
            return false;
        }
    }

    function logoutUser() {
        session_destroy();
        header('Location: ../index.html');
        exit();
    }
