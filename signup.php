<?php
include 'connect.php';
$email=$_POST[emailh];
$password=$_POST[passwordh];
$firstname=$_POST[firstnameh];
$lastname=$_POST[lastnameh];
$phonenumber=$_POST[phonenumberh];
$usertype=$_POST[usertypeh];
$sql = "INSERT INTO Login (email,firstname, lastname,password,phonenumber,usertype,userid)
VALUES ('$email','$firstname','$lastname','$password','$phonenumber','$usertype')";

if (mysqli_query($conn, $sql)) {
    $res['success']="1";
    echo json_encode($res);
echo "1";
} else {
    $res['success']="0";
    echo json_encode($res);
}

mysqli_close($conn);
?>
