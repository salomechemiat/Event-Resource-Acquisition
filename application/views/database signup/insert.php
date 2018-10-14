<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "user");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Escape user inputs for security
$username = $mysqli->real_escape_string($_REQUEST['username']);
$email = $mysqli->real_escape_string($_REQUEST['email']);
$password = $mysqli->real_escape_string($_REQUEST['password']);
$password = $mysqli->real_escape_string($_REQUEST['password']);

// attempt insert query execution
$sql = "INSERT INTO login (username, email, password) VALUES ('$username', '$email', '$password')";
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
    header('Location: index.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>