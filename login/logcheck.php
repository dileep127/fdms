<?php session_start(); ?>
<?php include('db_connection.php'); ?>
<?php

$username=$_POST['email'];
$password=$_POST['password'];

$sql="select * from login where username='$username' and password='$password' ";
$res=mysqli_query($conn,$sql);
if($username="admin@gmail.com"&&$password="12345")
{
$_SESSION['uname']=$username;
$type="admin";
if($type=="admin")
{
header('location:../admin/home.php');

}

else if($type=="officer")
{
header('location:../officer/home.php');

}

if($type=="public")
{
header('location:public/home.php');

}

}
else
{
?>
<script>
alert("Invalid User Name or password");
//document.location="login.php";
history.back();
</script>
<?php
}

?>
