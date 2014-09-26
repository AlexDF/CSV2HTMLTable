<!DOCTYPE html>
<html>
<head>
  <link type="text/css" rel="stylesheet" href="css/style.css"/>
  
</head>

<body>



</body>

<form method="post" action="" enctype="multipart/form-data">
  <input type="file" name="csvUpload" id="csvUpload"/>
  <div id="csvDropContainer">
    <input type="file" name="csvDrop" id="csvDrop"/>
  </div>
  <input type="submit" value="Generate Table"/>
</form>

<?php
/*ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);*/

include("lib/php/class.php");

Records::loadRecords();

?>

</html>
