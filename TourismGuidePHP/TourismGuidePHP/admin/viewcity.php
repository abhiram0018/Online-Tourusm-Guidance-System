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

 
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

  <script type="text/javascript">
  $(document).ready(function () {
$('#myTable123').DataTable();
$('.dataTables_length').addClass('bs-select');
});

  </script>
  
  
<?php include "header.php"; ?>
</head>
<body>
<?php include "navigationbar3.php"; ?>

<div class="container" style = "margin-top : 50px">
<h1 class="text-center">View City</h1>
<?php 
$query = "select * from city";
$rs = my_select($query);

echo "<div class='table-responsive'>";
echo "<table class='table table-hover' id = myTable123>";
echo "<thead style = 'background-color : purple ; color : white'>";
echo "<tr>";
echo "<th>City ID</th>";
echo "<th>City Name</th>";
echo "<th>Edit</th>";
echo "<th>Delete</th>";
echo "</tr>";
echo "</thead>";

echo "<tbody>";
while($column = mysqli_fetch_array($rs))
{
echo "<tr>";
echo "<td>$column[0]</td>";
echo "<td>$column[1]</td>";
echo '<td><a class="btn btn-xs btn-warning" href = "editcity.php?id='.$column['cid'].'">Edit</a></td>';
echo '<td><a class="btn btn-xs btn-warning" href = "deletecity.php?id='.$column['cid'].'">Remove</a></td>';
}
echo "</tbody>";

echo '</table>';
echo "</div>";
?>
</div>


</body>
</html>