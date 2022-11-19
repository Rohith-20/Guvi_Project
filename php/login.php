<?php
session_start();
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'guvi_task';
$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
if ( !isset($_POST['username'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	exit('Please fill both the username and password fields!');
}

if ($stmt = $conn->prepare('SELECT id, password FROM information WHERE username = ?')) {
	
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();
if ($stmt->num_rows > 0) {
	$stmt->bind_result($id, $password);
	$stmt->fetch();
	if ($_POST['password'] === $password) {
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['name'] = $_POST['username'];
		$_SESSION['id'] = $id;
           header('Location: http://localhost/Guvi_Project/php/profile.php');

	} else {
		echo 'Incorrect username and/or password!';
	}
} else {
	echo 'Incorrect username and/or password!';
}


	$stmt->close();
}
?>