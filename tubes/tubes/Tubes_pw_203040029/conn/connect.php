<?php

$connect = mysqli_connect("localhost", "root", "", "tubes_pw_203040029");

$selectMW = mysqli_query($connect, "SELECT * FROM barang");
$selectUS = mysqli_query($connect, "SELECT * FROM user");
