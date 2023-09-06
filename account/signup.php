<?php
$email = $_POST['email'];
$password = $_POST['password'];

$conn = mysqli_connect('localhost','root','','user');

if ($conn) {
    echo "Connected to database Successfully!";
}
$query = "INSERT INTO login(email, password) VALUES ('$email','$password')";
$sql = mysqli_query($conn,$query);
if(mysqli_num_rows($sql)==0){
    echo "<script>alert("Data is successfully entered into the user database")</script>";
    echo "<script>window.open('signin.html','_self')</script>";
}
else{
    echo "<script>alert('email already in use, please Login')</script>";
    echo "<script>window.open('signin.html','_self')</script>"
}
?>
