
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
require('database.php');
require_once('session_start.php');


if($_SERVER['REQUEST_METHOD']=="POST"){

  $groupname=$_POST['groupname'];
  $place=$_POST['place'];
  $phone=$_POST['phone'];
  $date=$_POST['datee'];
  $time=$_POST['timee'];
  $game=$_POST['game'];
  $courtdetails=$_POST['courtdetails'];
  $note=$_POST['note'];
  $sql="update  createtable set groupname='$groupname',place='$place',phone='$phone',datee='$date',timee='$time',game='$game',courtdetails='$courtdetails',note='$note' where id='$_SESSION[select]'";
  $query=mysqli_query($conn,$sql);
  if(isset($query)){
    
    
    header("location:person.php");
  }
}



if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['delete'])){
  $groupname=$_POST['groupname'];

  $sql="delete from createtable where id='$_SESSION[select]' ";
  mysqli_query($conn,$sql);
  $_SESSION['select']=[];
} 
?>
    </a>
    
    
  </div>
</nav> 
<div class="create" style="position:relative; top:140px;background-color:aqua;width:100%;">
<p style="text-align:center; background-color:lightblue; font-size:large; padding:20px;  font-family:Protest Riot, sans-serif;">update</p>


<?php
$id=$_GET['id'];
$_SESSION['select']=$_GET['id'];
$sql="select * from createtable  where id='$id'";
$result=mysqli_query($conn,$sql);
while($row=$result->fetch_assoc()){
  
?>
<form action="update.php" method="POST" >
<input type="hidden" value="<?= $row['id'] ?>"></input>
   <div  style="display:flex; justify-content: space-around; align-items: center;">
   
    <input type="text" name="groupname"   value="<?=$row['groupname']?>";   placeholder="group name" style="width:300px; height:30px; border:none; margin-bottom:20px;" required></input>
    <input type="text" name="place" value="<?=$row['place']?>" placeholder="place" style="width:300px; height:30px; border:none; margin-bottom:20px;" required></input>
   
   </div>
   <div  style="display:flex; justify-content: space-around; align-items: center;">
   
    <input type="email" name="email" placeholder="email" value="<?= $_SESSION['email'] ?>";   style="width:300px; height:30px; border:none; margin-bottom:20px;" readonly ></input>
    <input type="tel" name="phone" placeholder="phone number" value="<?=$row['phone']?>";    style="width:300px; height:30px; border:none; margin-bottom:20px;" required></input>
  
  </div>
   <div  style="display:flex; justify-content: space-around; align-items: center;">
   
    <input type="date" name="datee" placeholder="date" value="<?= $row['datee'] ?>";   style="width:300px; height:30px; border:none; margin-bottom:20px;" required></input>
    <input type="time" name="timee" placeholder="time" value="<?= $row['timee'] ?>";   class="form-control" style="width:300px; height:30px; border:none; margin-bottom:20px;" required></input>
    
  </div>
   <div  style="display:flex; justify-content: space-around; align-items: center;">
   
    <input type="text" name="game" placeholder="game" value="<?= $row['game'] ?>";   style="width:300px; height:30px; border:none; margin-bottom:20px;" required></input>
    <input type="text" name="courtdetails" placeholder="court name" value="<?= $row['courtdetails'] ?>";   style="width:300px; height:30px; border:none; margin-bottom:20px;" required></input>

  </div>
   <div  style="display:flex; justify-content: space-around; align-items: center; margin-bottom:20px;">
   <textarea placeholder="note"  cols="40" rows="5" name="note"><?= htmlspecialchars($row['note']) ?></textarea>
   </div>
   <div  style="display:flex; justify-content: space-around; align-items: center; margin-bottom:20px;">
  
 <div style="background-color:transparent;color:green; padding:10px; border:2px solid black;border-radius:20px"> you can specify the requirements in the above note



</div>

  </div>
  <div class="join" style="display:flex;align-items:center;justify-content:center;" >
    <button type="submit" name="update" style="width:200px; height:40px; border:none; background-color:skyblue; margin-bottom:30px;" >update</button>
    <button type="submit" name="delete" style="width:200px; height:40px; border:none; background-color:skyblue; margin-bottom:30px;" >delete</button>
   </div>
  
   
</form>
<?php } ?>
</div>
    </body>
   
</html> 





