<?php
define("DB_SERVER", "localhost:3306");
define("DB_USER", "proyecto");
define("DB_PASSWORD", "admin");
define("DB_DATABASE", "manageppp");

$db = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
$db->set_charset("utf8");
$base_url = 'http://localhost/web/email_activation/';
?>
