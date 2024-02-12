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

  
  <style>
.glow {
  font-size: 80px;
  color: #fff;
  text-align: center;
  -webkit-animation: glow 1s ease-in-out infinite alternate;

}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  }

  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
}
</style>
  
  
  
  
  
  
  
  
<?php include "header.php"; ?>
</head>
<body>
<?php include "navigationbar3.php"; 

echo "<br>Welcome <b style = 'text-transform : capitalize ; color : blue'>$un</b>";
 ?>


<div class="container" style = "margin-top:130px">
<div class = "row">
<div class = "col-sm-4 mydivstyle" >
<a href= "viewplace.php"><h2 style = "color : blue ; font-weight : bold ; text-align : center">Total Places</h2>
<h3 class= "mt-3" style = "color : green ; font-weight : bold ; text-align : center"><?php echo totalplaces();?></h3></a>
</div>
<div class = "col-sm-4 mydivstyle">
<a href= "viewcity.php"><h2 style = "color : blue ; font-weight : bold ; text-align : center">Total Cities</h2>
<h3 class= "mt-3" style = "color : green ; font-weight : bold ; text-align : center"><?php echo totalcities();?></h3></a>
</div>
<div class = "col-sm-4 mydivstyle">
<a href= "viewplace.php"><h2 style = "color : blue ; font-weight : bold ; text-align : center">Total Category</h2>
<h3 class= "mt-3" style = "color : green ; font-weight : bold ; text-align : center"><?php echo totalcategory();?></h3></a>
</div>
</div>
</div>



<footer class="container pt-5 mt-5 text-center">



            <p style = "font-size : 30pt ; color : #FF0000 ; font-weight : bold">

            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All Rights Reserved
                <!--<span style = "color : brown">|</span>
                <span style = "color : #006400">This website is made with <i class="fas fa-heart icon-heart text-warning"></i> by </span><a class= "glow" href="#" target="_blank">ABC XYZ</a>-->

            </p>


    </footer>




</body>
</html>
<?php 
function totalplaces()
{
$query = "select * from place";
$rs = my_select($query);
$n = mysqli_num_rows($rs);
return $n;
}

function totalcities()
{
$query = "select * from city";
$rs = my_select($query);
$n = mysqli_num_rows($rs);
return $n;
}

function totalcategory()
{
$query = "select * from category";
$rs = my_select($query);
$n = mysqli_num_rows($rs);
return $n;
}
?>
