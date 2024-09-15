<?php
require 'database.php';
require 'session_start.php';
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
<div style="color:aliceblue; padding:20px 0px;">courts</div>
    </div>


<div class="block" style="position:relative; top:150px;">
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">S.NO.</th>
      <th  class="col-xs-4">court name</th>
      <th scope="col">canplay</th>
      <th scope="col">rating</th>
      <th scope="col">location</th>
      <th scope="col">timings</th>
      <th scope="col">booknow</th>
      
    </tr>
  </thead>
  <tbody>
  <?php
     $sql = "select * from sportscourts";
     $result=mysqli_query($conn,$sql);
     if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
        
        echo "<tr>";
        echo "<td> $row[id]  </td>";
        echo "<td> $row[name] </td>";
        echo "<td class='col-xs-1'> $row[canplay]</td>";
        echo "<td> $row[rating] </td>";
        echo "<td> $row[location]</td>";
        echo "<td> $row[availtime]</td>";
        echo "<td> <a class='btn btn-primary' href='booknow.php?id=$row[id]' name='join'>book now</td>";
        echo "</tr>";
     }}
    
   
    
       ?>

  </tbody>
</table>
</div>
    </body>
</html>
