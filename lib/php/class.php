<?php
class record{
  public $firstname, $lastname, $company, $address, $city, $county, $state, $zip, $phone1, $phone2, $email, $web;

  public function __construct($fn, $ln, $comp, $addr, $city, $county, $state, $zip, $ph1, $ph2, $email, $web){
    $this->firstname = $fn;
    $this->lastname = $ln;
    $this->company = $comp;
    $this->address = $addr;
    $this->city = $city;
    $this->county = $county;
    $this->state = $state;
    $this->zip = $zip;
    $this->phone1 = $ph1;
    $this->phone2 = $ph2;
    $this->email = $email;
    $this->web = $web;
  } // end construct
}  //end record class

class Records{
  
  public static function hello() {
    echo '<h1>hello</h1>';
  }

  public static function loadRecords() {
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
          $row_num = 1;
        } else {
          $record = array_combine( $column_heading, $row );
          $records[] = $record;
        } // end if-else
      } // end while
  
      fclose( $handle );
    } // end if

    echo '<table cellspacing="0">';

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

  } // end loadRecords()
} // end class Records


?>