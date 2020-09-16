<html>
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
<?php
include "nytreeproject.php";
?>
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
  <h1>Stats</h1> 
</div>

<?php 
include "nytreeproject.php";

$treecnt = "select * from tree_cnt";
$spcnum = "select * from spc_cnt";

$deadnum = "select * from dead_cnt";
$stumpnum = "select * from stump_cnt";

$bronxcom = "select * from bronx_most_common limit 5";

$brookcom = "select * from brook_most_common limit 5";

$mancom = "select * from man_most_common limit 5";

$siscom = "select * from sis_most_common limit 5";

$qcom = "select * from q_most_common limit 5";

$res1 = $mysqli->query($treecnt);
if ($res1->num_rows > 0) {
    // output data of each row
    while($row = $res1->fetch_assoc()) {
       echo "<h1>Our site has ". $row["count(tree_id)"]  ." trees documented in our database.</h1>";
    }
}

$res4 = $mysqli->query($stumpnum);
if ($res4->num_rows > 0) {
    // output data of each row
    while($row = $res4->fetch_assoc()) {
       echo "<h1>Of the documented trees, ". $row["count(tree_id)"]  ." trees are stumps.</h1>";
    }
}

$res3 = $mysqli->query($deadnum);
if ($res3->num_rows > 0) {
    // output data of each row
    while($row = $res3->fetch_assoc()) {
       echo "<h1>Of the documented trees, ". $row["count(tree_id)"]  ." trees are dead.</h1>";
    }
}

$res2 = $mysqli->query($spcnum);
if ($res2->num_rows > 0) {
    // output data of each row
    while($row = $res2->fetch_assoc()) {
       echo "<h1>There are ". $row["count(distinct spc_latin)"]  ." unique species in the database.</h1>";
    }
}


$res5 = $mysqli->query($bronxcom);
if ($res5->num_rows > 0) {
	echo "<div class=\"container\">
  <h2>Top 5 most common trees in Bronx</h2>            
  <table class=\"table table-striped\">
    <thead>
      <tr>
        <th>English Name</th>
        <th>Latin Name</th>
        <th>Tree Count</th>
      </tr>
    </thead> 
	<tbody>";
	while($row = $res5->fetch_assoc()){
	echo "<tr>
        <td>".$row["spc_common"]. "</td>
        <td>".$row["spc_latin"]."</td>
        <td>".$row["count"] ."</td>
      </tr>";
	
	}
	echo "</tbody>
	</table>
	</div>";
}

$res6 = $mysqli->query($brookcom);
if ($res6->num_rows > 0) {
	echo "<div class=\"container\">
  <h2>Top 5 most common trees in Brooklyn:</h2>            
  <table class=\"table table-striped\">
    <thead>
      <tr>
        <th>English Name</th>
        <th>Latin Name</th>
        <th>Tree Count</th>
      </tr>
    </thead> 
	<tbody>";
	while($row = $res6->fetch_assoc()){
	echo "<tr>
        <td>".$row["spc_common"]. "</td>
        <td>".$row["spc_latin"]."</td>
        <td>".$row["count"] ."</td>
      </tr>";
	
	}
	echo "</tbody>
	</table>
	</div>";
}


$res7 = $mysqli->query($mancom);
if ($res7->num_rows > 0) {
	echo "<div class=\"container\">
  <h2>Top 5 most common trees in Manhattan:</h2>            
  <table class=\"table table-striped\">
    <thead>
      <tr>
        <th>English Name</th>
        <th>Latin Name</th>
        <th>Tree Count</th>
      </tr>
    </thead> 
	<tbody>";
	while($row = $res7->fetch_assoc()){
	echo "<tr>
        <td>".$row["spc_common"]. "</td>
        <td>".$row["spc_latin"]."</td>
        <td>".$row["count"] ."</td>
      </tr>";
	
	}
	echo "</tbody>
	</table>
	</div>";
}


$res8 = $mysqli->query($siscom);
if ($res8->num_rows > 0) {
	echo "<div class=\"container\">
  <h2>Top 5 most common trees in Staten Island:</h2>            
  <table class=\"table table-striped\">
    <thead>
      <tr>
        <th>English Name</th>
        <th>Latin Name</th>
        <th>Tree Count</th>
      </tr>
    </thead> 
	<tbody>";
	while($row = $res8->fetch_assoc()){
	echo "<tr>
        <td>".$row["spc_common"]. "</td>
        <td>".$row["spc_latin"]."</td>
        <td>".$row["count"] ."</td>
      </tr>";
	
	}
	echo "</tbody>
	</table>
	</div>";
}


$res9 = $mysqli->query($qcom);
if ($res9->num_rows > 0) {
	echo "<div class=\"container\">
  <h2>Top 5 most common trees in Queens:</h2>            
  <table class=\"table table-striped\">
    <thead>
      <tr>
        <th>English Name</th>
        <th>Latin Name</th>
        <th>Tree Count</th>
      </tr>
    </thead> 
	<tbody>";
	while($row = $res9->fetch_assoc()){
	echo "<tr>
        <td>".$row["spc_common"]. "</td>
        <td>".$row["spc_latin"]."</td>
        <td>".$row["count"] ."</td>
      </tr>";
	
	}
	echo "</tbody>
	</table>
	</div>";
}


?>

</body>
</html>