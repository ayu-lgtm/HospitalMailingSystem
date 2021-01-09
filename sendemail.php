<?php include 'technic.php'; ?>


<?php
use PHPMailer\PHPMailer\PHPMailer;
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $Name = $_POST['Name'];
  $Gender = $_POST['Gender'];
  $Age = $_POST['Age'];
  $DOB = $_POST['DOB'];
  $MobileNo = $_POST['MobileNo'];
  $Are = $_POST['Are'];
  $Email = $_POST['Email'];
  $password = $_POST['password'];
  $Massege = $_POST['Massege'];
  $doctor = $_POST['doctor'];
  $oppointmentdate = $_POST['oppointmentdateandtime'];


  

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = $Email; // Gmail address which you want to use as SMTP server
    $mail->Password = $password; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom($Email); // Gmail address which you used as SMTP server
    $mail->addAddress($Email); 
    $mail->addAddress('rastogi.ayush2000@gmail.com');  // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'HELLO PATIENT';
    $mail->Body = "<h3>Name : $Name <br>Gender : $Gender <br>Age : $Age <br>DOB : $DOB <br>MobileNo : $MobileNo <br>Are_you_infected : $Are <br>Email : $Email <br>doctor : $doctor <br>oppointment_date_time : $oppointmentdate<br><br> $Massege <br> </h3>";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span>Message Sent! Form Has Been Submitted.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
} 
?>

<?php echo $alert; ?>
<!--alert messages end-->
<html>
<style>
fieldset{
background-image:url("https://cdn.hipwallpaper.com/i/96/66/kgilyK.jpg");
}
</style>
   <body style="background-color:skyblue">
   <fieldset>
        <h2><mark><a href="doctor.php">GO BACK TO HOME</a></mark></h2>
   </fieldset>
   </body>
</html>
