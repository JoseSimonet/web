<?php
session_start();

// initializing variables
$username = "";
$email_1    = "";
$errors = array(); 

define("DB_SERVER", "localhost:3306");
define("DB_USER", "proyecto");
define("DB_PASSWORD", "admin");
define("DB_DATABASE", "manageppp");

$db = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
$db->set_charset("utf8");

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $surname = mysqli_real_escape_string($db, $_POST['surname']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email_1 = mysqli_real_escape_string($db, $_POST['email_1']);
  $email_2 = mysqli_real_escape_string($db, $_POST['email_2']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $birthday = mysqli_real_escape_string($db, $_POST['birthday']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "El nombre es obligatorio"); }
  if (empty($surname)) { array_push($errors, "El apellido es obligatorio"); }
  if (empty($username)) { array_push($errors, "El nombre de usuario es obligatorio"); }
  if (empty($email_1)) { array_push($errors, "El email es obligatorio"); }
  if (empty($password_1)) { array_push($errors, "La contraseña es obligatoria"); }
  if ($email_1 != $email_2) {
  array_push($errors, "Los emails no coinciden");
  }
  if ($password_1 != $password_2) {
	array_push($errors, "Las contraseñas no coinciden");
  }
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM Users WHERE username='$username' OR email='$email_1' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "El nombre de usuario ya existe");
    }

    if ($user['email'] === $email_1) {
      array_push($errors, "El email ya está en uso");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

$query = "INSERT INTO Users (name, surname, username, email, password, birthday) VALUES ('$name', '$surname', '$username', '$email_1', '$password', '$birthday');";
    mysqli_query($db, $query);
      $_SESSION['username'] = $username;
      $_SESSION['name'] = $name;
      $_SESSION['surname'] = $surname;
      $_SESSION['email'] = $email_1;
      $_SESSION['birthday'] = $birthday;

    $_SESSION['success'] = "You are now logged in";
    header('location: loged.php');

  }
  
}

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

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM Users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['name'] = $user['name'];
      $_SESSION['surname'] = $user['surname'];
      $_SESSION['email'] = $user['email'];
      $_SESSION['birthday'] = $user['birthday'];
      $_SESSION['success'] = "You are now logged in";
      header('location: loged.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}

?>