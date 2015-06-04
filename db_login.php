<?php 
   $db_host='127.0.0.1';
   $db_database='ARM';
   $db_username='root';
   $db_password='root';
   $db_database = 'ARM';
   $connection = mysql_connect($db_host, $db_username, $db_password);
   $db_select = mysql_select_db($db_database);
   mysql_query("SET NAMES utf8");
?>