<?php
if(isset($_POST['submit']) &&isset($_POST['Name']) &&isset($_POST['Email']))

  $Name = $_POST['Name'];
  $Email = $_POST['Email'];
  $massege = $_POST['Massege'];
  
  
  $servername = "sql303.epizy.com";
  $username = "epiz_26880180";
  $password = "f4QXRsYZxRvp35";
  $dbname = "epiz_26880180_contact";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO contactus(name,Email,Massege)
VALUES ('$Name','$Email','$massege')";

if($conn->query($sql) === TRUE){
  $alert = '<div class="alert-success">
                 <span>Message Sent! Thank you for contacting us.</span>
                </div>';
}
$conn->close();
?>
