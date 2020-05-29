<?php
include 'connect.php';

$eventname=$_POST[eventname];
$description=$_POST[description];
$duration=$_POST[duration];
$status=$_POST[status];
$location=$_POST[location];
$cost=$_POST[cost];
$category=$_POST[category];
$coordinator=$_POST[coordinators];
$sql = "INSERT INTO Login (category,coordinator,,cost,dataid,,description,duration,eventid,eventname,location, status,userid)
VALUES ('$category','$coordinator',$cost,,'$description','$duration','$eventname','$location''$status')";

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
