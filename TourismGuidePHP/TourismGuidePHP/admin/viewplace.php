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
<h1 class="text-center">View Place</h1>
<?php 
$query = "select * from place";
$rs = my_select($query);

echo "<div class='table-responsive'>";
echo "<table class='table table-hover' id = myTable123>";
echo "<thead style = 'background-color : purple ; color : white'>";
echo "<tr>";
echo "<th>Place ID</th>";
echo "<th>Place Name</th>";
echo "<th>Image</th>";
echo "<th>Description</th>";
echo "<th>Location</th>";
echo "<th>Landmark</th>";
echo "<th>Category</th>";
echo "<th>City</th>";
echo "<th>Rating</th>";
//echo "<th>Edit</th>";
echo "<th>Delete</th>";
echo "</tr>";
echo "</thead>";

echo "<tbody>";
while($column = mysqli_fetch_array($rs))
{
echo "<tr>";
echo "<td>$column[0]</td>";
echo "<td>$column[1]</td>";
echo '<td><img src="'.$column['pimage'].'" width=100 height=100></td>';
echo "<td>$column[3]</td>";
echo "<td>$column[4]</td>";
echo "<td>$column[5]</td>";
echo "<td>$column[6]</td>";
echo "<td>$column[7]</td>";
echo "<td>$column[8]</td>";
//echo //'<td><a class="btn btn-xs btn-warning" href = "editplace.php?id='.$column['pid'].'">Edit</a></td>';
echo '<td><a class="btn btn-xs btn-warning" href = "deleteplace.php?id='.$column['pid'].'">Remove</a></td>';
}
echo "</tbody>";

echo '</table>';
echo "</div>";
?>
</div>


</body>
</html>