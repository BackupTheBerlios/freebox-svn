<?
  function dbConnect()
  {
    mysql_pconnect ( MYSQLHOST, MYSQLUSER, MYSQLPASS );
    mysql_select_db ( DB );
  }
  
?>