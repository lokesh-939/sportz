<?php
require 'database.php';
require 'session_start.php';
if(isset($_POST['create'])){
  header("location:create.php");
}
?>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Riot&display=swap" rel="stylesheet">
    </head>
    <body>
    <nav class="navbar fixed-top" style="background-color: #FFBE98;">
  <div class="container-fluid" style="padding:0px auto;">
    <a class="navbar-brand" href="#">
      <img src="logo4.png" alt="Logo" width="150px" height="90px" class="d-inline-block align-text-center">
      <span style="font-size:50px; font-family:Protest Riot, sans-serif;">
    sportz</span>
    </a>
  </div>
</nav>


<div class="filter" style="position:relative;
    top:130px;
    height:auto;
    width:auto; 
    display:flex;
    justify-content: center;
    align-items:center;
    z-index:1; margin-bottom:5px;
   background-color:#7F27FF;">
   <form action="person.php" method="POST">
            <select name="game" id="game" style="margin:8px 10px;">
            <option value="All">All</option>   
            <option value="cric">cric</option>
            <option value="football">football</option>
            <option value="vollyball">volleyball</option>
            <option value="hockey">hockey</option>
            </select>
            <select name="locationgame" id="locationgame">
            <option value="All">All</option>
                <option value="banglore">bangalore</option>
                <option value="hyderabad">hyderabad</option>
                <option value="chennai">chennai</option>
                <option value="delhi">delhi</option>
            </select>
    <button type="submit" name="submit" style="background-color:#387ADF; margin:8px 10px;color:whitesmoke;border:none;">submit</button>
    <a href="create.php" ><button type="submit" name="create" style="background-color:#387ADF; margin:8px 10px;color:whitesmoke;border:none;">create</button></a>
</form>
    </div>


<div class="block" style="position:relative; top:150px;">
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">S.NO.</th>
      <th scope="col">email</th>
      <th scope="col">time</th>
      <th scope="col">date</th>
      <th scope="col">place</th>
      <th scope="col">game</th>
      <th scope="col">note</th>
      <th scope="col">join</th>
      <th scope="col">update</th>
      
    </tr>
  </thead>
  <tbody>
  <?php
   
     if(!isset($_POST['submit'])) {
     $sql = "select * from createtable";
     $result=mysqli_query($conn,$sql);
     if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
        
        echo "<tr>";
        echo "<td> $row[id]  </td>";
        echo "<td> $row[email] </td>";
        echo "<td> $row[timee]</td>";
        echo "<td> $row[datee] </td>";
        echo "<td> $row[place]</td>";
        echo "<td> $row[game]</td>";
        echo "<td> $row[note]</td>";
        echo "<td> <a class='btn btn-primary' href='join.php?id=$row[id]' name='join'>join</td>";
        if($_SESSION['email'] == $row['email']){
          
           echo "<td> <a class='btn btn-primary' href='update.php?id=$row[id]' name='join'>update</td>";
        }
        echo "</tr>";
     }}
    }
    if(isset($_POST['submit'])){
    $game=$_POST['game'];
    $gamelocation=$_POST['locationgame'];
   
    if($game == 'All' && $gamelocation == 'All'){
        $sql = "select * from createtable";
        $result=mysqli_query($conn,$sql);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            
            echo "<tr>";
            echo "<td> $row[id]  </td>";
            echo "<td> $row[email] </td>";
            echo "<td> $row[timee]</td>";
            echo "<td> $row[datee] </td>";
            echo "<td> $row[place]</td>";
            echo "<td> $row[game]</td>";
            echo "<td> $row[note]</td>";
            echo "<td> <a class='btn btn-primary' href='join.php?id=<?= $row[id] ?>' name='join'>join</td>";
            if($_SESSION['email'] == $row['email']){
          
              echo "<td> <a class='btn btn-primary' href='update.php?id=$row[id]' name='join'>update</td>";
           }
            echo "</tr>";
        }}
    }
    $sql = "select * from createtable where game='$game'";
    $result=mysqli_query($conn,$sql);
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
       
        echo "<tr>";
        echo "<td> $row[id]  </td>";
        echo "<td> $row[email] </td>";
        echo "<td> $row[timee]</td>";
        echo "<td> $row[datee] </td>";
        echo "<td> $row[place]</td>";
        echo "<td> $row[game]</td>";
        echo "<td> $row[note]</td>";
        echo "<td> <a class='btn btn-primary' href='join.php?id=<?= $row[id] ?>' name='join'>join</td>";
        if($_SESSION['email'] == $row['email']){
          
          echo "<td> <a class='btn btn-primary' href='update.php?id=$row[id]' name='join'>update</td>";
       }
        echo "</tr>";
    }
}
    }
    
       ?>

  </tbody>
</table>
</div>
    </body>
</html>
<?php

function isUserLoggedIn($conn) {
    $sql="select email from createtables";
    $result=mysqli_query($conn,$sql);
    while($row = $result->fetch_assoc()) {
            if($_SESSION['email']==$row['email']){
    return isset($_SESSION['email']);
}}}

?>