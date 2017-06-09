<html>

<body>

<center> <h1> Building Material Selection and Use: An Environmental Guide </h1> </center>

<p id="demo"></p>

<?php 

include "db_connect.php";
?>

<form class="form-horizontal" action="search_keyword.php">
<fieldset>

<!-- Form Name -->

<br />
<center> <legend>Search for a Material</legend> </center>
<br />
<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="keyword">Search Key Word</label>
  <div class="col-md-5">
    <input id="keyword" name="keyword" type="search" placeholder="e.g Sand" class="form-control input-md" required="">
    <p class="help-block">Enter a material name or use to search for in the BMEG</p>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Search</button>
  </div>
</div>

</fieldset>
</form>

<br />

<?php
include "add_filter_js.php";
include "add_filter_css.php";
?>


<?php


echo '<br />';
echo '<br />';

include "search_all_materials.php";
  
?>

<hr


<form action="/add_material.php">

  Please enter a new ID here:<br>
  <input type="text" name="new_ID"><br>

   Please enter a new Material here:<br>
  <input type="text" name="new_Material"><br>

  Please enter the Types of Use:<br>
  <input type="text" name="new_Types_of_Use"><br>

  Please enter the Issues in material extraction here:<br>
  <input type="text" name="new_Issues_in_material_extraction"><br>

  Please enter the Issues in production here:<br>
  <input type="text" name="new_Issues_in_production"><br>

 Please enter the Environmental Benefits here:<br>
  <input type="text" name="new_Environmental_Benefits"><br>

  Please enter the Potential material alternatives here:<br>
  <input type="text" name="new_Potential_material_alternatives"><br>

  Please enter the Better practices here:<br>
  <input type="text" name="new_Better_practices"><br>

  Please enter the Key Specific Resources here:<br>
  <input type="text" name="new_Key_Specific_Resources"><br>
 
  <input type="submit" value="Submit">
</form>



<br>
<br>
<br>
<br>

<?php
//<div id = "demo"> Hi </div>


$mysqli->close();

 ?>

</body>

<head>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

</html>