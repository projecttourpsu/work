<?php
session_start();
include('connect_member.php');


                $mb_id= $_SESSION["mb_id"];
                $mb_username= $_POST["mb_username"];
                $mb_password= $_POST["mb_password"];
                $mb_name= $_POST["mb_name"];
                $mb_lname= $_POST["mb_lname"];
                $mb_add= $_POST["mb_add"];
                $mb_city= $_POST["mb_city"];
                $mb_phone= $_POST["mb_phone"];
                $mb_email= $_POST["mb_email"];
                $mb_idcard= $_POST["mb_idcard"];

                $sql = "UPDATE member set mb_id= '$mb_id',
                              mb_username= '$mb_username',
                              mb_password= '$mb_password',
                              mb_name= '$mb_name',
                              mb_lname= '$mb_lname',
                              mb_add= '$mb_add' ,
                             
                              mb_phone= '$mb_phone' ,
                              mb_email= '$mb_email' ,
                              mb_add= '$mb_add' ,
                              mb_idcard='$mb_idcard' WHERE  mb_id = '$mb_id'"; 
        $result = mysqli_query($conn, $sql) or die ("Error in query: $sql" . mysqli_error());
        if ($conn->query($sql)) {
           echo "<script>alert(' การทำรายการเสร็จสมบูรณ์');window.location ='profile.php';</script>";
        } else {
            echo " Error : ", mysqli_error();
        }

         ?>

    
