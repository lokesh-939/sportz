<?php
require('database.php');
require_once('session_start.php');
if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['delete'])){
    $groupname=$_POST['groupname'];
  
    $sql="delete from create table where id='$_SESSION[select]' ";
    mysqli_query($conn,$sql);
    $_SESSION['select']=[];
  } 
?>