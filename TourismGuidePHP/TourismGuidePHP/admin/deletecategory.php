<?php 
include "dbconfigure.php";

$id = $_GET['id'];

$query = "delete from category where cid='$id'";
$n = my_iud($query);
header("Location:viewcategory.php");
?>