<?php
include 'connect.php';
$amountstatus=$_POST[amountstatus];
$attendance=$_POST[attendance];
$mode=$_POST[mode];
$upiid=$_POST[upiid];
$rupees=$_POST[rupees];

$sql = "INSERT INTO Login (amountstatus,attendance,enrollid,mode,rupees,upiid)
VALUES ('$amountstatus','$attendance','$mode',$rupees,'$upiid')";

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
