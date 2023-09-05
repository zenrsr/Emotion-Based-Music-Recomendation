



<?php
$host = "localhost";
$username = "postgres";
$password = "8790659884";
$database = "pgdemo";

$connection = pg_connect("host=$host dbname=$database user=$username password=$password");

if (!$connection) {
    die("Connection failed: " . pg_last_error());
}
else{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        // Perform input validation and sanitization here if needed
    
        $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
    
        $result = pg_query($connection, $sql);
    
        if (!$result) {
            die("Error: " . pg_last_error());
        } else {
            echo "Signed Up successfully!";
        }
    }
    
    // Close the database connection when done
    pg_close($connection);
}
?>
