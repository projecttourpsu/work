<?php
session_start();
include("connect_member.php");
//check session
if (!$_SESSION["mb_id"]) {
    //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form
    Header("Location: homepage.php");
} else
    $sql = "SELECT * from	member where mb_id = '" . $_SESSION['mb_id'] . "'";
$result = mysqli_query($conn, $sql) or die("Query failed");



?>
<?php

   include 'connect_member.php';
   include('connection.php');
   $fileupload = $_REQUEST['fileupload']; //รับค่าไฟล์จากฟอร์ม	

//ฟังก์ชั่นวันที่
        date_default_timezone_set('Asia/Bangkok');
	$date = date("Ymd");	
//ฟังก์ชั่นสุ่มตัวเลข
         $numrand = (mt_rand());
//เพิ่มไฟล์
$upload=$_FILES['fileupload'];
if($upload <> '') {   //not select file
//โฟลเดอร์ที่จะ upload file เข้าไป 
$path="../fileupload/package/";  

//เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล
 $type = strrchr($_FILES['fileupload']['name'],".");
	
//ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
$newname = $date.$numrand.$type;
$path_copy=$path.$newname;
$path_link="fileupload/".$newname;

//คัดลอกไฟล์ไปเก็บที่เว็บเซริ์ฟเวอร์
move_uploaded_file($_FILES['fileupload']['tmp_name'],$path_copy);  	
	}
    // เพิ่มไฟล์เข้าไปในตาราง uploadfile
          

$pkname = mysqli_real_escape_string($conn, $_REQUEST['pkname']);
$pkdetail = mysqli_real_escape_string($conn, $_REQUEST['pkdetail']);
$pktype = mysqli_real_escape_string($conn, $_REQUEST['pktype']);
$pkprice = mysqli_real_escape_string($conn, $_REQUEST['pkprice']);
$pkdate= mysqli_real_escape_string($conn, $_REQUEST['pkdate']);
$pktime= mysqli_real_escape_string($conn, $_REQUEST['pktime']);

	
		$sql = "INSERT INTO package1 (pk_id,pk_name,pk_detail,pk_type,pk_price,pk_date,pk_time,pk_img,mb_id) 
        VALUES('','$pkname','$pkdetail','$pktype','$pkprice','$pkdate','$pktime','$newname','" . $_SESSION['mb_id'] . "')";
        $result = mysqli_query($conn, $sql) or die ("Error in query: $sql" . mysqli_error());


        echo "<script>alert(' การทำรายการเสร็จสมบูรณ์');window.location ='package_edit.php';</script>";
        mysqli_close($conn);






?>