<?php 
include "dbconfigure.php";

$id = $_GET['id'];

$query = "delete from city where cid='$id'";
$n = my_iud($query);
header("Location:viewcity.php");
?>