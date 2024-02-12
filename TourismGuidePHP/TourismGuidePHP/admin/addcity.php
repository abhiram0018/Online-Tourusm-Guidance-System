<?php
@session_start();

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
<h2 class="text-center">Add City</h2>

<form method=post>
<div class="form-group">
<label>City Name</label>
<input type = text name="cname" class="form-control" required>

<input type = submit name=save value="Save" class="btn btn-primary mt-4">
</div>
</form>
</div>
</body>
</html>
<?php 
if(isset($_POST['save']))
{
$cname = $_POST['cname'];
$query = "insert into city(cname) values('$cname')";
$n = my_iud($query);
if($n==1)
{
echo '<script>alert("Record Saved Successfully");
window.location = "viewcity.php";
</script>';
}
else
{
echo '<script>alert("Something Went Wrong");
</script>';
}
}
?>