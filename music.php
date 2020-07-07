<?php
session_start();

if(!isset($_SESSION['username']))
{
    header('location:login.php');
}
?>

<html>
<head>
    <title>Music</title>
   
    <link rel="stylesheet" type="text/css" href="page1.css"/>
    <link rel="stylesheet" type="text/css" href="styles.css"/>
    
    </head>
    
<body class="b1">
    
  <div class="nav">
    <a class="home" href="http://localhost/me/index.php">Home</a>    
    <a href="#">Music</a>
    <a href="http://localhost/me/instrumental.php">Instrumental</a>
    <a href="http://localhost/me/old.php">Old Songs</a>   
    <a href="http://localhost/me/Contact.php">About Us</a>  
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
      
    
   <div style="margin-left: 73%;">  
<form>
    <label style="color: yellow;">Search here</label>
    <input type="Search" name="Search me">
    <input type="submit" name="Search Me">
</form>
</div> 
<h1 class="hh">Top Bollywood Songs</h1>


    <p>1.Kaise muhje tum mil gaye<br><strong class="mo"><br>Singer:Denny/Shraya</strong></p>   
<audio controls class="audio">
  <source src="songs/Kaise-Mujhe-Shreya-Ghoshal,Benny-Dayal.mp3" type="audio/ogg">
  <source src="songs/Kaise-Mujhe-Shreya-Ghoshal,Benny-Dayal.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
    
 <p>2.Tere bin nahi lagata dil mera <br><strong class="mo"><br>Singer:.....</strong></p> 
 <audio autoplay="" controls  class="audio">
  <source src="songs/
  SIMMBA_%20Tere%20Bin%20Lyrical%20_%20Ranveer%20Singh_%20Sara%20Ali(MP3_70K).mp3" type="audio/ogg">
  <source src="songs/SIMMBA_%20Tere%20Bin%20Lyrical%20_%20Ranveer%20Singh_%20Sara%20Ali(MP3_70K).mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
    
    <p>3.Vaaste ja bhi du <br><strong class="mo"><br>Singer:.....</strong></p>  
    <audio controls class="audio">
  <source src="songs/Vaaste%20Song_%20Dhvani%20Bhanushali_%20Tanishk%20Bagchi%20_%20N(MP3_70K).mp3" type="audio/ogg">
  <source src="songs/Vaaste%20Song_%20Dhvani%20Bhanushali_%20Tanishk%20Bagchi%20_%20N(MP3_70K).mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
    
    <p>4.Tere sang yaara<br><strong class="mo"><br>Singer:Atif Aslam</strong></p>
 <audio controls class="audio">
  <source src="songs/Tere%20Sang%20Yaara%20-%20Full%20Audio%20_%20Rustom%20_%20Akshay%20Kum(MP3_160K).mp3" type="audio/ogg">
  <source src="songs/Tere%20Sang%20Yaara%20-%20Full%20Audio%20_%20Rustom%20_%20Akshay%20Kum(MP3_160K).mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
    
     <p>4.Sun mere Humsafar <br><strong class="mo"><br>Singer:.....</strong></p>  
    <audio controls class="audio">
  <source src="songs/Humsafar%20(Full%20Video)%20%20_%20Varun%20_%20Alia%20Bhatt%20_%20Akhi(MP3_70K).mp3" type="audio/ogg">
  <source src="songs/Humsafar%20(Full%20Video)%20%20_%20Varun%20_%20Alia%20Bhatt%20_%20Akhi(MP3_70K).mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
    
      <p>6.O Saki Saki <br><strong class="mo"><br>Singer:.....</strong></p>  
 <audio controls class="audio">
  <source src="songs/Batla%20House_%20O%20SAKI%20SAKI%20Video%20_%20Nora%20Fatehi_%20Tani(MP3_70K).mp3" type="audio/ogg">
  <source src="songs/Batla%20House_%20O%20SAKI%20SAKI%20Video%20_%20Nora%20Fatehi_%20Tani(MP3_70K).mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
    
     <p>7.Banjaara(Ek Villain)<br><strong class="mo"><br>Singer:.....</strong></p>  
    <audio controls class="audio">
  <source src="songs/Banjaara%20Full%20Video%20Song%20_%20Ek%20Villain%20_%20Shraddha%20K(MP3_160K).mp3" type="audio/ogg">
  <source src="songs/Banjaara%20Full%20Video%20Song%20_%20Ek%20Villain%20_%20Shraddha%20K(MP3_160K).mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
    
      <p>8.Dil Diyan Gallan<br><strong class="mo"><br>Singer:.....</strong></p>  
 <audio controls class="audio">
  <source src="songs/Dil%20Diyan%20Gallan%20Song%20_%20Tiger%20Zinda%20Hai%20_%20Salman%20K(MP3_160K).mp3" type="audio/ogg">
  <source src="songs/Dil%20Diyan%20Gallan%20Song%20_%20Tiger%20Zinda%20Hai%20_%20Salman%20K(MP3_160K).mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
    
     <p>9.Dil meri na sune <br><strong class="mo"><br>Singer:Atif Aslam</strong></p> 
    <audio controls class="audio">
  <source src="songs/Dil%20Meri%20Na%20Sune%20Lyrical%20-%20Genius%20_%20Utkarsh_%20Ishit(MP3_70K).mp3" type="audio/ogg">
  <source src="songs/Dil%20Meri%20Na%20Sune%20Lyrical%20-%20Genius%20_%20Utkarsh_%20Ishit(MP3_70K).mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
    
      <p>10.Tuhe kitana chahne lage <br><strong class="mo"><br>Singer:Arijit Singh</strong></p>  
 <audio controls class="audio">
  <source src="songs/Full%20Song_%20Tujhe%20Kitna%20Chahne%20Lage%20_%20Kabir%20Singh%20_(MP3_160K).mp3" type="audio/ogg">
  <source src="songs/Full%20Song_%20Tujhe%20Kitna%20Chahne%20Lage%20_%20Kabir%20Singh%20_(MP3_160K).mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
    
     <p>11.Dilbar dilbar <br><strong class="mo"><br>Singer:.....</strong></p>  
    <audio controls class="audio">
  <source src="songs/DILBAR%20Lyrical%20_%20Satyameva%20Jayate%20_John%20Abraham_%20N(MP3_70K).mp3" type="audio/ogg">
  <source src="songs/DILBAR%20Lyrical%20_%20Satyameva%20Jayate%20_John%20Abraham_%20N(MP3_70K).mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
    
      <p>12.Bekhayali(Kabir Singh) <br><strong class="mo"><br>Singer:.....</strong></p>  
 <audio controls class="audio">
  <source src="songs/Kabir%20Singh_%20Bekhayali%20_%20Shahid%20Kapoor_Kiara%20Advan(MP3_160K).mp3" type="audio/ogg">
  <source src="songs/Kabir%20Singh_%20Bekhayali%20_%20Shahid%20Kapoor_Kiara%20Advan(MP3_160K).mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
    
     <p>13.Tera hone laga hu <br><strong class="mo"><br>Singer:.....</strong></p> 
    <audio controls class="audio">
  <source src="songs/Tera%20Hone%20Laga%20Hoon%20Lyrical%20Video%20-%20Ajab%20Prem%20Ki%20G(MP3_160K).mp3" type="audio/ogg">
  <source src="songs/Tera%20Hone%20Laga%20Hoon%20Lyrical%20Video%20-%20Ajab%20Prem%20Ki%20G(MP3_160K).mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
    
      <p>14.Aankh marey <br><strong class="mo"><br>Singer:.....</strong></p>  
 <audio controls class="audio">
  <source src="songs/SIMMBA_%20Aankh%20Marey%20Lyrical%20_%20Ranveer%20Singh_%20Sara(MP3_70K).mp3" type="audio/ogg">
  <source src="songs/SIMMBA_%20Aankh%20Marey%20Lyrical%20_%20Ranveer%20Singh_%20Sara(MP3_70K).mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
    
     <p>15.Piya O re Piya  <br><strong class="mo"><br>Singer:Atif Aslam</strong></p>  
 <audio controls class="audio">
  <source src="songs/Piya%20O%20Re%20Piya%20Lyrical%20-%20Tere%20Naal%20Love%20Ho%20Gaya%20_(MP3_70K).mp3" type="audio/ogg">
  <source src="songs/Piya%20O%20Re%20Piya%20Lyrical%20-%20Tere%20Naal%20Love%20Ho%20Gaya%20_(MP3_70K).mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>   
<p class="cp">Copyright © 2020 Black.Beards. All Rights Reserved.</p>    

 </body>
</html>