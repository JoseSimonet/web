<?php
header('Content-Type: application/json');

$pdo = new PDO("mysql:dbname=manageppp;host=localhost", "proyecto", "admin");

$sentencia = $pdo->prepare("SELECT * FROM Events");
$sentencia->execute();

$res = $sentencia->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($res);
?>