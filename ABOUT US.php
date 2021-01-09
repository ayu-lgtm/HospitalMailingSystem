<?php
session_start();
if(!isset($_SESSION['username'])){
header('location:log.php');
}
?>
<html>
    <style>
        .ppp{
            background:url("https://wallpapercave.com/wp/YHlk56g.jpg");
            background-position:center;
            background-repeat:no-repeat;
            background-size:cover;
            margin:10px 10px;
            font-family:Trebuchet MS, sans-serif;
        }   
	    .sss{
	        background:url("https://wallpapercave.com/wp/YHlk56g.jpg");
            background-position:center;
            background-repeat:no-repeat;
            background-size:cover;
            margin:20px 10px;
            font-family:Trebuchet MS, sans-serif;
	    } 
	    body{
		    background:url("https://i.pinimg.com/originals/f6/15/74/f615740d8ec75ad36e322ecd9da8b129.gif");
            background-position:center;
            background-repeat:no-repeat;
            background-size:cover;
            margin:20px 10px;
	    }
        .inner2{
            width:100%;
            height:15%;
            backgroun-color:silver;
            color:yellow;
        }
        a{
            color:white;
            text-shadow: 2px 2px 4px #000000;
            font-FAMILY:Gill Sans,sans-serif;
        }
        .kkk{
            color:white;
            text-shadow: 2px 2px 4px #000000;
            font-FAMILY:Gill Sans,sans-serif;
        }
        .inner1{
            width:100%;
            height:5%;
            background-color:none;
            color:silver;
        }
.field1{
    background-image:url("https://c4.wallpaperflare.com/wallpaper/636/636/890/line-strip-grey-background-wallpaper-preview.jpg" );
            background-repeat:no-repeat;
            background-position:center;
            padding:5px 5px;
            background-size:cover;
}
</style>

    
<body>
<fieldset class="field1" >
    <div class="inner1">
    <pre><marquee><h3>
       EVERYDAY AT 9:00 AM TO 9:00 PM           BUT FOR EMERGENCY SEVICES="IT WILL OPEN 24 HOURS(CRITICAL CONDITION PATIENTS ALLOWED)"        NEAR IIM 263254 GORAKHPUR UTTERPRADESH  </h3></marquee>   
    </pre>
    </div>
    <div class="inner2">
    <table width="100%" height="5%">
    <tr>
    <td width="15%">
    &nbsp;<img src="https://marketplace-assets-production.s3-us-west-2.amazonaws.com/vault/items/preview-57bac524-6254-4fc8-a395-671c0a14153b-6MOww.jpg" width="100%">
    </td>
    <td width="35%">
    &nbsp;<h1 class="kkk">Medicative</h1>
    </td>
    <td width="50%">
    <a href="doctor.php"> HOME </a>
    &nbsp;&nbsp;<a href="ABOUT US.php"> ABOUT PROJECT </a>
    &nbsp;&nbsp;<a href="https://cpanel.epizy.com/panel/indexpl.php?id=32800d6bfc51cd8fd3d62b30ff8b2388ad272ade"> PATIENT DETAILS </a>
    &nbsp;&nbsp;<a href="Ayush.php"> CONTACT US </a>
    </td>
</tr>
</table>

</div><br>
</fieldset>
       <center><h1><u style="color:WHITE">DOCTOR OPPINTMENT BOOKING SYSTEM</u></h1></center><br><br><br>
	   <fieldset class="sss" width="50px">
	   <table width="100%">
	   <tr>
	      <td width="10%"></td>
	      <td width="60%"> <font face="cursive" color="black"><p><h3 >The proposed project is a smart appointment booking system that provides patients or any user an easy way of booking a doctor’s appointment online. This is a web based application that overcomes the issue of managing and booking appointments according to user’s choice or demands. The task sometimes becomes very tedious for the compounder or doctor himself in manually allotting appointments for the users as per their availability. Hence this project offers an effective solution where users can view various booking slots available and select the preferred date and time. The already booked space will be marked yellow and will not be available for anyone else for the specified time. This system also allows users to cancel their booking anytime. The application uses Asp.net as a front-end and sql database as the back-end.</h3><p>
		  <td width="20%"><img src="https://www.freepnglogos.com/uploads/doctor-png/doctor-physician-icon-25.png"></td>
		  <td width="10%"></td>
	   </tr>
	   </table>
       </fieldset>
	   <fieldset class="ppp">
	   <table width="100%">
	   <tr>
	      <td width="10%"></td>
	      <td width="10%" align=><h3>MODULES:</h3></td>
		  <td width="80%"></td>
	   </tr>
	   </table>
	   <table width="100%">
	   <tr>
	      <td width="20%"></td>
		  <td width="60%"><p>
		                    <ol>
							  <li><b><u>User login/registration:</u></b>  Users have to first register themselves to login into the system. </li><br>
							  <li><b><u>Appointment availability:</u></b>  User can submit form if date and time is not use in more than one time.</li><br>
							  <li><b><u>Appointment booking online for date and time:</u></b>  Users can book appointment for their required date and time.</li><br>
							  <li><b><u>Automatic cost calculation:</u></b>  The system calculates the total cost incurred for parking based on the time that user has asked for booking.</li><br>
							  <li><b><u>Booking cancellation:</u></b>  User may even cancel their bookings by login into the system anytime. </li><br>
							  <li><b><u>Email on appointment booking:</u></b>  When user is successful in appointment  confirmation and 'thank you' email regarding the alot booked.</li><br>
							  </ol>
							</p>
							</td>
		  <td width="20%"></td> 
		</table>
		</fieldset>
		<fieldset class="sss">
		<table width="100%">
		<tr>
		   <td width="20%"><h3><b><u>USER SIDE FUNCTIONALITY:</u></b></h3></td>
		   <td width="80%></td>
		</tr>
		</table>
		<table width="100%">
		<tr>
		   <td width="20%"></td>
		   <td width="60%"><p>
		                   <ul type="circle">
						      <li >Book appointment</li>
							  <li>Request for cancellation using contact us web page</li>
                              <li>Receipt</li>
							</ul>
							</p>
							</td>
		   <td width="20%"></td>
		   </tr>
		  </table>
		<table width="100%">
		<tr>
		   <td width="20%"><h3><b><u>ADMIN SIDE FUNCITIONALITY:</u></b></h3></td>
		   <td width="80%></td>
		</tr>
		</table>
		<table width="100%">
		<tr>
		   <td width="20%"></td>
		   <td width="60%"><p>
		                   <ul type="circle">
							  <li>Cancellation</li>
                              <li>view user data</li>
                              <li>reply </li> 
							</ul>
							</p>
							</td>
		   <td width="20%"></td>
		   </tr>
		  </table>
			<table width="100%">
		<tr>
		   <td width="20%"><h3><b><u>SOFTWARE REQUIREMENT:</u></b></h3></td>
		   <td width="80%></td>
		</tr>
		</table>
		<table width="100%">
		<tr>
		   <td width="20%"></td>
		   <td width="60%"><p>
		                   <ul type="circle">
						      <li >Windows Xp, Windows 7(ultimate, enterprise),windows 10 </li>
							  <li>Sql</li>
                              <li>xampp server</li>
                              <li>Hardware Components</li> 
							</ul>
							</p>
							</td>
		   <td width="20%"></td>
		   </tr>
		  </table>
	  	<table width="100%">
		<tr>
		   <td width="20%"><h3><b><u>DISADVANTAGES:</u></b></h3></td>
		   <td width="80%></td>
		</tr>
		</table>
		<table width="100%">
		<tr>
		   <td width="20%"></td>
		   <td width="60%"><p>
		                   <ul type="circle">
						      <li > It requires an internet connection.</li>
							  <li> It requires large database.</li>
                              <li> IT requires security.</li>
							</ul>
							</p>
							</td>
		   <td width="20%"></td>
		   </tr>
		  </table>
		  	<table width="100%">
		<tr>
		   <td width="20%"><h3><b><u>APPLICATIONS:</u></b></h3></td>
		   <td width="80%></td>
		</tr>
		</table>
		<table width="100%">
		<tr>
		   <td width="20%"></td>
		   <td width="60%"><p>
		                   <ul type="circle">
						      <li >The project can be implemented in hospitals and clinics
It can be utilized by companies and organizations (hospitals, schools, colleges) to automate their parking system.</LI>
							</ul>
							</p>
							</td>
		   <td width="20%"></td>
		   </tr>
		  </table>
		   </fieldset>
   
    <table>
        <strong><body>
        <a class="float-right" href="logout.php" style="color:white">LOGOUT</a>
        <h1 style="color:white">Welcome <?php echo $_SESSION['username']; ?> </h1>
        </strong>
    </table>  
   </BODY>
</html>