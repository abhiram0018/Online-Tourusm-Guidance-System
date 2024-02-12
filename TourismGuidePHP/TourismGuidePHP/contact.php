<html lang = "en-US">
<head>
<meta charset = "UTF-8">
<meta name="viewport" content = "width=device-width,initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<?php include "header.php"; ?>

</head>
<body>
<?php include "navigationbar1.php"; ?>


<div class="container mt-5">
<h2 class = "text-center" style = "font-family : 'Monotype Corsiva' ; font-weight : bold ; color : #E6120E">Contact Us</h2>
<div class="row mt-5">
<div class="col-sm-6">
<form method="post">
<label>FirstName</label>
<input type = "text" name="firstname" class="form-control" style = "color : #007BFF" required>
<label>LastName</label>
<input type = "text" name="lastname" class="form-control" style = "color : #007BFF" required>
<label>Contact</label>
<input type = "text" name="contactno" class="form-control" style = "color : #007BFF" required>
<label>EmailID</label>
<input type = "email" name="emailid" class="form-control" style = "color : #007BFF" required>
<label>Message</label>
<textarea name="subject" class="form-control" style = "color : #007BFF" required></textarea>
<input type = "submit" value="submit" name="submit" class="btn btn-primary mt-3 form-control">
</form>
</div>
<div class="col-sm-6 mt-4">
<img src = "images/Touri.jpg" style = "width : 100% ; height : 400px">
</div>
</div>
</div>
</body>
</html>

<?php 
include "dbconfigure.php";
if(isset($_POST['submit']))
{
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$contactno = $_POST['contactno'];
$emailid = $_POST['emailid'];
$subject = $_POST['subject'];
$query = "insert into contact(firstname,lastname,contactno,emailid,subject) values('$firstname','$lastname','$contactno','$emailid','$subject')";
$n = my_iud($query);
if($n==1)
{
echo '<script>alert("Record Saved Successfully");
</script>';
}
else
{
echo '<script>alert("Something Went Wrong");
</script>';
}
}
?>