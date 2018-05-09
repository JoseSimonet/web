<?php
	session_start();
	unset($_SESSION['username']);

if (session_destroy()) {
    echo "Sesión destruida correctamente";
} else {
    echo "Error al destruir la sesión";
}

	header("location: login.php");

?>