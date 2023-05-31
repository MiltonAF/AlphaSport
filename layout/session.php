<?php

require 'model/connection.php';
session_start();

if ($_SESSION['field']) {
    $field = $_SESSION['field'];
} else if ($_SESSION['people']) {
    $people = $_SESSION['people'];

}