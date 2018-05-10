<?php
session_start();
header('Content-Type: application/json');

$pdo = new PDO("mysql:dbname=manageppp;host=localhost", "proyecto", "admin");

$accion = (isset($_GET['accion'])) ? $_GET['accion'] : 'leer';

switch ($accion) {
case 'agregar':
	// Instrucción agregado
	$sentencia = $pdo->prepare("INSERT INTO Events(title,descripcion,color,textColor,start,end,userId) VALUES (:title,:descripcion,:color,:textColor,:start,:end,:userId)");

	$res = $sentencia->execute(array(
		"title" => $_POST['title'],
		"descripcion" => $_POST['descripcion'],
		"color" => $_POST['color'],
		"textColor" => $_POST['textColor'],
		"start" => $_POST['start'],
		"end" => $_POST['end'],
		"userId" => $_POST['userId'],
	));

	echo json_encode($res);
	break;

case 'eliminar':
	//Instrucción eliminar

	if (isset($_POST['id'])) {

		$sentencia = $pdo->prepare("DELETE FROM Events WHERE id=:id");
		$res = $sentencia->execute(array("id" => $_POST['id']));
	}
	echo json_encode($res);
	break;

case 'modificar':
	//Instrucción modificar
	$sentencia = $pdo->prepare("UPDATE Events SET
		title=:title,
		descripcion=:descripcion,
		color=:color,
		textColor=:textColor,
		start=:start,
		end=:end
		WHERE id=:id;
		");

	$res = $sentencia->execute(array(
		"id" => $_POST['id'],
		"title" => $_POST['title'],
		"descripcion" => $_POST['descripcion'],
		"color" => $_POST['color'],
		"textColor" => $_POST['textColor'],
		"start" => $_POST['start'],
		"end" => $_POST['end'],
		"userId" => $_POST['userId'],
	));

	echo json_encode($res);
	break;

default:
	$sentencia = $pdo->prepare("SELECT * FROM Events where Events.userId =" . $_SESSION['id']);
	$sentencia->execute();
	$res = $sentencia->fetchAll(PDO::FETCH_ASSOC);
	echo json_encode($res);
	break;
}

?>