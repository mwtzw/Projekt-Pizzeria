<?php
session_start();
define("MYSQL_USER", 'root');
define("MYSQL_PASSWORD", '');
define("MYSQL_HOST", 'localhost');
define("MYSQL_DATABASE", 'pizzeria');
$_SESSION['userSignedIn'] = false;
