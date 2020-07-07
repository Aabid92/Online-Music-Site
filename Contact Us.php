<!DOCTYPE html>
<html>
<head>
	<title>Contact US</title>
	 <link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>

    <div class="nav">
    <a class="home" href="http://localhost/me/index.php">Home</a>    
    <a href="http://localhost/me/music.php">Music</a>
    <a href="http://localhost/me/instrumental.php">Instrumental</a>
    <a href="http://localhost/me/old.php">Old Songs</a>   
    <a href="http://localhost/me/Contact.php">About Us</a>
    <a href="#">Contact Us</a>
    <a style="margin-left:40%; background-color:blue;color:white;" href="http://localhost/me/logout.php">Logout</a>    
    </div>

    <style>
    
    .nav{

    		background-color: #4CAF50;
    		overflow: hidden;
    	}
    	.nav a {
        float: left;
        color: #ffffff;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 20px;
        font-family:cursive;    
        }
        .nav a:hover {
        background-color: #ddd;
        color: black;
        }
        .nav a.home {
        background-color: #b6f017;
        color: #000000;
       }

</style> 

	<div id="mainform" style="margin-left: 37%;">
<div class="innerdiv">
<h2 style="font-size: 22px; color: yellow;">Drop your Requsted song below</h2>
<!-- Required Div Starts Here -->
<form id="form" name="form">
<h3>Fill Your Information!</h3>
<div>
<label style="color: brown;">Name:</label>
<input id="name" type="text">
<label style="color: brown;">Email:</label>
<input id="email" type="text">
<label style="color: brown;">Your Song:</label>
<input id="password" type="text">
<label style="color: brown;">Your Message:</label>
<input id="contact" type="text">
<input id="submit" onclick="myFunction()" type="button" value="Submit">
</div>
</form>
<div id="clear"></div>
</div>
<div id="clear"></div>
</div>

</body>
</html>