<?php
@session_start();
$id = $_GET['id'];
include "dbconfigure.php";
if(verifyuser())
{
$un = fetchusername();
}
else
{
header("location:index.php");
}
?>
<html>
<head>
<meta charset = "UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<?php include "header.php"; ?>
</head>
<body>
<?php include "navigationbar3.php"; ?>

<div class="container" style = "margin-top : 50px">
<h1 class=text-center>Edit City</h1>
<?php 
$query = "select * from city where cid='$id'";
$rs = my_select($query);
echo "<div class='table-responsive'>";
echo "<table class='table table-hover table-borderless'>";
while($column=mysqli_fetch_array($rs))
{
echo '<form method=post>';
echo "<tr><th>City ID</th><td><input type = text value='$column[0]' readonly></td></tr>";
echo "<tr><th>City Name</th><td><input type = text value='$column[1]'   name='cname'></td></tr>";

}
echo "</table>";
echo "<input type = submit value='Submit' class='btn btn-primary' name='edit'>";
echo '</form>';
echo "</div>";

if(isset($_POST['edit']))
{
$cname = $_POST['cname'];
$query = "update city set cname='$cname' where cid=$id";
my_iud($query);
header("location:viewcity.php");
}
?>
</div>
</body>
</html>