<html lang = "en-US">
<head>
<meta charset = "UTF-8">
<meta name="viewport" content = "width=device-width,initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<?php include "header.php"; ?>


<style>
.checked {
  color: orange;
}
</style>
</head>
<body>
<?php include "navigationbar1.php"; ?>

 <div class="container" style = "margin-top: 50px">
				    <div class=row>
				        <div class="col-sm-12">
  <h2 class = text-center style = "font-family : 'Monotype Corsiva' ; color : #E6120E">Places</h2>



</div>
    
</div>
</div>
         <?php
		 include "dbconfigure.php";
		$city =  @$_POST['city'];
		$category =  @$_POST['category'];
		
		$query = "select * from place where city='$city' and category='$category'";
		$rs = my_select($query);
    while($row = mysqli_fetch_array($rs))
    {
    ?>
        <div class="container" style = "margin : 50px;  border : 2px solid blue">
            <div class="row">
                <div class="col-sm-6 mt-2 mb-2">
                    <img src='<?php echo "admin/$row[2]"?>' width="300px" height="200">
                </div>
                <div class="col-sm-6 mt-4">
                    <b><p><span style = "color : red ;">Place Name </span> &nbsp;&nbsp;<?=$row[1]?></p>
                    <p><span style = "color : red ; ">Description </span> &nbsp;&nbsp;<?=$row[3]?></p>
                    <p><span style = "color : red ; ">Location </span> &nbsp;&nbsp;<?=$row[4]?></p>
					
					<?php
					if($row['rating']==1)
					{
					
		            ?>
                    <span class="fa fa-star checked"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<?php 
					}
					
					?>
					<?php
					if($row['rating']==2)
					{
					
		            ?>
                    <span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<?php 
					}
					
					?>
					
					<?php
					if($row['rating']==3)
					{
					
		            ?>
                    <span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<?php 
					}
					
					?>
					
					<?php
					if($row['rating']==4)
					{
					
		            ?>
                    <span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star"></span>
					<?php 
					}
					
					?>
					
					<?php
					if($row['rating']==5)
					{
					
		            ?>
                    <span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<?php 
					}
					
					?>
					
					
                </div>
            </div>
        </div>
        
                    <?php
}
?> 
        
        
    </body>
</html>