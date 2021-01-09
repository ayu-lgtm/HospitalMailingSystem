
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <style> 
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }
        body{
            min-height: 100vh;
            background: url("https://www.ifelsetech.com/wp-content/uploads/2013/06/slider1-1.jpg") no-repeat;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .contact-section{
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .contact-info{
            color: #fff;
            max-width: 500px;
            line-height: 65px;
            padding-left: 50px;
            font-size: 18px;
        }
        .contact-info i{
            margin-right: 20px;
            font-size: 25px;
        }
        .contact-form{
            max-width: 700px;
            margin-right: 50px;
        }
        .contact-info, .contact-form{
            flex: 1;
        }
        .contact-form h2{
            color: #fff;
            text-align: center;
            font-size: 35px;
            text-transform: uppercase;
            margin-bottom: 30px;
        }
        .contact-form .text-box{

            border: none;
            width: calc(50% - 10px);
            height: 50px;
            padding: 12px;
            font-size: 15px;
            border-radius: 5px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            opacity: 0.9;
        }
        .contact-form .text-box:first-child{
            margin-right: 15px;
        }
        .contact-form textarea{

            border: none;
            width: 100%;
            padding: 12px;
            font-size: 15px;
            min-height: 200px;
            max-height: 400px;
            resize: vertical;
            border-radius: 5px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            opacity: 0.9;
        }
        .contact-form .send-btn{
            float: right;
            background: #2E94E3;
            color: #fff;
            border: none;
            width: 120px;
            height: 40px;
            font-size: 15px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
            transition-property: background;
        }
        .contact-form .send-btn:hover{
            background: #0582E3;
        }
    @media screen and (max-width: 950px)
    {
        .contact-section{
                        flex-direction: column;
        }
        .contact-info, .contact-form{
            margin: 30px 50px;
        }
        .contact-form h2{
            font-size: 30px;
        }
        .contact-form .text-box{
            width: 100%;
        }
    }
        .alert-success{
            z-index: 1;
            background: #D4EDDA;
            font-size: 18px;
            padding: 20px 40px;
            min-width: 420px;
            position: fixed;
            right: 0;
            top: 10px;
            border-left: 8px solid #3AD66E;
            border-radius: 4px;
        }
        .alert-error{
            z-index: 1;
            background: #FFF3CD;
            font-size: 18px;
            padding: 20px 40px;
            min-width: 420px;
            position: fixed;
            right: 0;
            top: 10px;
            border-left: 8px solid #FFA502;
            border-radius: 4px;
        }
    </style>


 </head>
    <title>Responsive Contact Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  <body>
  


    <!--contact section start-->
    <div class="contact-section">
      <div class="contact-info">
        <div><i class="fas fa-map-marker-alt"><a href="https://www.google.com/search?q=akgec%20hospital&oq=akgec+hospital&aqs=chrome..69i57.5383j0j15&sourceid=chrome&ie=UTF-8&sxsrf=ALeKk03-8wchAkpuJz16USooQBosBKUN4w:1603286121315&npsic=0&rflfq=1&rlha=0&rllag=28666757,77482191,2521&tbm=lcl&rldimm=3800463865277438930&lqi=Cg5ha2dlYyBob3NwaXRhbFoaCghob3NwaXRhbCIOYWtnZWMgaG9zcGl0YWw&ved=2ahUKEwiuxO-d4sXsAhXoyzgGHSF-AZ0QvS4wAHoECAMQMA&rldoc=1&tbs=lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!1m4!1u16!2m2!16m1!1e1!1m4!1u16!2m2!16m1!1e2!2m1!1e2!2m1!1e16!2m1!1e3!3sIAE,lf:1,lf_ui:2&rlst=f#rlfi=hd:;si:11061798763793638283;mv:[[28.7006537,77.5096557],[28.613099300000002,77.4116159]]" class="contact-info">Dr.Ram Saran Garg Indo German Hospital,Ghaziabad, India</a></i></div>
        <div><i class="fas fa-envelope"></i>rastogi.ayush2000@gmail.com</div>
        <div><i class="fas fa-phone"></i>+91 78448 14578 ,+91 63890 01116</div>
        <div><i class="fas fa-clock"></i>Mon - Sun 9:00 AM to 9:00 PM</div>


        <div>
        &nbsp; &nbsp;<a href="doctor.php" style="color:orange"> HOME </a>
        &nbsp; &nbsp;<a href="ABOUT US.php"style="color:orange"> ABOUT PROJECT </a>
         &nbsp; &nbsp;<a href="https://cpanel.epizy.com/panel/indexpl.php?id=32800d6bfc51cd8fd3d62b30ff8b2388ad272ade"style="color:orange"> PATIENT DETAILS </a>
         &nbsp; &nbsp;<a href="Ayush.php"style="color:orange"> CONTACT US </a>
        </div>
      </div>
      <div class="contact-form">
        <h2>Contact Us</h2>
        <form class="contact" action="" method="post">
          <input type="text" name="Name" class="text-box" placeholder="Your Name" required>
          <input type="text" name="Email" class="text-box" placeholder="ABC123@gmail.com" required>
          <textarea name="Massege" rows="5" placeholder="Your Message" required></textarea>
          <input type="submit" name="submit" class="send-btn" value="Send">
        </form>
      </div>
    </div>
  
    <!--contact section end-->

    <?php include 'contactmail.php'; ?>

    
        <!--alert messages start-->
        <?php echo $alert; ?>
        <!--alert messages end-->

  </body>
</html>