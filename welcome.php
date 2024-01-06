
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
      padding-left: 20px;
      list-style: none;
      
      font-size: 25px;
    }
    #m2 ol li a {
      color: white;
      text-decoration: none;
    }
    #m3
    {
        text-align: center;
        color:red;
        padding-left:50px;
        font-size:50px;
    }
    
   </style>

</head>
<body>
<div id="main">
		<div id="m1"><img src="logo.jpg"></div>
        <div id="m2">
        <ol>
			 <li><a href="kolhan2.php">Log Out</a></li>
        </ol>     
        </div>
</div>
<div id="m3">MIGRATION</div><br><br>


 
</body>
</html>
<?php
session_start();
echo "welcome  ".$_SESSION['username'];
echo " your Migration is downloaded";
?>