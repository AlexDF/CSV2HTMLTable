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
//$fileDir = $_FILES[csvUpload]["tmp_name"] or $_FILES[csvDrop]["tmp_name"];
if($_FILES[csvDrop]["tmp_name"]){
  $fileDir = $_FILES[csvDrop]["tmp_name"];
} else {
  $fileDir = $_FILES[csvUpload]["tmp_name"];
}

$row_num = 0;

ini_set('auto_detect_line_endings', TRUE);
if( ($handle = fopen($fileDir, "r")) !== FALSE ) {
  

  while( ($row = fgetcsv($handle, 1000, ",")) != FALSE) {
    if( $row_num == 0 ) {
      $column_heading = $row;
      //print_r( $column_heading );
      $row_num = 1;
    } else {
      $record = array_combine( $column_heading, $row );
      $records[] = $record;
    } // end if-else
  } // end while
  
  fclose( $handle );

} // end if

echo '<table>';

echo "<tr>";
foreach($column_heading as $column){
  echo "<th>" . $column . "</th>";
}
echo "</tr>";


foreach($records as $record) {
  echo "<tr>";
  foreach( $record as $key => $value ) {
    echo "<td>" . $value . "</td>";
  }
  echo "</tr>";
}

echo "</table>";

?>

</html>
