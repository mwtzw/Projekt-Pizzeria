<?php
if (!isset($_SESSION)) { session_start(); }
define("MYSQL_USER", 'szkola');
define("MYSQL_PASSWORD", 'szkola');
define("MYSQL_HOST", 'localhost');
define("MYSQL_DATABASE", 'pizzeria');
if(!isset($_SESSION['isLoggedIn'])) {
    $_SESSION['isLoggedIn'] = false;
}
error_reporting(E_ALL);
