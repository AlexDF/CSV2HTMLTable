<?php
$row_num = 0;

ini_set('auto_detect_line_endings', TRUE);
if( ($handle = fopen("csv/mycsv.csv", "r")) !== FALSE ) {
  while( ($row = fgetcsv($handle, 1000, ",")) != FALSE) {
    if( $row_num == 0 ) {
      $column_heading = $row;
      print_r( $column_heading );
      $row_num = 1;
    } else {
      $record = array_combine( $column_heading, $row );
      $records[] = $record;
    } // end if-else
  } // end while
  
  fclose( $handle );

} // end if

foreach($records as $record) {
  foreach( $record as $key => $value ) {
    echo $key . ':' . $value . "</br> \n";
  }
  echo '<hr>';
}

?>
