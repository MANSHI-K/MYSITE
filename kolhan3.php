<!DOCTYPE html>
<html lang="en">
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
      padding-left: 50px;
      list-style: none;
      
      font-size: 30px;
    }
    #m2 ol li a {
      color: white;
      text-decoration: none;
    }
    p
    {
      margin-top: 6px;
   	  padding-left:500px;
   	  font-size:50px;
      color:black;
    }
    #m3
    {
      text-align:center;
    }
    </style>
</head>
<body>
<div id="main">
    <div id="m1"><img src="logo.jpg"></div>
    <div id="m2">
      <ol>
        <li><a href="kolhan.php">Home</a></li>
      </ol>
    </div>
  </div>
  <p>Sem-1 Admit Card </p>
  <div id="m3">

			
				<form action="login3.php" method="post">
					
				    <label for="name">Name:</label>
					<input type="text" id="name" name="name"><br><br><br>
					<label for="email">Email:</label>
					<input type="email" id="email" name="email"><br><br><br>
					<label for="password">Password:</label>
					<input type="password" id="password" name="password"><br><br><br>
          dob:<input type="date"><br><br>
          courses:<select>
                    <option>B.A</option>
                    <option>B.COM</option>
                    <option>B.Sc</option>
                    <option>BBA</option>
                    <option>B.Ed</option>
                  </select>  <br><br>
					<input type ="Submit" value="Login">
                    
				</form>
  </div>

</body>
</html>