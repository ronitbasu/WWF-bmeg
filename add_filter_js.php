
<?php

function php_func(){
	

include "db_connect.php";

//$keywordfromform = $_GET["keyword"];
$filtertag = "A";

$sql = "SELECT ID, Material, Issues_in_material_extraction, Issues_in_production, Environmental_Benefits, Potential_material_alternatives, Better_practices, Types_of_Use FROM bmeg WHERE (ID LIKE '%" . "$filtertag" . "%')";


$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    

echo"<table class='table table-condensed'><thead><tr><th>ID</th><th>Material</th><th>Types of Use</th><th>Issues in Material Extraction</th><th>Issues in Production</th><th>Environmental Benefits</th><th>Potential Material Alternatives</th><th>Better Practices</th></tr></thead><tbody>";


   while($row = $result->fetch_assoc()) {

echo"<tr><td>";

		echo	$row["ID"];

echo"</td><td>";


			echo "<strong>".$row["Material"];

		      echo"</td><td>"; 

		      echo $row["Types_of_Use"];

       						echo"</td><td>";

	
		echo $row["Issues_in_material_extraction"];

		echo"</td><td>";

		echo $row["Issues_in_production"];

				echo"</td><td>";

			echo $row["Environmental_Benefits"];


				echo"</td><td>";


		echo $row["Potential_material_alternatives"];

				echo"</td><td>";

       				echo $row["Better_practices"];


				echo"</td></tr>";

}
echo"</tbody></table>";
}

}


function php_funcb(){
	

include "db_connect.php";

//$keywordfromform = $_GET["keyword"];
$filtertag = "B";

$sql = "SELECT ID, Material, Issues_in_material_extraction, Issues_in_production, Environmental_Benefits, Potential_material_alternatives, Better_practices, Types_of_Use FROM bmeg WHERE (ID LIKE '%" . "$filtertag" . "%')";


$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    

echo"<table class='table table-condensed'><thead><tr><th>ID</th><th>Material</th><th>Types of Use</th><th>Issues in Material Extraction</th><th>Issues in Production</th><th>Environmental Benefits</th><th>Potential Material Alternatives</th><th>Better Practices</th></tr></thead><tbody>";


   while($row = $result->fetch_assoc()) {

echo"<tr><td>";

		echo	$row["ID"];

echo"</td><td>";


			echo "<strong>".$row["Material"];

		      echo"</td><td>"; 

		      echo $row["Types_of_Use"];

       						echo"</td><td>";

	
		echo $row["Issues_in_material_extraction"];

		echo"</td><td>";

		echo $row["Issues_in_production"];

				echo"</td><td>";

			echo $row["Environmental_Benefits"];


				echo"</td><td>";


		echo $row["Potential_material_alternatives"];

				echo"</td><td>";

       				echo $row["Better_practices"];


				echo"</td></tr>";

}
echo"</tbody></table>";
}


}

function php_funcc(){
	

include "db_connect.php";

//$keywordfromform = $_GET["keyword"];
$filtertag = "C";

$sql = "SELECT ID, Material, Issues_in_material_extraction, Issues_in_production, Environmental_Benefits, Potential_material_alternatives, Better_practices, Types_of_Use FROM bmeg WHERE (ID LIKE '%" . "$filtertag" . "%')";


$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    

echo"<table class='table table-condensed'><thead><tr><th>ID</th><th>Material</th><th>Types of Use</th><th>Issues in Material Extraction</th><th>Issues in Production</th><th>Environmental Benefits</th><th>Potential Material Alternatives</th><th>Better Practices</th></tr></thead><tbody>";


   while($row = $result->fetch_assoc()) {

echo"<tr><td>";

		echo	$row["ID"];

echo"</td><td>";


			echo "<strong>".$row["Material"];

		      echo"</td><td>"; 

		      echo $row["Types_of_Use"];

       						echo"</td><td>";

	
		echo $row["Issues_in_material_extraction"];

		echo"</td><td>";

		echo $row["Issues_in_production"];

				echo"</td><td>";

			echo $row["Environmental_Benefits"];


				echo"</td><td>";


		echo $row["Potential_material_alternatives"];

				echo"</td><td>";

       				echo $row["Better_practices"];


				echo"</td></tr>";

}
echo"</tbody></table>";
}


}

function php_funcd(){
	

include "db_connect.php";

//$keywordfromform = $_GET["keyword"];
$filtertag = "D";

$sql = "SELECT ID, Material, Issues_in_material_extraction, Issues_in_production, Environmental_Benefits, Potential_material_alternatives, Better_practices, Types_of_Use FROM bmeg WHERE (ID LIKE '%" . "$filtertag" . "%')";


$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    

echo"<table class='table table-condensed'><thead><tr><th>ID</th><th>Material</th><th>Types of Use</th><th>Issues in Material Extraction</th><th>Issues in Production</th><th>Environmental Benefits</th><th>Potential Material Alternatives</th><th>Better Practices</th></tr></thead><tbody>";


   while($row = $result->fetch_assoc()) {

echo"<tr><td>";

		echo	$row["ID"];

echo"</td><td>";


			echo "<strong>".$row["Material"];

		      echo"</td><td>"; 

		      echo $row["Types_of_Use"];

       						echo"</td><td>";

	
		echo $row["Issues_in_material_extraction"];

		echo"</td><td>";

		echo $row["Issues_in_production"];

				echo"</td><td>";

			echo $row["Environmental_Benefits"];


				echo"</td><td>";


		echo $row["Potential_material_alternatives"];

				echo"</td><td>";

       				echo $row["Better_practices"];


				echo"</td></tr>";

}
echo"</tbody></table>";
}


}

function php_funce(){
	

include "db_connect.php";

//$keywordfromform = $_GET["keyword"];
$filtertag = "E";

$sql = "SELECT ID, Material, Issues_in_material_extraction, Issues_in_production, Environmental_Benefits, Potential_material_alternatives, Better_practices, Types_of_Use FROM bmeg WHERE (ID LIKE '%" . "$filtertag" . "%')";


$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    

echo"<table class='table table-condensed'><thead><tr><th>ID</th><th>Material</th><th>Types of Use</th><th>Issues in Material Extraction</th><th>Issues in Production</th><th>Environmental Benefits</th><th>Potential Material Alternatives</th><th>Better Practices</th></tr></thead><tbody>";


   while($row = $result->fetch_assoc()) {

echo"<tr><td>";

		echo	$row["ID"];

echo"</td><td>";


			echo "<strong>".$row["Material"];

		      echo"</td><td>"; 

		      echo $row["Types_of_Use"];

       						echo"</td><td>";

	
		echo $row["Issues_in_material_extraction"];

		echo"</td><td>";

		echo $row["Issues_in_production"];

				echo"</td><td>";

			echo $row["Environmental_Benefits"];


				echo"</td><td>";


		echo $row["Potential_material_alternatives"];

				echo"</td><td>";

       				echo $row["Better_practices"];


				echo"</td></tr>";

}
echo"</tbody></table>";
}


}



function php_func_env(){
	
	$non = "None";

include "db_connect.php";

$sql = "SELECT ID, Material, Issues_in_material_extraction, Issues_in_production, Environmental_Benefits, Potential_material_alternatives, Better_practices, Types_of_Use FROM bmeg WHERE NOT (Environmental_Benefits LIKE '%" . $non . "%')";


$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    

echo"<table class='table table-condensed'><thead><tr><th>ID</th><th>Material</th><th>Types of Use</th><th>Issues in Material Extraction</th><th>Issues in Production</th><th>Environmental Benefits</th><th>Potential Material Alternatives</th><th>Better Practices</th></tr></thead><tbody>";


   while($row = $result->fetch_assoc()) {

echo"<tr><td>";

		echo	$row["ID"];

echo"</td><td>";


			echo "<strong>".$row["Material"];

		      echo"</td><td>"; 

		      echo $row["Types_of_Use"];

       						echo"</td><td>";

	
		echo $row["Issues_in_material_extraction"];

		echo"</td><td>";

		echo $row["Issues_in_production"];

				echo"</td><td>";

			echo $row["Environmental_Benefits"];


				echo"</td><td>";


		echo $row["Potential_material_alternatives"];

				echo"</td><td>";

       				echo $row["Better_practices"];


				echo"</td></tr>";

}
echo"</tbody></table>";
}


}












?>