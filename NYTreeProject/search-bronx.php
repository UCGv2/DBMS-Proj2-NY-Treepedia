<html>
<body>
<style>

</style>


<?php
include "nytreeproject.php";
include "bronx.php";

$keywordfromform = $_GET["keyword"];


$sql = "select * 
from bronx_trees
where spc_common like '% ". $keywordfromform ."%' or 
spc_latin like '%". $keywordfromform . "%'";

$result = $mysqli->query($sql);


if ($result->num_rows > 0) {
	echo "<div class=\"container\">
  <p>The following trees match your search:</p>            
  <table class=\"table table-striped\">
    <thead>
      <tr>
        <th>English Name</th>
        <th>Latin Name</th>
      </tr>
    </thead> 
	<tbody>";
	while($row = $result->fetch_assoc()){
	echo "<tr>
        <td>".$row["spc_common"]. "</td>
        <td>".$row["spc_latin"]."</td>
      </tr>";
	
	}
	echo "</tbody>
	</table>
	</div>";
} else {
	echo "No trees matched your search. \n";
}
?>
</body>
</html>