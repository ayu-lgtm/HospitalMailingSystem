<?php
session_start();
header('location:log.php');
$con=mysqli_connect('sql303.epizy.com','epiz_26880180','f4QXRsYZxRvp35');
mysqli_select_db($con,'epiz_26880180_mydb');
$name=$_POST['user'];
$pass=$_POST['password'];
$s="select * from usertable where name='$name'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
	echo"username Already Taken";
}else{
	$reg="insert into usertable(name,password) values ('$name','$pass')";
	mysqli_query($con,$reg);
	echo"Registration Successful";
	
}
?>