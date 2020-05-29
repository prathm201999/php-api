<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="himansh3_antragini";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if ($conn) {
    echo "Connected";
}
else
{echo "Error";}

?>