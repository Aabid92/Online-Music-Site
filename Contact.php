<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>

<html>
<head>
    <title>About Us</title>

    <link rel="stylesheet" type="text/css" href="form.css">
    <script src="script.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    </head>
    
    <div class="nav">
    <a class="home" href="http://localhost/me/index.php">Home</a>    
    <a href="http://localhost/me/music.php">Music</a>
    <a href="http://localhost/me/instrumental.php">Instrumental</a>
    <a href="http://localhost/me/old.php">Old Songs</a>   
    <a href="#">About Us</a>
     <a href="http://localhost/me/Contact%20Us.php">Contact Us</a>
    <a style="margin-left:40%; background-color:blue;color:white;" href="http://localhost/me/logout.php">Logout</a>    
    </div>

<!--Menu Css Start here-->    
    
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
    
    
<body style="background-color:#2c2c2c;">
   <h2 style = "color:#ffffff; font-size:60px;font-style:italic; text-align:center; margin:4%; "> About us</h2>
    <p style="color:white; font-size:35px; text-align:center; ">With our site it's easy to find the right music for every<br> moment-on your phone,your computer,your tablet and more.</p>
    <p style="color:white; font-size:35px; text-align:center; ">There are lots of tracks and instrumental music is Available.<br>So wether you're behind the wheel working out,partying or<br>relaxing,the right music or podcast is always at your fingertips</p>
    <p style="color:white; font-size:35px; text-align:center; ">You can also browse through the collection of best old hindi songs.<br>We are here to provide you a best old and instrumental music hope you enjoy it.</p>
    
     


<a style="margin-left: 47%; font-size: 20px; text-shadow: white; color:orange;" href="http://localhost/me/index.php">Go to Home</a>

           
   </body>
</html>
