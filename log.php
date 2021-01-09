<html>
<head>
<title> User Login And Registration</title>
         <style>
            body{
	            background:url("https://images.pexels.com/photos/127873/pexels-photo-127873.jpeg?auto=compress&cs=tinysrgb&dpr=1&                   w=500");
	            background-size:cover;
	            background-position:center;
                }

            .login-box{
	            max-width:700px;
	            float:none;
	            margin: 150px auto;
                }
            .login-left{
                background:rgba(211,211,211,0.5);
                padding:30px;
                }
            .login-right{
	            background:#ffe6e6;
	            padding:30px;
                }
            .form-control{
	            background-color:transparent!important;
            }
            .a{
	            color:#fff !important;
	            text-align:right;
	          }
            h1{
	            color:#fff !important;
	            text-align:right;
	            text-transform:uppercase;
                }
            .inner2{
                width:100%;
                height:15%;
                backgroun-color:silver;
                color:yellow;
                }
            </style>
           <link rel ="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
<center><a href="Ayush.php" Style="color:black"><h2> CONTACT US </h2></a></center>
<div class="container">
	<div class="login-box">
    <div class="row">
	<div class="col-md-6 login-left">
	  <h2>Login Here</h2>
	  <form action="validation.php" method="post">
	   <div class="form-group">
	     <label >Usename</label>
	     <input type="text" name="user" class="form-control" required>
	     </div>
	  <div class="form-group">
	  <label>Password</label>
	     <input type="password" name="password" class="form-control" required>
	      </div>
	        <button type="submit" class="btn btn-secondary">Login</button>
	    </form>
	  </div>
	  <div class="col-md-6 login-right">
	  <h2>Registration Here</h2>
	  <form action="registration.php" method="post">
	   <div class="form-group">
	     <label>Usename</label>
	     <input type="text" name="user" class="form-control" required>
	     </div>
	  <div class="form-group">
	  <label>Password</label>
	     <input type="password" name="password" class="form-control" required>
	      </div>
	        <button type="submit" class="btn btn-secondary">Register</button>
	    </form>
	  </div>
	  </div>
	  </div>
</body>
</html>