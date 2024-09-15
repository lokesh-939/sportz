<?php

if(isset($_POST['filter'])){
    $game=$_POST['game'];
    $gamelocation=$_POST['locationgame'];
    $sql="select * from createtable where game='$game' and place='$gamelocation'";
    $result=mysqli_query($conn,$sql);
}
?>
