<?php
header('Content-Type: application/json; charset=utf-8');
include_once "connection.php";

class User {

	private $db;
	private $connection;

	function __construct() {
		$this->db = new DB_Connection();
		$this->connection = $this->db->getConnection();
	}

	public function does_user_exist($username, $password) {
		$user_check_query = "SELECT * FROM Users WHERE username='$username'";
		$result = mysqli_query($this->connection, $user_check_query);
		$campos = mysqli_fetch_assoc($result);
		if (mysqli_num_rows($result) == 1 && $campos['password'] == $password) {
			$json['success'] = "success";
			$json['username'] = $username;
			$json['name'] = $campos['name'];
			$json['surname'] = $campos['surname'];
			$json['birthday'] = $campos['birthday'];
			$json['email'] = $campos['email'];
			mysqli_close($this->connection);
		} else if (mysqli_num_rows($result) == 0) {
			$json['error'] = 'No existe el usuario introducido';
		} else {
			$json['error'] = 'Contraseña incorrecta';
		}
		echo json_encode($json);
		mysqli_close($this->connection);
	}

}

$user = new User();
if (isset($_POST['username'], $_POST['password'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	if (empty($username) && empty($password)) {
		$json['error'] = "Ambos campos son obligatorios";
	} else if (empty($username) && !empty($password)) {
		$json['error'] = "Usuario obligatorio";
	} else {
		$json['error'] = "Contraseña obligatoria";
	}

	if (!empty($username) && !empty($password)) {

		$password = md5($password);
		$user->does_user_exist($username, $password);

	} else {
		echo json_encode($json);
		echo json_encode("Ambos campos deben estar rellenados");
	}

}

?>