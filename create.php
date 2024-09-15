<?php
require('database.php');
require_once('session_start.php');
?>
<html>
    <head> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Riot&display=swap" rel="stylesheet"></head>
    <body>
    <nav class="navbar fixed-top navbar-expand-sm" style="background-color: #FFBE98;">
  <div class="container-fluid" style="padding:0px auto;">
    <a class="navbar-brand" href="#">
      <img src="logo4.png" alt="Logo" width="150px" height="90px" class="d-inline-block align-text-center">
      <span style="font-size:50px; font-family:Protest Riot, sans-serif;">
    sportz</span>
    </a>
    
  </div>
</nav> 
<div class="create" style="position:relative; top:140px;background-color:aqua;width:100%;">
<p style="text-align:center; background-color:lightblue; font-size:large; padding:20px;  font-family:Protest Riot, sans-serif;">create</p>
<form action="create.php" method="POST" >

   <div  style="display:flex; justify-content: space-around; align-items: center;">
   
    <input type="text" name="groupname" placeholder="group name" style="width:300px; height:30px; border:none; margin-bottom:20px;" required></input>
    <input type="text" name="place" placeholder="place" style="width:300px; height:30px; border:none; margin-bottom:20px;" required></input>
   
   </div>
   <div  style="display:flex; justify-content: space-around; align-items: center;">
   
    <input type="email" name="email" placeholder="email" value="<?= $_SESSION['email'] ?>"style="width:300px; height:30px; border:none; margin-bottom:20px;" readonly ></input>
    <input type="tel" name="phone" placeholder="phone number" style="width:300px; height:30px; border:none; margin-bottom:20px;" required></input>
  
  </div>
   <div  style="display:flex; justify-content: space-around; align-items: center;">
   
    <input type="date" name="datee" placeholder="date" style="width:300px; height:30px; border:none; margin-bottom:20px;" required></input>
    <input type="time" name="timee" placeholder="time" class="form-control" style="width:300px; height:30px; border:none; margin-bottom:20px;" required></input>
    
  </div>
   <div  style="display:flex; justify-content: space-around; align-items: center;">
   
    <input type="text" name="game" placeholder="game" style="width:300px; height:30px; border:none; margin-bottom:20px;" required></input>
    <input type="text" name="courtdetails" placeholder="court name" style="width:300px; height:30px; border:none; margin-bottom:20px;" required></input>

  </div>
   <div  style="display:flex; justify-content: space-around; align-items: center; margin-bottom:20px;">
   <textarea placeholder="note" cols="40" rows="5" name="note"></textarea>
   </div>
   <div  style="display:flex; justify-content: space-around; align-items: center; margin-bottom:20px;">
  
 <div style="background-color:transparent;color:green; padding:10px; border:2px solid black;border-radius:20px"> you can specify the requirements in the above note

</div>

  </div>
  <div class="join" style="display:flex;align-items:center;justify-content:center;" >
    <button type="submit" name="create" style="width:200px; height:40px; border:none; background-color:skyblue; margin-bottom:30px;" name="create">Create</button>
   
   </div>
  <?php
  if(isset($_POST['create'])){

$email=$_SESSION['email'];
$groupname=$_POST['groupname'];
$place=$_POST['place'];
$datee=date('y-m-d',strtotime($_POST['datee']));
$timee=$_POST['timee'];
$game=$_POST['game'];
$courtdetails=$_POST['courtdetails'];
$note=$_POST['note'];
// echo $timee;
// echo $datee;
// echo $email;
// echo $groupname;
// echo $place;
// echo $game;
// echo $courtdetails;
// echo $note;
$sql="insert into createtable (groupname,email,place,datee,timee,game,courtdetails,note) values ('$groupname','$email','$place','$datee','$timee','$game','$courtdetails','$note')";
mysqli_query($conn,$sql);
header("location:person.php");
die();
  }
?>
   
</form>
</div>
    </body>
   
</html>





