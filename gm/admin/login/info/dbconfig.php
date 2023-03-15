<?php
//Create a new SQLite3 Database

 


$db = new SQLite3('info.db');
 
 


$query = "CREATE TABLE IF NOT EXISTS  info (end_date STRING)";
$db->exec($query);
 
?>