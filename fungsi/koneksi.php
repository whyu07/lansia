<?php
$mysql_host = "localhost";
$mysql_user = "root";
$mysql_password = "mysql";
$mysql_db = "dbsistempakar";
mysql_connect($mysql_host, $mysql_user, $mysql_password)or die("Error Connecting to MYSql Server:".mysql_error());  
mysql_select_db($mysql_db)or die("Error Selecting MYSql Database:".mysql_error());  

?>