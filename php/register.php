<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="guvi_task";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	 $username = $_POST['username'];
	 $email = $_POST['email'];
	 $password = $_POST['password'];
	 $password2 = $_POST['password2']; 
     
      
     if ($stmt = $conn->prepare('SELECT id, password FROM information WHERE username = ?')) {
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();
	if ($stmt->num_rows > 0) {
		
		echo 'Username exists, please choose another!';
	} 
      else {
          $sql_query = "INSERT INTO information (username,email,password,password2)
	 VALUES ('$username','$email','$password','$password2')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		session_start();
           session_destroy();
           header('Location: http://localhost/Guvi_Project/login.html');
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
           }
	} 
}
?>
