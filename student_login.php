<?php
session_start();
date_default_timezone_set('Asia/Kolkata');

if(isset($_POST['student_login']))
{
 $aVar=mysqli_connect('localhost','id5399154_root','atikrant007','id5399154_mydatabase') or die(mysqli_error());
 
 $Email=$_POST['login_email'];
 $password=$_POST['login_password'];
 if($Email!='' && $password!='' )
 {
 
   $query=mysqli_query($aVar,"select * from register_student where Email='".$Email."' and password='".$password."'") or die(mysqli_error());
   $res=mysqli_fetch_row($query);
   if($res)
   {
    $_SESSION['login_email']=$Email;

    header('location:home1.html');
		
    $to      = 'aj123800@gmail.com';
    $subject = 'Login notification';
    $message =  $Email. "  is logged in at ".date("h:i:sa");
    $headers = "From: webmaster@xyz.com"."\r\n" .
    "Reply-To: webmaster@example.com"."\r\n".  
    "X-Mailer: PHP/" . phpversion();

    mail($to, $subject, $message, $headers);	
    

   }
   else
   {
    echo"Entered username or password is incorrect"."<br>"."Go back again and try to login with correct credentials";
		
   }
 }
 else
 {
  echo"Enter both username and password";
 }
}
?>