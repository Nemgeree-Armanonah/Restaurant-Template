<?php

$servername  = "localhost";
$username = "root";
$password = "root";
$dbname = "afghan";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); // enable exceptions

$conn = new mysqli($servername, $username, $password, $dbname);

$email= $_POST['email'];
$password = $_POST['password'];

$query = "SELECT first_name, last_name from register where email = '$email'";

 if ($result = $conn->query($query)) {

      echo "<h1> Your Account </h1>";

 while ($row = $result->fetch_assoc()) {
     $first_name = $row["first_name"];
     $last_name = $row["last_name"];

     echo '<b>'.$first_name. " ".$last_name.'</b><br />';

 }

header( "refresh:5;url=../index.php" );
$result->free();
}


 ?>
