<?php
require "database.php";
require_once 'session_start.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>
        sportz pattner
    </title>
    <link href="stylesheet.css" rel="stylesheet"></link>
    <link href="script.js" rel="script"></link>
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
    </header>
    <div class="log-in">
        <form action="index.php" method="POST" >
          <h1> LOG IN</h1>
          <div class="inputlogin">
            <br>
            email:
            <br><br><input class="loginpass" name="email" type="email" placeholder="email ..">
          </div>
          <div class="inputlogin">
            <br>
            PASSWORD :
            <br><br>
            <input class="loginpass" name="password" type="password" placeholder="password...">
          </div>
          <div class="inputlogin">
            <br>
           <button type="submit" class="login" name="login">LOG IN</button>
          </div>
          <div class="inputlogin">
           <br> <p>create a new account <a href="signup.php">sign up ?</a></p>
          </div>
        </form>
    </div>
        <footer>
            <div class="options">
                <div class="top1">
                    <img class="logo2"src="logo4.png">
                      <p class="company">sportz</p>
                 </div>
                 <div class="options2">
                    <ul>
                        <li><a href="index.html" style="pointer-events: none;">HOME</a></li>
                        <li><a href="#" >ACADAMICS</a></li>
                        <li><a href="#" >ABOUT US</a></li>
                        <li><a href="#" >CONTACT</a></li>
                        <li><a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwji1pCWicmEAxUgbmwGHRjiChcQFnoECAYQAQ&url=https%3A%2F%2Fmaps.google.com%2F&usg=AOvVaw3z2z03MnvIwD2K6kwtdD9z&opi=89978449" style="pointer-events: none;" >LOCATION</a></li>
                    </ul>
                 </div>
                 <div class="email">
                    <h1 >subscribe</h1>
                    <div class="subscribe">
                      <form action="https://formsubmit.co/thefork@gmail.com"  method="POST">
                    <input type="search" class="emailinput" placeholder="subscribe for more...." disabled>
                    <button type="submit" class="emailinputbut" disabled>submit</button>
                 
                      </form> 
                 </div>
        
          </footer>
    </body>
    </html>
    <?php
    if(isset($_POST['login'])){
      $email=$_POST['email'];
      $password=$_POST['password'];
      $sql="select * from signup where email='$email' LIMIT 1";
      $result=mysqli_query($conn,$sql);
     $row=mysqli_fetch_assoc($result);
     $dbemail=$row['email'];
     $dbpassword=$row['pass'];
     if($dbemail==$email && password_verify($password, $dbpassword) && mysqli_num_rows($result)>0){
      $_SESSION["email"]=$email;
      header("location:home.php");
      die();
     }}
    ?>


   