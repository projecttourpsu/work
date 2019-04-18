<?php 
session_start();
	//connection
  include("connect_member.php");

  $username = $_REQUEST['usernames'];
  $password = $_REQUEST['password'];


        if(isset($_POST['usernames'])){
			
				//รับค่า user & password
                  $Username = $_POST['usernames'];
                  $Password = $_POST['password'];
				//query 
                  $sql="SELECT * FROM member Where mb_username='".$Username."' and mb_password='".$Password."' ";

                  $result = mysqli_query($conn,$sql);
				
                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);

                      $_SESSION["mb_id"] = $row["mb_id"];
                 
                      $_SESSION["mb_name"] = $row["mb_name"];
                      $_SESSION["mb_status"] = $row["mb_status"];

                      if($row["mb_status"]=="เจ้าหน้าที่"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php

                        Header("Location: admin_show_member.php");

                      }

                      if ($_SESSION["mb_status"]=="ผู้ประกอบการ"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php

                        Header("Location: package_edit.php");

                      }
                      if ($_SESSION["mb_status"]=="นักท่องเที่ยว"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php

                        Header("Location: profile_member.php");

                      }
                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";

                  }

        }else{


             Header("Location: form.php"); //user & password incorrect back to login again
             mysql_close();
        }
?>