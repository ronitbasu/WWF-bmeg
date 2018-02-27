
<head>
<?php
include "db_connect.php";
?>
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
$sql = "SELECT ID, Material, Composition, Technical_Use, Better_Practices, Disposal_and_Recycle, Other_Comments, Potential_Alternatives FROM better_practices_and_alternatives";

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
				Composition
			</th>
			<th>
				Technical Use
			</th>
			<th>
				Better Practices
			</th>
			<th>
				Disposal/Recycle
			</th>
			<th>
				Other_Comments
			</th>
			<th>
				Potential_Alternatives
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
				echo $row["Composition"]
				?>
			</td>
			<td>
				<?php
				echo $row["Technical_Use"]
				?>
			</td>
			<td>
				<?php
				echo $row["Better_Practices"]
				?>
			</td>
			<td>
				<?php
				echo $row["Disposal_and_Recycle"]
				?>
			</td>
			<td>
				<?php
				echo $row["Other_Comments"]
				?>
			</td>
			<td>
				<?php
				echo $row["Potential_Alternatives"]
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