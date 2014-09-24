<?php
$row_num = 0;

if( ($handle = fopen("csv/mycsv.csv", "r")) !== FALSE ) {
  while( ($row = fgetcsv($handle, 1000, ",")) != FALSE) {
    if( $row_num == 0 ) {
      $column_heading = $row;
      print_r( $column_heading );
      $row_num = 1;
    } else {

    }
  }
}


?>
