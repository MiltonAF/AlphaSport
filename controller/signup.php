<?php
require '../model/connection.php';

$id = $_POST['id'];
$nit = $_POST['nit'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$addres = $_POST['addres'];
$username = $_POST['username'];
$password = $_POST['password'];
$price = $_POST['price'];
$startTime = strtotime($_POST['start_time']);
$start_time = date("H:i:s", $startTime);

$endTime = strtotime($_POST['end_time']);
$end_time = date("H:i:s", $endTime);




$sql = "INSERT INTO users VALUES ('$username','$password')";
$save = mysqli_query($conn, $sql);

if (empty($nit)) {
    $sql = "INSERT INTO people VALUES ('$id','$name', '$surname', '$email', '$phone', 'Cliente', '$username')";
    $save = mysqli_query($conn, $sql);

    if ($save == true) {
        header('location: ../login.php');
    }




} else {

    $sql = "INSERT INTO field VALUES ('$nit','$name', '$email', '$phone', '$addres', '$username')";
    $save = mysqli_query($conn, $sql);

    echo ($endTime);

    if ($save == true) {
        $sql = "INSERT INTO field_detail VALUES (NULL, '$price','$start_time', '$end_time','$nit')";
        $save = mysqli_query($conn, $sql);


        if ($save == true) {
            header('location: ../login.php');
        }


    }





}

?>