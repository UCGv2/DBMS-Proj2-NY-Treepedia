<?php
include "nytreeproject.php";
include "add-tree.php";

$blockid = $_GET["blockid"];
$treedbh = $_GET["treedbh"];
$stumpdiam = $_GET["stumpdiameter"];
$curb = $_GET["curb"];
$status = $_GET["status"];
$health = $_GET["health"];
$spclatin = $_GET["spclatin"];
$spceng = $_GET["spceng"];
$steward = $_GET["steward"];
$guards = $_GET["guards"];
$sidewalk = $_GET["sidewalk"];
$usertype = $_GET["usertype"];
$rtstone = $_GET["rtstone"];
$rtgrate = $_GET["rtgrate"];
$rtother = $_GET["rtother"];
$trnkwire = $_GET["trnkwire"];
$trnklight = $_GET["trnklight"];
$trnkother = $_GET["trnkother"];
$brnchlight = $_GET["brnchlight"];
$brnchshoe = $_GET["brnchshoe"];
$brnchother = $_GET["brnchother"];
$addr = $_GET["addr"];
$community = $_GET["community"];
$cncldist = $_GET["cncldist"];
$assem = $_GET["assem"];
$senate = $_GET["senate"];
$postcode = $_GET["postcode"];
$borocnt = $_GET["borocnt"];
$lat = $_GET["lat"];
$long = $_GET["long"];
$xsp = $_GET["xsp"];
$ysp = $_GET["ysp"];
$councildist = $_GET["councildist"];
$censustr = $_GET["censustr"];
$bin = $_GET["bin"];
$bbl = $_GET["bbl"];


$sql = "call  proper_insertion( \" ".$blockid. "\",\"" .$treedbh."\",\"" .$stumpdiam. "\",\"" .$curb. "\",\"" .$status. "\",\"".
 $health . "\",\"". $spclatin . "\",\"". $spceng . "\",\"".$steward . "\",\"".$guards . "\",\"".$sidewalk . "\",\"".$usertype . "\",\"".  $rtstone . "\",\"".
$rtgrate . "\",\"".$rtother . "\",\"".$trnkwire . "\",\"".$trnklight . "\",\"".$trnkother . "\",\"".$brnchlight. "\",\"".$brnchshoe . "\",\"".
$brnchother . "\",\"". $addr . "\",\"".$community . "\",\"". $cncldist . "\",\"".$assem . "\",\"".$senate . "\",\"". $postcode . "\",\"".$borocnt . "\",\"".
$lat . "\",\"". $long . "\",\"".$xsp . "\",\"".$ysp . "\",\"".$councildist . "\",\"". $censustr . "\",\"". $bin . "\",\"". $bbl ."\" " . ");";

$result = $mysqli->query($sql);

if(mysqli_errno($mysqli) > 0) {
	echo "<h2>There was an error. Your tree will not be added. </h2>" . mysqli_errno($mysqli);
} else {
	$sql = "select * from most_recent_tree;";
	$result = $mysqli->query($sql);
	while($row = $result->fetch_assoc()){
	
	echo "<h2>Your tree was successfully added! It is number ". $row["max(tree_id)"] .".</h2>";
}
}
?>