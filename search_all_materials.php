
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

// check for failed connection
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

// gather data from table and store in result
$sql = "SELECT ID, Material, Types_of_Use, Issues_in_material_extraction, Issues_in_production, Environmental_Benefits, Potential_material_alternatives, Better_practices, Key_Specific_Resources FROM bmeg";

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
				Types of Use
			</th>
			<th>
				Issues in Material Extraction
			</th>
			<th>
				Issues in Production
			</th>
			<th>
				Environmental Benefits
			</th>
			<th>
				Potential Material Alternatives
			</th>
			<th>
				Better Practices
			</th>
			<th>
				Key Specific Resources
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
				echo "<strong>".$row["Material"]
				?>
			</td>
			<td>
				<?php
				echo $row["Types_of_Use"]
				?>
			</td>
			<td>
				<?php
				echo $row["Issues_in_material_extraction"]
				?>
			</td>
			<td>
				<?php
				echo $row["Issues_in_production"]
				?>
			</td>
			<td>
				<?php
				echo $row["Environmental_Benefits"]
				?>
			</td>
			<td>
				<?php
				echo $row["Potential_material_alternatives"]
				?>
			</td>
			<td>
				<?php
				echo $row["Better_practices"]
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