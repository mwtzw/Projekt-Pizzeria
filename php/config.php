<?php
if (!isset($_SESSION)) { session_start(); }
define("MYSQL_USER", 'szkola');
define("MYSQL_PASSWORD", 'szkola');
define("MYSQL_HOST", 'localhost');
define("MYSQL_DATABASE", 'pizzeria');

error_reporting(E_ALL);
