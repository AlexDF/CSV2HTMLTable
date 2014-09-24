<?php
$row_num = 0;

ini_set('auto_detect_line_endings', TRUE);
if( ($handle = fopen("csv/mycsv.csv", "r")) !== FALSE ) {
  

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

echo "<table>";

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
