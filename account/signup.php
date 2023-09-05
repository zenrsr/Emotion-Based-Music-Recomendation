<?php
$host = "localhost";
$port = "5432";
$dbname = "pgdemo"; 
$user = "postgres"; 
$password = "8790659884"; 

// Create a connection to the PostgreSQL database
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    die("Connection failed: " . pg_last_error());
}

// You are now connected to the database.
// You can perform database operations here.

// For example, you can execute a query like this:
// $query = "SELECT * FROM your_table";
// $result = pg_query($conn, $query);

// if (!$result) {
//     die("Query failed: " . pg_last_error());
// }

// // Process the query result here

// // Close the database connection when done
// pg_close($conn);
?>
