<?php
include '../database.php';
$msg = '';
if (!empty($_GET['code']) && isset($_GET['code'])) {
	$cod = mysqli_real_escape_string($db, $_GET['code']);
	$c = mysqli_query($db, "SELECT id FROM Users WHERE code='$cod'");

	if (mysqli_num_rows($c) > 0) {
		$count = mysqli_query($db, "SELECT id FROM Users WHERE code='$cod' and status='0'");

		if (mysqli_num_rows($count) == 1) {
			mysqli_query($db, "UPDATE Users SET status='1' WHERE code='$cod'");
			$msg = "Tu cuenta ha sido activada. Ya puedes acceder a la cuenta creada.";
		} else {
			$msg = "Tu cuenta ya había sido activada.";
		}

	} else {
		$msg = "Código de activación incorrecto";
	}

}
?>
<?php echo $msg; ?>