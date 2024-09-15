<?php
require('database.php');
require_once('session_start.php');
?>
<html>
<head>
    <title>
        sportz pattner
    </title>
    <link href="stylesheet.css" rel="stylesheet">
    <link href="script.js" rel="script">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Riot&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

   
    
</head>
<body>
    <header>
      
        <div class="top">
           <img class="logo"src="logo4.png">
             <p class="company">sportz</p>
        </div>
        <div class="center">
        
                <ul>
                    <li ><a href="home.php">home</a></li>
                    <li><div class="dropdown">
                        <button class="dropbtn">Book now</button>
                        <div class="dropdown-content">
                          <a href="person.php">pattner</a>
                          <a href="court.php">courts</a>
                          <a href="https://www.indiatoday.in/sports">events</a>
                        </div>
                      </div></li>
                    <li><a href="https://9sportz.com/bangalore">acadamics</a></li>
                    <li><a href="aboutus.php">about</a></li>
                
                </ul>
            </div>
            <div style="text-align:center;">
           
            <div class="mydiv"><img src="user.png" class="signup" style=" border:2px solid black; margin-right:40px; border-radius:50%;"></div>
            <div class="mydivdiv">"<?php if(isset($_SESSION['email'])){
              echo $_SESSION['email'];
            }
            else{
              echo"something went wrong";
            }?>"</div>
            <form action="home.php" method="POST">
            <a type="submit" value="logout" class="logout" href="logout.php" style="padding:0px 20px; background:green; color:white;">LOG OUT</a></form>
</div>
            
            
        </header>
        <div class="container" >
            <div class="text" >ARE U NEW TO THIS CITY... AND <BR>CHOOSING FOR THE NEW PARTNER  TO PLAY...</div>
            
                <div class="location">
                    
                    <a href="person.php"><button class="submit" style="border:none;  text-align:center;"><b>BOOK NOW</b></button></a>
                </div>

                
           </div>
           <h1 class="middel1">FAN BASE TOWARDS TOP SPORTS</h1>
   <div class="middel">
    
<div class="content">
    <p>	Soccer / Association Football</p>
    <h1>3.5 Billion</h1>
</div>
<div class="content">
    <p>	Cricket</p>
    <h1>2.5 Billion</h1>
</div>
<div class="content">
    <p>	Field Hockey</p>
    <h1>2 Billion</h1>
</div>
   </div>

   <div class="services">
    <div class="card" >
        <img class="card-img" src="sports1.jpeg" alt="Card image cap" >
        <div class="card-body">
          <h5 class="card-title">the bridge</h5>
          <p class="card-text">India has never produced a senior World Archery champion. Jyothi Surekha Vennam.</p>
          <a href="https://thebridge.in/" class="button">more..</a>
        </div>
      </div>
      <div class="card" >
        <img class="card-img" src="sports2.jpeg" alt="Card image cap" >
        <div class="card-body">
          <h5 class="card-title">sky sports</h5>
          <p class="card-text">We are proud of what we do. Want to join us? Take a look at the current opportunities below..</p>
          <a href="https://www.skysports.com/" class="button">more..</a>
        </div>
      </div>
      <div class="card" >
        <img class="card-img" src="sports3.jpeg" alt="Card image cap" >
        <div class="card-body">
          <h5 class="card-title">fox sports</h5>
          <p class="card-text">Justin Fields' trade market isn't shrinking. It never existed in the first place.</p>
          <a href="https://www.foxsports.com/" class="button">more..</a>
        </div>
      </div>
      <div class="card" >
        <img class="card-img" src="sports4.jpeg" alt="Card image cap" >
        <div class="card-body">
          <h5 class="card-title">sportsjam</h5>
          <p class="card-text">Some players  comfort, power and flexibility to choose a combination on a single string.</p>
          <a href="https://www.sportsjam.in/" class="button">more..</a>
        </div>
      </div>
      </div>
      <footer>
        <div class="options">
            <div class="top1">
                <img class="logo2"src="logo4.png">
                  <p class="company">sportz</p>
             </div>
             <div class="options2">
                <ul>
                    <li><a href="home.php" >HOME</a></li>
                    <li><a href="https://9sportz.com/bangalore" >ACADAMICS</a></li>
                    <li><a href="aboutus.php" >ABOUT US</a></li>
                    
                    <li><a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwji1pCWicmEAxUgbmwGHRjiChcQFnoECAYQAQ&url=https%3A%2F%2Fmaps.google.com%2F&usg=AOvVaw3z2z03MnvIwD2K6kwtdD9z&opi=89978449" >LOCATION</a></li>
                </ul>
             </div>
             <div class="email">
                <h1 >subscribe</h1>
                <div class="subscribe">
                <input type="search" class="emailinput" placeholder="subscribe for more...." required>
                <button type="submit" class="emailinputbut">submit</button>
             </div>
             </div>
        </div>
        <p class="bottom">&copy 2024 @sports.com
        </p>
      </footer>
      
   </div>
</body>
</html>
