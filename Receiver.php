<?php
include("Executer.php");

define("USER", $_POST["USER"]);
define("EMAIL", $_POST["EMAIL"]);
define("VALIDATION_PASSWORD", $_POST["VALIDATION_PASSWORD"]);
define("REQUEST", $_POST["REQUEST"]);
define("REQUEST_ID", $_POST["REQUEST_ID"]);

$executer = new Executer();
$executer->execute(USER, EMAIL, VALIDATION_PASSWORD, REQUEST, REQUEST_ID);
?>