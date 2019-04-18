<?php
require('connect_member.php');
 //$dept_no = $_REQUEST['pk_id'];
  // open the connection 
  /* Performing SQL query */ 
  $sql = "DELETE from member WHERE mb_id = '".$_GET["mb_id"]."'"; 
  // execute the SQL statement 
  if ($conn->query($sql)) { 

    echo "<script>alert(' การทำรายการเสร็จสมบูรณ์');window.location ='admin_show_member.php';</script>";
} else { 
echo " Error : ". mysqli_error(); 
}
$conn->close(); 
?>