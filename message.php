<?php
$link = mysqli_connect("localhost", "id5399154_root", "atikrant007", "id5399154_mydatabase");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$Name = mysqli_real_escape_string($link, $_REQUEST['send_name']);
$Email = mysqli_real_escape_string($link, $_REQUEST['send_email']);
$Contact = mysqli_real_escape_string($link, $_REQUEST['send_contact']);
// $In_touch= $_POST['send_select'];
$Message = mysqli_real_escape_string($link, $_REQUEST['send_textarea']);
 
// attempt insert query execution
$sql = "insert into contact_table (Name,Email ,Contact,Message) values ('$Name','$Email','$Contact','$Message')";
if(mysqli_query($link, $sql)){
    header('location:contactus.html');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>