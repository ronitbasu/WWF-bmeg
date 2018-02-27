<?php

function search_material($material){
	
include "db_connect.php";


//$sql = "SELECT ID, Material, Issues_in_material_extraction, Issues_in_production, Environmental_Benefits, Potential_material_alternatives, Better_practices, Types_of_Use FROM bmeg WHERE (Material LIKE '%" . "$material" . "%')";

$sql = "SELECT ID, Material, Composition, Technical_Use, Better_practices, Disposal_and_Recycle, Other_Comments, Potential_Alternatives FROM `better_practices_and_alternatives` WHERE (Material LIKE 'Bamboo')";

//%" . "$material" . " instead of Bamboo


$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    

echo"<table class='table table-condensed'><thead><tr><th>ID</th><th>Material</th><th>Composition</th><th>Technical Use</th><th>Better Practices</th><th>Disposal and Recycle</th><th>Other Comments</th><th>Potential Material Alternatives</th></tr></thead><tbody>";


   while($row = $result->fetch_assoc()) {

echo"<tr><td>";

		echo	$row["ID"];

echo"</td><td>";


		echo "<strong>".$row["Material"];

		echo"</td><td>"; 

		      echo $row["Composition"];

       						echo"</td><td>";

	
		echo $row["Technical_Use"];

		echo"</td><td>";

		echo $row["Better_practices"];

				echo"</td><td>";

			echo $row["Disposal_and_Recycle"];


				echo"</td><td>";


		echo $row["Other_Comments"];

				echo"</td><td>";

       				echo $row["Potential_Alternatives"];

				echo"</td></tr>";

}
echo"</tbody></table>";
}

}

function search_material2($material){
	
include "db_connect.php";

$sql = "SELECT ID, Material, Impact, Embodied_Energy_Production, CO2_Footprint_Production, Water_Usage, Embodied_Energy_Processing, CO2_Footprint_Processing, Price, Key_Specific_Resources FROM `Environmental_Impacts` WHERE (Material LIKE 'Bamboo')";
//%" . "$material" . "%


$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row


echo"<table class='table table-condensed'><thead><tr><th>ID</th><th>Material</th><th>Impact</th><th>Embodied Energy (Production)</th><th>CO2 Footprint (Production)</th><th>Water Usage</th><th>Embodied Energy (Processing)</th><th>CO2 Footprint (Processing)</th><th>Price</th><th>Key_Specific_Resources</th></tr></thead><tbody>";


   while($row = $result->fetch_assoc()) {

echo"<tr><td>";

		echo	$row["ID"];

echo"</td><td>";


		echo "<strong>".$row["Material"];

		echo"</td><td>"; 

		      echo $row["Impact"];

       						echo"</td><td>";

	
		echo $row["Embodied_Energy_Production"];

		echo"</td><td>";

		echo $row["CO2_Footprint_Production"];

				echo"</td><td>";

			echo $row["Water_Usage"];


				echo"</td><td>";


		echo $row["Embodied_Energy_Processing"];

				echo"</td><td>";

       				echo $row["CO2_Footprint_Processing"];

       								echo"</td><td>";


       			echo $row["Price"];


				echo"</td><td>";

				echo $row["Key_Specific_Resources"];


				echo"</td></tr>";

}
echo"</tbody></table>";
}
}