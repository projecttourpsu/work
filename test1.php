<?php
session_start();
include 'connection.php';
 //check session
if (!$_SESSION["UserID"]){
 //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form
      Header("Location: homepage.php");

}else
$sql="SELECT * from	tbl_customer where mb_id = '".$_SESSION['UserID']."'";

$result = mysqli_query($conn, $sql) or die("Query failed");

?>
<?php
session_start();
session_write_close();
if(isset($_REQUEST['username'])){
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
$names = mysqli_real_escape_string($conn, $_REQUEST['names']);
$address = mysqli_real_escape_string($conn, $_REQUEST['address']);
$city = mysqli_real_escape_string($conn, $_REQUEST['city']);
$phone = mysqli_real_escape_string($conn, $_REQUEST['phone']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$idcard = mysqli_real_escape_string($conn, $_REQUEST['idcard']);
$status = mysqli_real_escape_string($conn, $_REQUEST['check']);
	
		$sql = "INSERT INTO member (mb_id,mb_username,mb_password,mb_name,mb_img,mb_add,mb_city,mb_phone,mb_email,mb_idcard,mb_check) 
		VALUES('','$usernames','$password','$names','$newname','$address','$city','$phone','$email','$idcard','$status')";
		
        $result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());

        
        echo "<script>alert(' การทำรายการเสร็จสมบูรณ์');window.location ='../index.php';</script>";
        mysqli_close($conn);






?>