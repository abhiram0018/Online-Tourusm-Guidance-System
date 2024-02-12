<?php 
include "dbconfigure.php";

$id = $_GET['id'];

$query = "delete from place where pid='$id'";
$n = my_iud($query);
header("Location:viewplace.php");
?>