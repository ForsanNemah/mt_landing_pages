<?php
//Create a new SQLite3 Database

 


$db = new SQLite3('ads.db');
 
//Create a new table to our database 
$query = "CREATE TABLE IF NOT EXISTS departments (department_name STRING, department_state STRING)";

$db->exec($query);


$query = "CREATE TABLE IF NOT EXISTS  images_table (department_id STRING, image_des STRING,image_path STRING)";
$db->exec($query);
 
?>