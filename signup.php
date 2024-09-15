<?php
require 'database.php';
require_once 'session_start.php';
?>
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
<div class="signup11">
    <form method="POST" action="signup.php" >
        <table>
            <tr><h1>signup</h1></tr>
            <tr>
        <td><lable>first name:</lable></td>
       <td><input type="text" name="fname" placeholder="first name" required></td>
        </tr>
        <tr>
            <td><lable>second name:</lable></td>
           <td><input type="text" name="sname" placeholder="second name" required></td>
            </tr>
            <tr>
                <td><lable>email:</lable></td>
               <td><input type="email" name="email" placeholder="email" required></td>
                </tr>
                <tr>
                    <td><lable>phonenumber:</lable></td>
                   <td><input type="tel" name="phone" placeholder="phone no" required></td>
                    </tr>
                    <tr>
                        <td><lable>sport 1:</lable></td>
                       <td><input type="text" name="sport1" placeholder="Liked sports " required></td>
                        </tr>
                        <tr>
                            <td><lable>sport 2:</lable></td>
                           <td><input type="text" name="sport2" placeholder="Liked sports" required></td>
                            </tr>
                            <tr>
                                <td><lable>sport 3:</lable></td>
                               <td><input type="text" name="sport3" placeholder="Liked sports" required></td>
                                </tr>
                                <tr>
                                    <td><lable>password :</lable></td>
                                   <td><input type="password" name="password" placeholder="" required></td>
                                    </tr>
                                    
      \
    </table>  
    <button type="submit"   class="signupbtn" name="signupbtn"> sign up</button>
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
                <li><a href="index.html" >HOME</a></li>
                <li><a href="#" >ACADAMICS</a></li>
                <li><a href="#" >ABOUT US</a></li>
                <li><a href="#" >CONTACT</a></li>
                <li><a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwji1pCWicmEAxUgbmwGHRjiChcQFnoECAYQAQ&url=https%3A%2F%2Fmaps.google.com%2F&usg=AOvVaw3z2z03MnvIwD2K6kwtdD9z&opi=89978449" >LOCATION</a></li>
            </ul>
         </div>
         <div class="email">
            <h1 >subscribe</h1>
            <div class="subscribe">
            <input type="search" class="emailinput" placeholder="subscribe for more....">
            <button type="submit" class="emailinputbut">submit</button>
         </div>
         </div>
    </div>
    <p class="bottom">&copy 2024 @sports.com</p>
  </footer>
</body>
</html>
<?php
if(isset($_POST["signupbtn"])){
$fname=$_POST['fname'];
$sname=$_POST['sname'];
$email=$_POST['email'];
$phonenum=$_POST["phone"];
$sport1=$_POST['sport1'];
$sport2=$_POST['sport2'];
$sport3=$_POST['sport3'];
$password=$_POST['password'];
$hash=password_hash($password,PASSWORD_DEFAULT);
$sql1="select * from signup where email='$email' LIMIT 1";
$res=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res)==0){
$sql="insert into signup(fname,sname,email,phonenum,sport1,sport2,sport3,pass) values('$fname','$sname','$email','$phonenum','$sport1','$sport2','$sport3','$hash')";
mysqli_query($conn,$sql);
header("location:index.php");
die();
}}
?>


