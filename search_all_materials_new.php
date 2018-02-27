
<head>
<!-- change color while hovering over table row and set color and background for table heading -->
<style>
tr:hover {
	background-color:#f5f5f5
} 
th {
    background-color: rgb(84,155,159);
    color: white;
}

</style>
</head>

<?php
include "search_material_js.php";

// check for failed connection
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

// gather data from table and store in result
$sql = "SELECT ID, Material, Impact, Embodied_Energy_Production, CO2_Footprint_Production, Water_Usage, Embodied_Energy_Processing, CO2_Footprint_Processing, Price, Key_Specific_Resources FROM `Environmental_Impacts`";

$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

?>

<!-- create headers for table -->
<table id = "table" class="table table-condensed">
	<thead>
		<tr>
			<th>
				ID
			</th>
			<th>
				Material
			</th>
			<th>
				Impact During Stages
			</th>
			<th>
				Embodied Energy (Production)
			</th>
			<th>
				CO2 Footprint (Production)
			</th>
			<th>
				Water Usage
			</th>
			<th>
				Embodied Energy (Processing)
			</th>
			<th>
				CO2 Footprint (Processing)
			</th>
			<th>
				Price (USD)
			</th>
			<th>
				References
			</th>
		</tr>
	</thead>
<tbody>
<!-- get row -->
<?php
    while($row = $result->fetch_assoc()) {
?>

<!-- display row -->

<tr>
			<td>
    			<?php
				echo $row["ID"]
				?>
			</td>
			<td>
				<?php
  				$material = $row["Material"]
				?>
				<a href="#" onclick="search_material(event)"> <?php echo $material ?> </a>
				<script> 

	function search_material (material) {
	// return true or false, depending on whether you want to allow the `href` property to follow through or not
	var material = material.target.innerText
	console.log(material)
	document.getElementById("sub-heading").innerHTML  = "<center> <legend>Better Practices</legend> </center>";
	document.getElementById("table").innerHTML  = "<?php search_material($material);?>";
	document.getElementById("s2").innerHTML  = "<center> <legend>Environmental_Impacts</legend> </center>";
	document.getElementById("t2").innerHTML  = "<?php search_material2($material);?>";


	}


				</script>
			</td>
			<td>
				<?php
				echo $row["Impact"]
				?>
			</td>
			<td>
				<?php
				echo $row["Embodied_Energy_Production"]
				?>
			</td>
			<td>
				<?php
				echo $row["CO2_Footprint_Production"]
				?>
			</td>
			<td>
				<?php
				echo $row["Water_Usage"]
				?>
			</td>
						<td>
				<?php
				echo $row["Embodied_Energy_Processing"]
				?>
			</td>
						<td>
				<?php
				echo $row["CO2_Footprint_Processing"]
				?>
			</td>
						<td>
				<?php
				echo $row["Price"]
				?>
			</td>
			<td>
				<?php
				//converts Key_Specific_Resources to url
				$url = '@(http)?(s)?(://)?(([a-zA-Z])([-\w]+\.)+([^\s\.]+[^\s]*)+[^,.\s])@';
                $string = preg_replace($url, '<a href="http$2://$4" target="_blank" title="$0">$0</a>', $row["Key_Specific_Resources"]);
				echo $string;
				?>
			</td>
		</tr>

		<?php
}
    ?>

</tbody>
</table>

<?php
} else {
    echo "0 results";
}

?>