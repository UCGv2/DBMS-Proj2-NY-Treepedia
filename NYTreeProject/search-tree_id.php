<?php
include "nytreeproject.php";
include "tree-pick.php";

$keywordfromform = $_GET["keyword"];


$sql = "select * 
from trees
where tree_id = ". $keywordfromform .";";

$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
	echo "<div class=\"container\" style=\"overflow-x:auto;\">
  <p>The following tree matches your search:</p>            
  <table  class=\"table table-striped\">
    <thead>
      <tr>
		<th>Tree ID</th>
		<th>Block ID</th>
		<th>Created at</th>
		<th>Tree DBH</th>
		<th>Stump Diameter</th>
		<th>Curb Location</th>
		<th>Status</th>
		<th>Health</th>
		<th>Latin Name</th>
		<th>English Name</th>
		<th>Steward</th>
		<th>Guards</th>
		<th>Sidewalk</th>
		<th>User Type</th>
		<th>Problems</th>
		<th>Root Stone</th>
		<th>Root Grate</th>
		<th>Root Other</th>
		<th>Trunk Wire</th>
		<th>Trunk Light</th>
		<th>Trunk Other</th>
		<th>Branch Light</th>
		<th>Branch Shoe</th>
		<th>Branch Other</th>
		<th>Address</th>
		<th>Community</th>
		<th>Cncl Dist</th>
		<th>St Assem</th>
		<th>St Senate</th>
		<th>Postcode</th>
		<th>Boro Ct</th>
		<th>Latitude</th>
		<th>Longitude</th>
		<th>X_SP</th>
		<th>Y_SP</th>
		<th>Council District</th>
		<th>Census Tract</th>
		<th>Bin</th>
		<th>BBL</th>
      </tr>
    </thead> 
	<tbody>";
	while($row = $result->fetch_assoc()){
		
		echo "<tr>
		<td>". $row["tree_id"] . "</td>
		<td>". $row["block_id"] . "</td>
		<td>". $row["created_at"] . "</td>
		<td>". $row["tree_dbh"] . "</td>
		<td>". $row["stump_diam"] . "</td>
		<td>". $row["curb_loc"] . "</td>
		<td>". $row["status"] . "</td>
		<td>". $row["health"] . "</td>
        <td>".$row["spc_latin"]."</td>
		<td>".$row["spc_common"]. "</td>
		<td>". $row["steward"] . "</td>
		<td>". $row["guards"] . "</td>
		<td>". $row["sidewalk"] . "</td>
		<td>". $row["user_type"] . "</td>
		<td>". $row["problems"] . "</td>
		<td>". $row["root_stone"] . "</td>
		<td>". $row["root_grate"] . "</td>
		<td>". $row["root_other"] . "</td>
		<td>". $row["trunk_wire"] . "</td>
		<td>". $row["trnk_light"] . "</td>
		<td>". $row["trnk_other"] . "</td>
		<td>". $row["brch_light"] . "</td>
		<td>". $row["brch_shoe"] . "</td>
		<td>". $row["brch_other"] . "</td>
		<td>". $row["address"] . "</td>
		<td>". $row["community"] . "</td>
		<td>". $row["cncldist"] . "</td>
		<td>". $row["st_assem"] . "</td>
		<td>". $row["st_senate"] . "</td>
		<td>". $row["postcode"] . "</td>
		<td>". $row["boro_ct"] . "</td>
		<td>". $row["latitude"] . "</td>
		<td>". $row["longitude"] . "</td>
		<td>" . $row["x_sp"] . "</td>
		<td>". $row["y_sp"] . "</td>
		<td>". $row["council_district"] .  "</td>
		<td>". $row["census_tract"] . "</td>
		<td>". $row["bin"] . "</td>
		<td>". $row["bbl"] . "</td>
      </tr>";
	
	}
	echo "</tbody>
	</table>
	</div>";
	
} else {
	echo "No tree matches your search";
	
}
?>