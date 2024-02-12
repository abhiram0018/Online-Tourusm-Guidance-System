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
<h2 class="text-center">Add Place</h2>

<form method=post enctype="multipart/form-data">
<div class="form-group">
<label>Place Name</label>
<input type = text name="pname" class="form-control" required>

<label>Place Image</label>
<input type = file name="image" id="image" class="form-control" required>

<label>Place Description</label>
<textarea name="pdesc" class="form-control" required></textarea>

<label>Location</label>
<input type=text name="location" class="form-control" required>

<label>LandMark</label>
<input type=text name="landmark" class="form-control" required>

<label>Category</label>
<select name=category class="form-control">
<?php 
$sql = "select cid,cname from category";
$rs = my_select($sql);
while($row = mysqli_fetch_array($rs))
{
$cid = $row['cid'];
$cname = $row['cname'];
echo "<option value=$cname>$cname</option>";
}
?>
</select>


<label>City</label>
<select name=city class="form-control">
<?php 
$sql = "select cid,cname from city";
$rs = my_select($sql);
while($row = mysqli_fetch_array($rs))
{
$cid = $row['cid'];
$cname = $row['cname'];
echo "<option value=$cname>$cname</option>";
}
?>
</select>

<label>Rating</label>
<input type=text name="rating" class="form-control" >


<input type = submit name=save value="Save" class="btn btn-primary mt-4">
</div>
</form>
</div>
</body>
</html>
<?php 
if(isset($_POST['save']))
{
$pname = $_POST['pname'];
move_uploaded_file($_FILES['image']['tmp_name'],"uploadimage/".$_FILES['image']['name']);

$image = "uploadimage/".$_FILES['image']['name'];

$pdesc = $_POST['pdesc'];
$location = $_POST['location'];
$landmark = $_POST['landmark'];
$category = $_POST['category'];
$city = $_POST['city'];
$rating = $_POST['rating'];



$query = "insert into place(pname,pimage,pdesc,location,landmark,category,city,rating) values('$pname','$image','$pdesc','$location','$landmark','$category','$city','$rating')";
$n = my_iud($query);
if($n==1)
{
echo '<script>alert("Record Saved Successfully");
window.location = "viewplace.php";
</script>';
}
else
{
echo '<script>alert("Something Went Wrong");
</script>';
}
}
?>