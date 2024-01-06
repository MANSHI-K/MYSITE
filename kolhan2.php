<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		
		#main {
      background-color: blue;
      display: flex;
      justify-content: space-between;
      border-bottom-style: solid;
      border-width: 1px;
      border-color: blue;
    }

    #m1 img {
      top: 10px;
      height: 100px;
      width: 100px;
    }

    #m2 ol li {
      float: left;
      padding-left: 20px;
      list-style: none;
      
      font-size: 25px;
    }
    #m2 ol li a {
      color: white;
      text-decoration: none;
    }
   #main2
   {
   	position:relative;
   }
   #m3
   {
   	background-color: white;
   	height: 500px;
   	width:30%;
   	position: absolute;
   	top:20px;
   	margin-left: 90px;
    border-top-style: solid;
    border-bottom-style: solid;
    border-right-style: solid;
    border-left-style: solid;
    border-width: 1px;
   }
   #m4
   {
   	background-color: white;
   	height: 500px;
   	width:30%;
   	position: absolute;
   	top:20px;
   	margin-left: 800px;
    border-top-style: solid;
    border-bottom-style: solid;
    border-right-style: solid;
    border-left-style: solid;
    border-width: 1px;
   }
   h1
   {
   	padding-left: 20px;
   	border-bottom-style: solid;
   	border-width:1px;
   	font-size:27px;
   	background-color: blue;
   }
   h2
   {
   	padding-left: 20px;
   	border-bottom-style: solid;
   	border-width:1px;
   	font-size:20px;
   }
   h3
   {
     padding-left: 20px;
   	 border-bottom-style: solid;
   	 border-width:1px;
   	 font-size:20px;
   }
   h4
   {
     padding-left: 20px;
   	 border-bottom-style: solid;
   	 border-width:1px;
   	 font-size:20px;
   }
   h5
   {
   	 padding-left: 20px;
   	 border-bottom-style: solid;
   	 border-width:1px;
   	 font-size:20px;
   }
   h6
   {
   	 padding-left: 20px;
   	 font-size:20px;
   }
   #m5
   {
   	background-color: green;
   	height: 30px;
   	width: 300px;
   	margin-top: 220px;
   	margin-left: 40px;
   	text-align: center;
   	font-size: 25px;
   }
   p
   { 
   	 margin-top: 6px;
   	 padding-left: 40px;
   	 font-size:20px;
   }
   p
   {
   	 margin-top:2px;
   	 padding-left: 40px;
   	 font-size:30px;
   }
   p
   {
   	 margin-top: 2px;
   	 padding-left: 40px;
   	 font-size:20px;
   }
   #m6
   {
   	background-color: red;
   	height: 30px;
   	width: 300px;
   	margin-top: 40px;
   	margin-left: 40px;
   	text-align: center;
   	font-size: 25px;
   }
   label#k1
   {
	margin-top: 50px;
    margin-left:40px;
	font-size: 27px;
   }
   #m4
   input[type="submit"]
   {
	margin-left: 180px;
   }
   input[type="password"]
   {
	font-size:12px ;
   }

   

   
  
  
  



   
		
	</style>
</head>
<body>
	<div id="main">
		<div id="m1"><img src="logo.jpg"></div>
		<div id="m2">
		  <ol>
			<li><a href="kolhan.php">Home</a></li>
			<li><a href="aa.php">About Us</a></li>
			<li><a href="#">Contact Us</a></li>
		  </ol>
		</div>
	  </div>
	<div id="main2">
		<div id="m3"><h1>Instructions for Student Login</h1>
			<h2>1. Before filling up the exam form,please read the instructions carefully.</h2>
			<h3>2. Enter your user name and password that was provided at time of user creation.</h3>
			<h4>3. Fill all the details,which are provided in the Registration slip.</h4> 
			<h5>4. Please check all the details before payment.</h5>
			<h6>5. Downloaded Examform slip should be kept safety for furure references.</h6></div>
		<div id="m4">

			
				<form action="login2.php" method="post">
					
				    <label for="name">Name:</label>
					<input type="text" id="name" name="name"><br><br><br>
					<label for="email">Email:</label>
					<input type="email" id="email" name="email"><br><br><br>
					<label for="password">Password:</label>
					<input type="password" id="password" name="password"><br><br><br>
					<input type ="Submit" value="Login">
                    
				</form>
			
			
			<p><a href="#">Forgot Password?</a></p><br/>
			<p><a href="#">click here to complete user creation process</a></p><br/>
			<p>Do not have an account?</p><br>
			<p><a href="registration i.php">Registration for New User</a></p>
		</div>	
	</div>

</body>
</html>
