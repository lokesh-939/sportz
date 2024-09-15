if(isset($_POST['signupbut'])){
if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo'<script>alert("the email is invalid")</script>';
}
else if(!preg_match('/^[0-9]{10}+$/',$phone)){
    echo'<script>alert("the phonenum is not valid")</script>';
}
else if(empty($password)){
    echo'<script>alert("pls enter valid password")</script>';
}
}
else{
    $sql="insert into signup(fname,sname,email,phonenum,sport1,sport2,sport3,password) values('$fname','$sname','$email','$phone','$sp1','$sp2','$sp3','$hash')";
mysqli_query($conn,$sql);
echo"the value has been inserted successfully";
$conn->close();
}










if(isset($_POST['signupbtn'])){
$sql1="select * from signup  where email='$email'";
$result=mysqli_query($conn,$sql1);
$count_email=mysqli_num_rows($result);

if($count_email>0){
    echo'<script>window.location.href="signup.php";
    alert("the email has exist in data base already");
    </script>';
}
}
else{
}