<?php
    $servername = "localhost:3306";
    $username = "Sagar";
    $Password = "root";
    $dbname = "SPKcollage";

// Create connection
$conn = new mysqli($servername, $username, $Password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$nm= $_POST['fname'];
$em = $_POST['email'];
$ct=$_POST['Cont'];
$pw = $_POST['pwd'];


$sql = "INSERT INTO logininfo (Name,Email,Phone,Passwordu) VALUES ('$nm','$em',$ct,'$pw');";


if ($conn->query($sql) === TRUE) {
  echo '<script> alert ("Account Created successfully") </script>';
  echo "<a href='login.html'>Back to login</a>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
