<!DOCTYPE html>
<html>
<body>
<?php
 include "nytreeproject.php";
 ?>
<head>
  <title>Pick a Borough</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
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
<br>
<br>
<br>
<h1 align = "center">Pick a Borough</h1>
<input type="button" align = "center" class="btn-default btn-lg btn-block" value="Bronx" onclick=" go_bronx()">

<script>
function go_bronx()
{
     location.href = "bronx.php";
} 
</script>
<input type="button" class="btn-default btn-lg btn-block" value="Brooklyn" onclick=" go_brook()">

<script>
function go_brook()
{
     location.href = "brooklyn.php";
} 
</script>
<input type="button" class="btn-default btn-lg btn-block" value="Manhattan" onclick=" go_man()">

<script>
function go_man()
{
     location.href = "manhattan.php";
} 
</script>
<input type="button" class="btn-default btn-lg btn-block" value="Staten Island" onclick=" go_sis()">

<script>
function go_sis()
{
     location.href = "sisland.php";
} 
</script>
<input type="button" class="btn-default btn-lg btn-block" value="Queens" onclick=" go_que()">

<script>
function go_que()
{
     location.href = "queens.php";
} 
</script>
 