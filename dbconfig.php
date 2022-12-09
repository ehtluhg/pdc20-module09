<?php

$dbconnect = mysqli_connect("localhost", "pdc20_user", "12345678", "pdc20_db");
if (mysqli_connect_errno()) {
    echo "Oops, may error!", mysqli_connect_error();
    die();
}