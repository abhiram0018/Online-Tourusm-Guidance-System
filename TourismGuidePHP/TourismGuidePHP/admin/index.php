<?php
@session_start();

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
<?php include "navigationbar2.php"; ?>

<div class="container" style = "margin-top : 100px">
<h2 class = "text-center" style = "font-family : 'Monotype Corsiva' ; color : #E6120E ; font-weight : bold">Admin Login</h2>
<br>
<form method = post>
<div class="form-group">
<label>UserName</label>
<input type = "text" class="form-control" placeholder="Enter UserName" name="username">

<label>Password</label>
<input type = "password" class="form-control" placeholder="Enter Password" name="pwd">
<input type = "checkbox" name="rem"> Remember Me

<input type = submit class="form-control btn btn-primary" value = "Login" name = "login">
</div>
</form>
</div>
</body>
</html>
<?php 
if(isset($_POST['login']))
{
$username = $_POST['username'];
$pwd = $_POST['pwd'];
//syntax to fetch value of checkbox
if(isset($_POST['rem']))
{
$remember = "yes";
}
else
{
$remember = "no";
}
include "dbconfigure.php";
//check if user is valid or not
$query = "select count(*) from admin where adminname='$username' and password='$pwd'";
$ans = my_one($query);
if($ans==1)
{
//save username and password to session variables
$_SESSION['sun'] = $username;
$_SESSION['spwd'] = $pwd;

//if remember is yes , save them to cookie too
 
if($remember=='yes')
{
setcookie('cun',$username,time()+60*60*24*7);
setcookie('cpwd',$pwd,time()+60*60*24*7);
}
header("location:admin_home.php");

}
else
{
echo '<script>alert("Invalid Credentials , Login Failed")</script>';
}
}
?>