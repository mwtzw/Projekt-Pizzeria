<?php
if (!isset($_SESSION)) { session_start(); }
define("MYSQL_USER", 'root');
define("MYSQL_PASSWORD", '');
define("MYSQL_HOST", 'localhost');
define("MYSQL_DATABASE", 'pizzeria');
if (!isset($_SESSION['message'])) $_SESSION['message'] = array("type" => "error", "message" => "",  "title" => "");