<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<style>
tr:hover{background-color:#f5f5f5}
th {
    background-color: rgb(84,155,159);
    color: white;
}

h1{text-align: center;}
h2{font-size: 25px;}
</style>
</head>
<body>

<h1> Building Material Selection and Use: An Environmental Guide </h1>


<br></br>

</body>




<?php

include "db_connect.php";

$keywordfromform = $_GET["keyword"];

echo " <center > <h2> Showing all materials with the word $keywordfromform </h2> </center> <hr>";

?>

<br></br>

<?php

$sql = "SELECT ID, Material, Types_of_Use, Issues_in_material_extraction, Issues_in_production, Environmental_Benefits, Potential_material_alternatives, Better_practices, Key_Specific_Resources FROM bmeg WHERE (Material LIKE '%" . $keywordfromform . "%') OR 
(Types_of_Use LIKE '%" . $keywordfromform . "%')";

//OR (Potential_Material_Alternatives LIKE '%" . $keywordfromform . "%')

$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row


?>



<table class="table table-condensed">
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
<?php


   while($row = $result->fetch_assoc()) {

                ?>

<tr>
			<td>
    <?php
		echo	$row["ID"]

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
				//echo $row["Key_Specific_Resources"]
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

<hr>

<?php
} else {
    echo "0 results";
}

?>
  
  <br />
<center>
  <a href ="index.php">Return to main page<a/>
<center/>