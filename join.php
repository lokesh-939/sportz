<?php 
require('database.php');
require_once('session_start.php');
if($_SERVER['REQUEST_METHOD']=="POST"){
  $email=$_SESSION['email'];
  $groupname=$_POST['groupname'];
  $phone=$_POST['phone'];
  $name=$_POST['name'];
 
 
  $sql="insert into jointable (groupname,email,phone,name) values ('$groupname','$email','$phone','$name')";
  $query=mysqli_query($conn,$sql);
  if(isset($query)){
    echo "<script>alert('success')</script>";
    
    header("location:person.php");
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
    </a>
  </div>
</nav>
<?php
$id=$_GET['id'];
$_SESSION['select']=$_GET['id'];
$sql="select * from createtable  where id='$id'";
$result=mysqli_query($conn,$sql);
while($row=$result->fetch_assoc()){
  
?>
<div  class="forms" style="position:relative; top:140px;background-color:aqua;width:100%;">
<p style="text-align:center; background-color:lightblue; font-size:large; padding:20px;  font-family:Protest Riot, sans-serif;">join</p>
  <form  method="post" action="join.php" style="margin:10px; ">
   <div  style="display:flex; justify-content: space-around; align-items: center;">
    <input type="text" name="groupname" placeholder="groupname";  value="<?=$row['groupname']?>"; style="width:300px; height:30px; border:none; margin-bottom:20px;"></input>
    <input type="text" name="name" placeholder="name"; style="width:300px; height:30px; border:none; margin-bottom:20px;"></input>
   </div>

   <div  style="display:flex; justify-content: space-around; align-items: center;">
    <input type="text" name="email" placeholder="email"  value="<?= $_SESSION['email'] ?>"; style="width:300px; height:30px; border:none; margin-bottom:20px;" readonly></input>
    <input type="text" name="phone" placeholder="phone number" style="width:300px; height:30px; border:none; margin-bottom:20px;"></input>
   </div>
   

   
   <div class="join" style="display:flex;align-items:center;justify-content:center;" >
    <button type="submit" name="submit" style="width:200px; height:40px; border:2px solid black;background-color:#387ADF; color:whitesmoke;  margin-bottom:30px ;" >join</button>
    <!-- <button name="view" type="submit" style="width:200px; height:40px; border:2px solid black;background-color:#387ADF; color:whitesmoke;  margin-bottom:30px " >view</button> -->
   </div>
  </form>
</div>
<?php } ?>
<!-- <div class="block" style="position:relative; top:150px;">
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">S.NO.</th>
      <th scope="col">email</th>
      <th scope="col">name</th>
      <th scope="col">phone</th>
      <th scope="col">groupname</th>
      
    </tr>
  </thead>
  <tbody>
  <?php
   
     if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['view'])){
      $groupname=$_POST['groupname'];
    
      $sql="select * from jointable where groupname='$groupname'";
     
     $result=mysqli_query($conn,$sql);
     if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
        
        echo "<tr>";
        echo "<td> $row[id]  </td>";
        echo "<td> $row[email] </td>";
        echo "<td> $row[name]</td>";
        echo "<td> $row[phone] </td>";
        echo "<td> $row[groupname]</td>";
        echo "</tr>";
        $_SESSION['select']=[];
     }}
    }
    ?>

    </tbody>
  </table>
  <!-- </div> -->
    </body>
</html> 