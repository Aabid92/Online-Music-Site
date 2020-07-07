<?php

session_start();

if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>World Of Music</title>

<link rel="stylesheet" type="text/css" href="styles.css"/>

</head>

<body class="b0">
<a href='http://localhost/me/login.php' style="margin-left:95%; backgound-color:blue;"><button>Logout</button></a>
   
<h1 class="h1">Welcome to Music World <?php echo $_SESSION['username']; ?> </h1>
<div id="main">

<ul id="navigationMenu">
    <li>
	    <a class="home" href="http://localhost/me/index.php">
            <span>Home</span>
        </a>
    </li>
    
    <li>
    	<a class="about" href="http://localhost/me/music.php">
            <span>Music</span>
        </a>
    </li>
    
    <li>
	     <a class="services" href="http://localhost/me/instrumental.php">
            <span>Instrumental</span>
         </a>
    </li>
    
    <li>
    	<a class="portfolio" href="http://localhost/me/old.php">
            <span>Old Songs</span>
        </a>
    </li>
    
    <li>
    	<a class="contact" href="http://localhost/me/Contact.php">
            <span>About us</span>
        </a>
    </li>
</ul>
    
</div>

<p class="note">We Hope Your All Enjoying the Music</p>

<p class="cp"><p class="de">Desige with ❤️ by Lovely Boy<br>Copyright © 2020 BlackBeards. All Rights Reserved.</p>    
</body>
</html>

