<!DOCTYPE html>
<html lang="en">
<?php
 include "nytreeproject.php";
 ?>
<head>
  <title>New York Treeopedia</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<style>
.jumbotron { 
  background-color: #81FE8E; /* light green */
  color: #ffffff;
  padding: 100px 25px;
}
.logo {
  font-size: 200px;
}
@media screen and (max-width: 768px) {
  .col-sm-4 {
    text-align: center;
    margin: 25px 0;
  }
}
.bg-grey {
  background-color: #f6f6f6;
}

.navbar {
  margin-bottom: 0;
  background-color: #81FE8E;
  z-index: 9999;
  border: 0;
  font-size: 12px !important;
  line-height: 1.42857143 !important;
  letter-spacing: 4px;
  border-radius: 0;
}

.navbar li a, .navbar .navbar-brand {
  color: #fff !important;
}

.navbar-nav li a:hover, .navbar-nav li.active a {
  color: #81FE8E !important;
  background-color: #fff !important;
}

.navbar-default .navbar-toggle {
  border-color: transparent;
  color: #fff !important;
}

</style>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="home-page.php">NYTreepedia</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
	  <li><a href="stats.php">Stats</a></li>
  <li><a href="tree-pick.php">Search a Tree</a></li>
  <li><a href="borough-pick.php">Search by Borough</a></li>
  <li><a href="collect-update-data.php">Update a Tree</a></li>
  <li><a href="add-tree.php">Add a Tree</a></li>
  <li><a href="delete-tree.php">Delete a Tree</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>New York Treepedia</h1> 
  <p>Your one-stop shop for all the information you want about trees in New York</p> 
  <form class="form-inline" action="/search-species-borough.php" align = "center">
    <div class="input-group">
      <input type="text" name="keyword" class="form-control" size="50" placeholder="Search for something" required>
      <div class="input-group-btn">
        <input type="submit" class="btn btn-info">Submit</button>
      </div>
    </div>
  </form>
</div>
<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-tree-deciduous logo"></span> 
    </div>
    <div class="col-sm-8">
     <h2>Select a tree</h2>
  <p>Do you know a tree's ID number? Click here to search for it.</p>
<input type="button" class="btn-default btn-lg" value="Go" onclick=" go_pick()">

<script>
function go_pick()
{
     location.href = "tree-pick.php";
} 
</script>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-10">
      <h2>Search by Borough</h2> 
      <p>Would you like to search for trees in a particular borough? If you do, click the button below.</p>
	  <input type="button" class="btn-default btn-lg" value="Go" onclick=" go_borough()">
<script>
function go_borough()
{
     location.href = "borough-pick.php";
} 
</script>
    </div>
    <div class="col-sm-2">
      <span class="glyphicon glyphicon-map-marker logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-refresh logo"></span> 
    </div>
    <div class="col-sm-8">
     <h2>Update a tree</h2>
  <p>Have you found outdated data? Click here to fix it.</p>
<input type="button" class="btn-default btn-lg" value="Go" onclick=" go_update()">

<script>
function go_update()
{
     location.href = "collect-update-data.php";
} 
</script>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-10">
      <h2>Add a tree</h2> 
      <p>Have you spotted an undocumented tree?  If you have, click the button below.</p>
      <input type="button" class="btn-default btn-lg" value="Go" onclick=" go_add()">

<script>
function go_add()
{
     location.href = "add-tree.php";
} 
</script>
    </div>
    <div class="col-sm-2">
      <span class="glyphicon glyphicon-plus logo"></span>
    </div>
  </div>
</div>


</body>
</html>

