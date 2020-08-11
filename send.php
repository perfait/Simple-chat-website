<?php

session_start();
include 'dbh.php';

$msg=$_POST['msg'];
$name=$_SESSION['name'];



$sql="insert into posts(name, msg) values('$name','$msg')";

$result=$conn->query($sql);

header("Location:home.php");


?>