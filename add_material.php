<?php

include "db_connect.php";

// Search database for Sand

$new_ID = $_GET["new_ID"];
$new_Material = $_GET["new_Material"];
$new_Types_of_Use = $_GET["new_Types_of_Use"];
$new_Issues_in_material_extraction = $_GET["new_Issues_in_material_extraction"];
$new_Issues_in_production = $_GET["new_Issues_in_production"];
$new_Environmental_Benefits = $_GET["new_Environmental_Benefits"];
$new_Potential_material_alternatives = $_GET["new_Potential_material_alternatives"];
$new_Better_practices = $_GET["new_Better_practices"];
$new_Key_Specific_Resources = $_GET["new_Key_Specific_Resources"];

$new_ID = addslashes($new_ID);
$new_Material = addslashes($new_Material);
$new_Types_of_Use = addslashes($new_Types_of_Use);
$new_Issues_in_material_extraction = addslashes($new_Issues_in_material_extraction);
$new_Issues_in_production = addslashes($new_Issues_in_production);
$new_Environmental_Benefits = addslashes($new_Environmental_Benefits);
$new_Potential_material_alternatives = addslashes($new_Potential_material_alternatives);
$new_Better_practices = addslashes($new_Better_practices);
$new_Key_Specific_Resources = addslashes($new_Key_Specific_Resources);


echo "<h2> Added a new material: $new_Material </h2>";

$sql = "INSERT INTO bmeg (ID, Material, Types_of_Use, Issues_in_material_extraction, Issues_in_production, Environmental_Benefits, Potential_material_alternatives, Better_practices, Key_Specific_Resources) VALUES ('$new_ID','$new_Material','$new_Types_of_Use','$new_Issues_in_material_extraction','$new_Issues_in_production','$new_Environmental_Benefits','$new_Potential_material_alternatives','$new_Better_practices','$new_Key_Specific_Resources')";

$result = $mysqli->query($sql) or die(mysqli_error($mysqli));

include "search_all_materials.php"

?>

<a href ="index.php">Return to main page<a/>

