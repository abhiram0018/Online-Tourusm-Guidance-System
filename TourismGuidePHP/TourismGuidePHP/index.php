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

<div id = "demo" class = "carousel slide" data-ride = "carousel">

<ul class = "carousel-indicators">
<li data-target="#demo" data-slide-to="0" class = "active"></li>
<li data-target="#demo" data-slide-to="1" ></li>
<li data-target="#demo" data-slide-to="2" ></li>
<li data-target="#demo" data-slide-to="3" ></li>
<li data-target="#demo" data-slide-to="4" ></li>
</ul>

<div class="carousel-inner">
<div class="carousel-item active">
<img src = "images/1.jpg" style = "width : 100% ; height : 500px">
</div>

<div class="carousel-item">
<img src = "images/2.jpg" style = "width : 100% ; height : 500px">
</div>

<div class="carousel-item">
<img src = "images/3.jpg" style = "width : 100% ; height : 500px">
</div>

<div class="carousel-item">
<img src = "images/4.jpg" style = "width : 100% ; height : 500px">
</div>

<div class="carousel-item">
<img src = "images/5.jpg" style = "width : 100% ; height : 500px">
</div>
</div>
</div>



 <?php 
include "dbconfigure.php";
$query1 = "select * from city";
$rs1 = my_select($query1);

$query2 = "select * from category";
$rs2 = my_select($query2);
?> 
  
  <div class="container">
      <form method="post" action="showplaces.php">
          <div class="form-group col-xs-4">
              <label> Select City </label>
      <select name="city" class="form-control">
    <?php
    while ($row1 = mysqli_fetch_array($rs1)){
       ?> 
<option value="<?= $row1[1]?>"><?= $row1[1]?></option>
<?php
}
    ?>
</select>
      
<label>Select Category</label>
      <select name="category" class="form-control">
    <?php
    while ($row2 = mysqli_fetch_array($rs2)){
       ?> 
<option value="<?= $row2[1]?>"><?= $row2[1]?></option>
<?php
}
    ?>
</select>
<input type ="submit" value="Search" class="btn btn-block btn-primary">
  </div>
</form>
</div>
</body>
</html>