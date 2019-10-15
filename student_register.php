<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "id5399154_root", "atikrant007", "id5399154_mydatabase");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$Email = mysqli_real_escape_string($link, $_REQUEST['register_email']);
$username = mysqli_real_escape_string($link, $_REQUEST['register_userid']);
$contact = mysqli_real_escape_string($link, $_REQUEST['register_contact']);
$password = mysqli_real_escape_string($link, $_REQUEST['register_password']);


/*$hashFormat = "$2y$10$";
$salt = "iusesomecrazystrings22";
$hashF_and_salt = $hashFormat.$salt;

$password = crypt($password,$hashF_and_salt);
*/

// attempt insert query execution
	$sql = "INSERT INTO register_student (Email,username ,contact ,password) VALUES ('$Email', '$username', '$contact','$password')";
	if(mysqli_query($link, $sql)){
    	// echo "Records added successfully.";
    	header('location:index.html');
	} else{
    	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
   
// close connection
mysqli_close($link);
?>