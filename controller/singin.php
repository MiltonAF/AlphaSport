<?php
require '../model/connection.php';

$user = $_POST['username'];
$pass = $_POST['password'];

$sql = "SELECT COUNT(*) total FROM users u WHERE u.username = '$user'";
$result = mysqli_query($conn, $sql);
$cont = $result->fetch_assoc();

if ($cont["total"] == 1) {

    $sql = "SELECT COUNT(*) total FROM users u WHERE  u.username = '$user' AND u.password = '$pass'";
    $result = mysqli_query($conn, $sql);
    $cont = $result->fetch_assoc();






    if ($cont["total"] == 1) {

        $sql_people = "SELECT * FROM people p WHERE  p.user = '$user' ";
        $result_people = mysqli_query($conn, $sql_people);


        $sql_field = "SELECT * FROM field f WHERE  f.user = '$user' ";
        $result_field = mysqli_query($conn, $sql_field);



        if ($result_people && mysqli_num_rows($result_people) == 1) {
            $user_people = mysqli_fetch_assoc($result_people);
            session_start();
            $_SESSION['people'] = $user_people;


            header('location: ../index.php');
        } else if ($result_field && mysqli_num_rows($result_field) == 1) {
            $user_field = $result_field->fetch_assoc();

            session_start();
            $_SESSION['field'] = $user_field;
            echo ($_SESSION['field']);
            header('location: ../index.php');
        } else {
        }
    } else {
        echo ("password incorrecto");
    }
} else {
    echo ("usuairo icorrecto");
} ?>