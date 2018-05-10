<?php
include "database.php";
include "Email.php";
session_start();

// inicializando variables
$username = "";
$email_1 = "";
$errors = array();
$success = array();

// Registro
if (isset($_POST['reg_user'])) {
	// Recibe los valores de los inputs del registro.
	$name = mysqli_real_escape_string($db, $_POST['name']);
	$surname = mysqli_real_escape_string($db, $_POST['surname']);
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$email_1 = mysqli_real_escape_string($db, $_POST['email_1']);
	$email_2 = mysqli_real_escape_string($db, $_POST['email_2']);
	$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
	$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
	$birthday = mysqli_real_escape_string($db, $_POST['birthday']);

	// Validación: Se comprueba de que esté completamente rellenado ...
	// al añadir (array_push()) se añade el error al array $errors.
	if (empty($name)) {array_push($errors, "El nombre es obligatorio");}
	if (empty($surname)) {array_push($errors, "El apellido es obligatorio");}
	if (empty($username)) {array_push($errors, "El nombre de usuario es obligatorio");}
	if (empty($email_1)) {array_push($errors, "El email es obligatorio");}
	if (empty($password_1)) {array_push($errors, "La contraseña es obligatoria");}

	if ($email_1 != $email_2) {
		array_push($errors, "Los emails no coinciden");
	}
	if ($password_1 != $password_2) {
		array_push($errors, "Las contraseñas no coinciden");
	}

	//Se comprueba la validez del nombre de usuario.
	if (strlen($username) < 6 || strlen($username) > 10) {
		array_push($errors, "El nombre de usuario debe tener entre 6 y 10 caracteres");
	}if (!preg_match('/(?=\d)/', $username)) {
		array_push($errors, "El nombre de usuario debe contener al menos un dígito");
	}if (!preg_match('/(?=[A-Z])/', $username)) {
		array_push($errors, "El nombre de usuario debe contener al menos una mayúscula");
	}

	//Se comprueba la seguridad de la contraseña.
	if (strlen($password_1) < 6 || strlen($password_1) > 10) {
		array_push($errors, "La contraseña debe tener entre 6 y 10 caracteres");
	}if (!preg_match('/(?=[$@#%&]|-|_)/', $password_1)) {
		array_push($errors, "La contraseña debe contener al menos uno de los siguientes caracteres: $@#%&-_");
	}if (!preg_match('/(?=\d)/', $password_1)) {
		array_push($errors, "La contraseña debe contener al menos un dígito");
	}if (!preg_match('/(?=[a-z])/', $password_1)) {
		array_push($errors, "La contraseña debe contener al menos una minúscula");
	}if (!preg_match('/(?=[A-Z])/', $password_1)) {
		array_push($errors, "La contraseña debe contener al menos una mayúscula");
	}

	//Se comprueba la validez del email.
	if (!filter_var($email_1, FILTER_VALIDATE_EMAIL)) {
		array_push($errors, "Email no válido");
	}

	// Primero se comprueba en la BD que no existe un usuario con el mismo username o email
	$user_check_query = "SELECT * FROM Users WHERE username='$username' OR email='$email_1' LIMIT 1";
	$result = mysqli_query($db, $user_check_query);
	$user = mysqli_fetch_assoc($result);

	if ($user) {
		// si existe el usuario...
		if ($user['username'] === $username) {
			array_push($errors, "El nombre de usuario ya existe");
		}

		if ($user['email'] === $email_1) {
			array_push($errors, "El email ya está en uso");
		}
	} else {
		$code = md5($email_1 . time());
	}

	// Finalmente, se da lugar al registro si no han ocurrido errores.
	if (count($errors) == 0) {
		//Se encripta la contraseña antes de almacenarse en la BD.
		$password = md5($password_1);

		$query = "INSERT INTO Users (name, surname, username, email, password, birthday, code) VALUES ('$name', '$surname', '$username', '$email_1', '$password', '$birthday', '$code')";
		mysqli_query($db, $query);

		//Guardamos en la sesión los campos necesarios más adelante.
		$_SESSION['username'] = $username;
		$_SESSION['name'] = $name;
		$_SESSION['surname'] = $surname;
		$_SESSION['email'] = $email_1;
		$_SESSION['birthday'] = $birthday;

		//Se procede a a enviar el email de verificación
		$to = $email_1;
		$subject = "Email verification";
		$body = 'Saludos ' . $name . ' ' . $surname . ', <br/> <br/> Necesitamos comprobar que eres humano. Por favor, verifique su email para que pueda demostrarlo. <br/> <br/> <a href="' . $base_url . 'activation.php?code=' . $code . '">' . $base_url . 'activation.php?code=' . $code . '</a> <p>Username: ' . $username . '<br/>Password: ' . $password_1 . '</p>';

		Send_Mail($to, $subject, $body);

		array_push($success, "Compruebe su correo entrante para completar el registro.");
	}

}
//Login
if (isset($_POST['login_user'])) {
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	$user_check_query = "SELECT * FROM Users WHERE username='$username' OR email='$email_1'";
	$result = mysqli_query($db, $user_check_query);
	$user = mysqli_fetch_assoc($result);

	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	if (($user['username'] == $username) && ($user['password'] == $password) && ($user['status'] == 0)) {
		array_push($errors, "Pendiente de verificar la cuenta.");
	}

	if (count($errors) == 0) {
		$password = md5($password);
		$query = "SELECT * FROM Users WHERE username='$username' AND password='$password'";
		$results = mysqli_query($db, $query);
		if (mysqli_num_rows($results) == 1) {
			$_SESSION['id'] = $user['id'];
			$_SESSION['username'] = $username;
			$_SESSION['name'] = $user['name'];
			$_SESSION['surname'] = $user['surname'];
			$_SESSION['email'] = $user['email'];
			$_SESSION['birthday'] = $user['birthday'];
			$_SESSION['success'] = "Ahora está logeado.";
			header('location: loged.php');
		} else {
			array_push($errors, "Usuario y/o contraseña incorrectos.");
		}
	}
}

?>