<?php 

  //--------------------------------------------------------------------------
  // Example php script for fetching data from mysql database
  //--------------------------------------------------------------------------
  $host = "localhost";
  $user = "hamlet";
  $pass = "gertrude";

  $databaseName = "bibleorshakespeare";
  $tableName = "quote";

  //--------------------------------------------------------------------------
  // 1) Connect to mysql database
  //--------------------------------------------------------------------------
//  include 'DB.php';
  $con = mysql_connect($host,$user,$pass);
  $dbs = mysql_select_db($databaseName, $con);

  //--------------------------------------------------------------------------
  // 2) Query database for data
  //--------------------------------------------------------------------------
  function getSourses(){
    $sql = "select sourceId, source from source";
    $result = mysql_query($sql) or die ("no query");

    $result_array = array();
    while($row = mysql_fetch_assoc($result))
    {
        $result_array[] = $row;
    }

    return $result_array;
  }

  //--------------------------------------------------------------------------
  // 3) echo result as json 
  //--------------------------------------------------------------------------

?>