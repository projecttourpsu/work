<?php
require('connect_member.php');
 //$dept_no = $_REQUEST['pk_id'];
  // open the connection 
  /* Performing SQL query */ 
  $sql = "DELETE from package1 WHERE pk_id = '".$_GET["pk_id"]."'"; 
  // execute the SQL statement 
  if ($conn->query($sql)) { 

    echo "<script>alert(' การทำรายการเสร็จสมบูรณ์');window.location ='package_edit.php';</script>";
} else { 
echo " Error : ". mysqli_error(); 
}
$conn->close(); 
?>