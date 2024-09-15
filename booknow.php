<?php 
require_once('database.php');
require_once('session_start.php');
if($_SERVER['REQUEST_METHOD']=="POST"){
    $email=$_SESSION['email'];
    $groupname=$_POST['courtname'];
    $sport=$_POST['sport'];
    $date=$_POST['date'];
    $addresses=$_POST['addresses'];
    $time=$_POST['duration'];
   
   
   
    $sql1="select * from booked where date='$date' and time='$time' ";
    $result=mysqli_query($conn,$sql1);
    $row=mysqli_fetch_row($result);
  
    if($row == 0){
      $sql="insert into booked (name,email,addresses,sport,date,time) values ('$groupname','$email','$addresses','$sport','$date','$time')";
      $query=mysqli_query($conn,$sql);
      header("location:court.php");
    }
    else{
      echo("<script>alert('this is not good');</script>");
      header("location:404.php");
    }
   
    }

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
    <?php 

// if($_SERVER['REQUEST_METHOD']=="POST"){
//   $email=$_SESSION['email'];
//   $groupname=$_POST['courtname'];
//   $sport=$_POST['sport'];
//   $date=$_POST['date'];
//   $addresses=$_POST['addresses'];
//   $time=$_POST['duration'];
 
 
 
//   $sql="select * from booked where date='$date' and time='$time' ";
//   $result=mysqli_query($conn,$sql1);
//  var_dump($result);
//   if($result->num_rows > 0){
//    echo "<script>alert('something went wrong');</script>";
//   }
//   else{
//     $sql="insert into booked (name,email,addresses,sport,date,time) values ('$groupname','$email','$addresses','$sport','$date','$time')";
//     $query=mysqli_query($conn,$sql);
//   }
//   }


?>
    </a>
  </div>
</nav>
<?php
$id=$_GET['id'];
$_SESSION['select1']=$_GET['id'];
$sql="select * from sportscourts  where id='$id'";
$result=mysqli_query($conn,$sql);
while($row=$result->fetch_assoc()){
  
?>
<div  class="forms" style="position:relative; top:140px;background-color:aqua;width:100%;">
<p style="text-align:center; background-color:lightblue; font-size:large; padding:20px;  font-family:Protest Riot, sans-serif;">book court</p>
  <form  method="post" action="booknow.php" style="margin:10px; ">
   <div  style="display:flex; justify-content: space-around; align-items: center;">
    <input type="text" name="courtname" placeholder="groupname";  value="<?=$row['name']?>"; style="width:300px; height:30px; border:none; margin-bottom:20px;" readonly></input>
    <input type="text" name="sport" placeholder="sport"; style="width:300px; height:30px; border:none; margin-bottom:20px;"></input>
   </div>

   <div  style="display:flex; justify-content: space-around; align-items: center;">
    <input type="text" name="email" placeholder="email"  value="<?= $_SESSION['email'] ?>"; style="width:300px; height:30px; border:none; margin-bottom:20px;" readonly></input>
    <input type="date" name="date" placeholder="date" style="width:300px; height:30px; border:none; margin-bottom:20px;"></input>
   </div>
   
   <div  style="display:flex; justify-content: space-around; align-items: center;">
    <input type="text" name="addresses" placeholder="email"  value="<?= $row['location'] ?>"; style="width:300px; height:30px; border:none; margin-bottom:20px;" readonly></input>
    <input type="text" name="duration" placeholder="2/2:30  formate" style="width:300px; height:30px; border:none; margin-bottom:20px;"></input>
   </div>

   
   <div class="join" style="display:flex;align-items:center;justify-content:center;" >
    <button type="submit" name="submit" style="width:200px; height:40px; border:2px solid black;background-color:#387ADF; color:whitesmoke;  margin-bottom:30px ;" >book now</button>
   
   </div>
   <?php } ?>
  </form>
</div>

 
  
    </body>
</html> 