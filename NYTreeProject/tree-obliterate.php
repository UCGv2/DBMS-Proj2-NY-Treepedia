<?php
include "nytreeproject.php";
include "delete-tree.php";

$tree_id = $_GET["keyword"];

$sql = "delete from trees where tree_id = \" ". $tree_id . "\"";

$result = $mysqli->query($sql);

if(mysqli_errno($mysqli) > 0) {
	echo "<h2>There was an error. Your tree will not be deleted. </h2>" . mysqli_errno($mysqli);
} else {
	echo "<h2>Tree ". $tree_id ." was successfully deleted. </h2>";
}

?>