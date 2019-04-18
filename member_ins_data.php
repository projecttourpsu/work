
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
$path="../fileupload/member/";  

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
          

$usernames = mysqli_real_escape_string($conn, $_REQUEST['usernames']);
$password = mysqli_real_escape_string($conn, $_REQUEST['password']);
$password = mysqli_real_escape_string($conn, $_REQUEST['password']);
$names = mysqli_real_escape_string($conn, $_REQUEST['names']);
$lnames = mysqli_real_escape_string($conn, $_REQUEST['lnames']);
$address = mysqli_real_escape_string($conn, $_REQUEST['address']);
$province = mysqli_real_escape_string($conn, $_REQUEST['province']);
$amphur = mysqli_real_escape_string($conn, $_REQUEST['amphur']);
$district = mysqli_real_escape_string($conn, $_REQUEST['district']);
$phone = mysqli_real_escape_string($conn, $_REQUEST['phone']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$idcard = mysqli_real_escape_string($conn, $_REQUEST['idcard']);
$status = mysqli_real_escape_string($conn, $_REQUEST['check']);
	
		$sql = "INSERT INTO member (mb_id,mb_username,mb_password,mb_name,mb_lname,mb_img,mb_add,mb_city,mb_amphur,mb_district,mb_phone,mb_email,mb_idcard,mb_check) 
		VALUES('','$usernames','$password','$names','$lnames','$newname','$address','$province','$amphur','$district','$phone','$email','$idcard','$status')";
		
        $result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
        echo "<script>alert(' การทำรายการเสร็จสมบูรณ์');window.location ='../index.php';</script>";
        mysqli_close($conn);






?>