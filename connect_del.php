<?php
//ส่วนของการติดต่อฐานข้อมูล
$host= "localhost";
$user= "root";
$password="";
$dbname="pk_project";
//open the connection
$mysqli=new mysqli($host,$user,$password) or die ("Could not connect");

//pick the database to user
$mysqli->select_db($dbname)or die ("Could not connect database");
?>