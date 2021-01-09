<?php

if(isset($_POST['submit']) &&isset($_POST['Name']) &&isset($_POST['Gender']) &&isset($_POST['Age']) &&isset($_POST['DOB']) &&isset($_POST['MobileNo']) &&isset($_POST['Are']) &&isset($_POST['Email']) &&isset($_POST['doctor']) &&isset($_POST['oppointmentdateandtime'])){
  $Name = $_POST['Name'];
  $Gender = $_POST['Gender'];
  $Age = $_POST['Age'];
  $DOB = $_POST['DOB'];
  $MobileNo = $_POST['MobileNo'];
  $Are = $_POST['Are'];
  $Email = $_POST['Email'];
  $Massege = $_POST['Massege'];
  $doctor = $_POST['doctor'];
  $oppointment = $_POST['oppointmentdateandtime'];}
  
  
$servername = "sql303.epizy.com";
$username = "epiz_26880180";
$password = "f4QXRsYZxRvp35";
$dbname = "epiz_26880180_ayush";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO doctor(name,Gender, Age,DOB,MobileNo,CORONA, Email,Massege,doctor,oppointment)
VALUES ('$Name', '$Gender', '$Age','$DOB','$MobileNo','$Are','$Email','$Massege','$doctor','$oppointment')";

if ($conn->query($sql) === TRUE) {
  echo "SUBMITTED";
}else{
    echo "error";
} 
$conn->close();
?>