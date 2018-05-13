<?php
define("DB_SERVER", "localhost");
define("DB_USER", "id5746199_proyecto");
define("DB_PASSWORD", "admin");
define("DB_DATABASE", "id5746199_manageppp");

$db = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
$db->set_charset("utf8");
$base_url = 'https://manageyourtime.000webhostapp.com/email_activation/';
?>
