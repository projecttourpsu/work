
<?php

 // open the connection

include('connection.php');
$file1 = $_POST['fileupload1'];//รับชื่อไฟล์เดิม

date_default_timezone_set('Asia/Bangkok');
$date = date("Ymd");	
//ฟังก์ชั่นสุ่มตัวเลข
 $numrand = (mt_rand());
//เพิ่มไฟล์
$img = (isset($_REQUEST['fileupload']) ? $_REQUEST['fileupload'] : '');

$upload=$_FILES['fileupload']['name'];
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
}else{
        $newname = $file1;
    }
// เพิ่มไฟล์เข้าไปในตาราง uploadfile


$pk_id = $_POST["pk_id"];
$pk_name = $_POST["pk_name"];
$pk_detail = $_POST["pk_detail"];
$pk_type = $_POST["pk_type"];
$pk_price =$_POST["pk_price"];
$pk_date = $_POST["pk_date"];
$pk_time = $_POST["pk_time"];
/* Performing SQL query */
$sql = "UPDATE package1 set pk_name= '$pk_name',pk_detail= '$pk_detail',pk_type= '$pk_type',pk_price= '$pk_price',pk_date= '$pk_date',pk_time= '$pk_time' ,pk_img='$newname' 
WHERE  pk_id = '$pk_id' "; 

$result = mysqli_query($conn, $sql) or die ("Error in query: $sql" . mysqli_error());

// execute the SQL statement 
if ($conn->query($sql)) {
    echo "<script>alert(' การทำรายการเสร็จสมบูรณ์');window.location ='package_edit.php';</script>";
} else {
    echo " Error : ", mysqli_error();
}
 ?>