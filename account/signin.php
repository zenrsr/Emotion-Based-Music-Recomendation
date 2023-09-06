<?php
$email = $_POST['email'];
$password = $_POST['password'];

$conn = mysqli_connect('localhost','root','','user');

if ($conn) {
    echo "Connected to database Successfully!";
}
$query = "INSERT INTO login(email, password) VALUES ('$email','$password')";
$sql = mysqli_query($conn,$query);
if(mysqli_num_rows($sql)==1){
    echo "<script>alert("Login Successful!")</script>";
    echo "<script>window.open('database.html','_self')</script>";
}
else{
    echo "<script>alert('Invalid Email, please signup before you proceed')</script>";
    echo "<script>window.open('signup.html','_self')</script>"
}
?>
