<?php
session_start();

$con=mysqli_connect('sql303.epizy.com','epiz_26880180','f4QXRsYZxRvp35');
mysqli_select_db($con,'epiz_26880180_mydb');
$name=$_POST['user'];
$pass=$_POST['password'];
$s="select * from usertable where name='$name'&&password='$pass'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
	$_SESSION['username']=$name;
	header('location:doctor.php');
}else{
	header('location:log.php');
	
}
?>