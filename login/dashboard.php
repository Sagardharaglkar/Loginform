
<?php
$servername = "localhost:3306";
$username = "Sagar";
$Password = "root";
$databaseName = "SPKcollage";

$conn = mysqli_connect($servername, $username, $Password, $databaseName);

$un = $_POST['Email'];
$pw = $_POST['Password'];


$sql = "SELECT * FROM logininfo WHERE Email = '$un' AND PasswordU = '$pw' ";

$result = mysqli_query($conn, $sql);
$check = mysqli_fetch_assoc($result);

if (isset($check)) {
    echo 'Hello ' . $check['Name'].' You are now logged in';
} else {
    echo 'No data found, Check your Email or Password or try to '."<a href='validation.html'>SignUp</a>";
}
