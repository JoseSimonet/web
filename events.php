<?php
header('Content-Type: application/json');

$pdo = new PDO("mysql:dbname=manageppp;host=localhost", "proyecto", "admin");

$accion = (isset($_GET['accion'])) ? $_GET['accion'] : 'leer';

switch ($accion) {
case 'agregar':
	// Instrucción agregado
	$sentencia = $pdo->prepare("INSERT INTO Events(title,descripcion,color,textColor,start,end) VALUES(:title,:descripcion,:color,:textColor,:start,:end)");

	$res = $sentencia->execute(array(
		"title" => $_POST['title'],
		"descripcion" => $_POST['descripcion'],
		"color" => $_POST['color'],
		"textColor" => $_POST['textColor'],
		"start" => $_POST['start'],
		"end" => $_POST['end'],
	));

	echo json_encode($res);
	break;

case 'eliminar':
	//Instrucción eliminar
	$res = false;
	$sentencia = $pdo->prepare("UPDATE Events SET
		title=:title,
		descripcion=:descripcion,
		color=:color,
		textColor=:textColor,
		start=:start,
		end=:end
		WHERE Id=:Id;
		");
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
		WHERE Id=:Id;
		");
	break;

default:
	$sentencia = $pdo->prepare("SELECT * FROM Events");
	$sentencia->execute();

	$res = $sentencia->fetchAll(PDO::FETCH_ASSOC);
	echo json_encode($res);
	break;
}

?>