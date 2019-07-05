<?php
session_start();
if(isset($_POST['admin_login']))
{
$con= mysqli_connect('localhost','id5399154_root','atikrant007','id5399154_mydatabase') or die(mysql_error());
 
 $username=$_POST['admin_user'];
 $admin_pwd=$_POST['admin_pass'];
 if($username!=''&& $admin_pwd!='')
 {
   $query=mysqli_query($con,"select * from admin_login where Email='".$username."' and password='".$admin_pwd."'") or die(mysql_error());
   $res=mysqli_fetch_row($query);
   if($res)
   {
    $_SESSION['admin_user']=$username;
    header('location:admin_home.html');
   }
   else
   {
    header('location:index.html');
   }
 }
 else
 {
  echo'Enter both username and password';
 }
}
?>