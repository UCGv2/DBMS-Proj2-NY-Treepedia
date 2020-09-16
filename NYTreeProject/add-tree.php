<!DOCTYPE html>
<html lang="en">
<?php
 include "nytreeproject.php";
 ?>
<head>
  <title>Add a Tree</title>
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
  <h1>Add a Tree</h1> 
</div>

 <form action="/tree-insert.php">
  <h3>Enter Block ID:</h3>
  <input type="text" name="blockid"><br>
  <h3>Enter Tree DBH:</h3>
  <input type="text" name="treedbh"><br>
  <h3>Enter Stump Diameter:<br>
  <input type="text" name="stumpdiameter"><br>
  
  <h3>Select Curb Location: </h3>
  <select name = curb>
  <option value="OnCurb">On Curb</option>
  <option value="OffsetFromCurb">Offset from Curb</option>
</select><br>
  <h3>Select Status: </h3>
  <select name = "status">
  <option value="Alive">Alive</option>
  <option value="Stump">Stump</option>
  <option value="Dead">Dead</option>
</select><br>
 <h3>Select Health: </h3>
  <select name = "health">
  <option value="Good">Good</option>
  <option value="Fair">Fair</option>
  <option value="Poor">Poor</option>
</select><br>
<h3>Enter Latin Name:</h3>
  <input type="text" name="spclatin"><br>
<h3> Enter English Name:</h3>
  <input type="text" name="spceng"><br> 
  
  <h3>Select Steward: </h3>
  <select name = "steward">
  <option value="none">None</option>
  <option value="1or2">1or2</option>
  <option value="3or4">3or4</option>
</select><br>
<h3>Select Guards: </h3>
  <select name = "guards">
  <option value="None">None</option>
  <option value="Helpful">Helpful</option>
  <option value="Harmful">Harmful</option>
  <option value="Unsure">Unsure</option>
</select><br>

<h3>Select Sidewalk: </h3>
  <select name = "sidewalk">
  <option value="No Damage">No Damage</option>
  <option value="Damage">Damage</option>
</select><br>
  
  <h3>Select User Type: </h3>
  <select name = "usertype">
  <option value="TreesCount Staff">TreesCount Staff</option>
  <option value="Volunteer">Volunteer</option>
  <option value="NYC Parks Staff">NYC Parks Staff</option>
</select><br>

<h3>Root Stone?: </h3>
  <select name = "rtstone">
<option value="No">No</option>
  <option value="Yes">Yes</option>>
</select><br>

<h3>Root Grate?: </h3>
  <select name = "rtgrate">
<option value="No">No</option>
  <option value="Yes">Yes</option>
</select><br>

<h3>Root Other?: </h3>
  <select name = "rtother">
<option value="No">No</option>
  <option value="Yes">Yes</option>
</select><br>

<h3>Trunk Wire?: </h3>
  <select name = "trnkwire">
<option value="No">No</option>
  <option value="Yes">Yes</option>
</select><br>

<h3>Trunk Light?: </h3>
  <select name = "trnklight">
<option value="No">No</option>
  <option value="Yes">Yes</option>
</select><br>

<h3>Trunk Other?: </h3>
  <select name = "trnkother">
<option value="No">No</option>
  <option value="Yes">Yes</option>
</select><br>

<h3>Branch Light?: </h3>
  <select name = "brnchlight">
<option value="No">No</option>
  <option value="Yes">Yes</option>
</select><br>

<h3>Branch Shoe?: </h3>
  <select name = "brnchshoe">
<option value="No">No</option>
  <option value="Yes">Yes</option>
</select><br>

<h3>Branch Other?: </h3>
  <select name = "brnchother">
   <option value="No">No</option>
  <option value="Yes">Yes</option>
</select><br>

 <h3>Enter Address:</h3>
  <input type="text" name="addr"><br>
  
  <h3>Enter Community:</h3>
  <input type="text" name="community"><br>
  
  
   <h3>Enter Cncl Dist:</h3>
  <input type="text" name="cncldist"><br>
  
   <h3>Enter State Assembly:</h3>
  <input type="text" name="assem"><br>
  
   <h3>Enter State Senate:</h3>
  <input type="text" name="senate"><br>
  
  <h3> Enter Postcode:</h3>
  <input type="text" name="postcode"><br>
  
   <h3>Enter Borough Count:</h3>
  <input type="text" name="borocnt"><br>
  
   <h3>Enter Latitude:</h3>
  <input type="text" name="lat"><br>
 
  <h3>Enter Longitude:</h3>
  <input type="text" name="long"><br>
  
  <h3>Enter X_SP:</h3>
  <input type="text" name="xsp"><br>
  
  <h3>Enter Y_SP:</h3>
  <input type="text" name="ysp"><br>
  
  <h3>Enter Council District:</h3>
  <input type="text" name="councildist"><br>
  
  <h3>Enter Census Tract:</h3>
  <input type="text" name="censustr"><br>
  
  <h3>Enter Bin:</h3>
  <input type="text" name="bin"><br>
  
<h3>  Enter BBL:</h3>
  <input type="text" name="bbl"><br>
  
  
  
 <input type="submit" value="Submit">
</form>
 

</body>
</html>