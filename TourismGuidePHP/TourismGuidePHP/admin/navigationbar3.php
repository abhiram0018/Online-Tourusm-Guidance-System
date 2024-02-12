

<nav class = "navbar navbar-expand-md bg-dark navbar-dark">
<a class = "navbar-brand" href = "#" style = "color : yellow">Tourism Guide</a>
<span class = "navbar-text" style = "color : white">Admin Panel</span>
<button class="navbar-toggler" type = "button" data-toggle="collapse" data-target="#collapsibleNavbar">
<span class = "navbar-toggler-icon"></span>
</button>

<div class = "collapse navbar-collapse" id = "myMenu">
<ul class = "navbar-nav pl-5 custom-nav">
<li class="nav-item"><a href="admin_home.php" class="nav-link">Home</a></li>

<li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">Place</a>
<div class="dropdown-menu">
<a class = "dropdown-item" href = "addplace.php">Add Place</a>
<a class = "dropdown-item" href = "viewplace.php">View Place</a>
</div>
</li>

<li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">City</a>
<div class="dropdown-menu">
<a class = "dropdown-item" href = "addcity.php">Add City</a>
<a class = "dropdown-item" href = "viewcity.php">View City</a>
</div>
</li>

<li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">Category</a>
<div class="dropdown-menu">
<a class = "dropdown-item" href = "addcategory.php">Add Category</a>
<a class = "dropdown-item" href = "viewcategory.php">View Category</a>
</div>
</li>

<li class = "nav-item"><a href = "signout.php" class="nav-link">Logout</a></li>

</ul>
</div>

</nav>