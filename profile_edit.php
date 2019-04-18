<?php
session_start();


include('connection.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//check session
if (!$_SESSION["mb_id"]) {
    //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form
    Header("Location: homepage.php");
} else
    $id =  $_SESSION["mb_id"];
require('connection.php');
$sql = "SELECT * from	member  
    INNER JOIN province ON member.mb_city = province.PROVINCE_ID 
    INNER JOIN amphur ON member.mb_amphur = amphur.AMPHUR_ID  
    INNER JOIN district ON member.mb_district = district.DISTRICT_ID  where mb_id= '$id '";

$result = mysqli_query($conn, $sql) or die("Query failed");
$row = $result->fetch_array();
$mb_username = $row["mb_username"];
$mb_password = $row["mb_password"];
$mb_name = $row["mb_name"];
$mb_lname = $row["mb_lname"];
$mb_add = $row["mb_add"];
$mb_city = $row["PROVINCE_NAME"];
$amphur = $row["AMPHUR_NAME"];
$district = $row["DISTRICT_NAME"];
$mb_phone = $row["mb_phone"];
$mb_email = $row["mb_email"];
$mb_idcard = $row["mb_idcard"];
$mb_status = $row["mb_status"];



// จบการติดต่อฐานข้อมูล 
$result->free();
$conn->close();


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php


?>

<head>
    <title> สร้างแพ็คเกจทัวร์ (ผู้ประกอบการ)</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <link href="layout/styles/font.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="css/css_popup.css">
    <script type="text/javascript" src="jquery.js"></script>
    <link rel="stylesheet" href="css/div_img.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



    <style>
        .row10 {
            background-color: #363636;
        }
    </style>

</head>


<body id="top">
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row10">
        <div class="hoc clear">

            <div class="fl_left">
                <ul>
                    <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
                    <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
                </ul>
            </div>

            <div class="fl_right"><br>
                <ul>
                    <!--button login -->

                    <!-- Trigger the modal with a button -->
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"><?php print_r($_SESSION["mb_name"]); ?>&nbsp&nbsp<span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp</a>


                        <a class="btn btn-danger" href="../index.php" role="button">ออกจากระบบ</a>

            </div>
        </div>
    </div>





    </div>
    <!-- ################################################################################################ -->
    </div>
    </div>
    </div>

    </div>

    <!-- ################################################################################################ -->
    <div class="wrapper row1">
        <header id="header" class="hoc clear">
            <!-- ################################################################################################ -->
            <div id="logo" class="fl_left">
                <h1><a href="index.html">การท่องเที่ยวชุมชน</a></h1>
                <p></p>
            </div>
            <div id="logo" class="fl_right">
                <h1><a href="index.html">Local travel </a></h1>
                <p></p>
            </div>
            <!-- ################################################################################################ -->
        </header>
        <nav id="mainav" class="hoc clear">
            <!-- ################################################################################################ -->

            <!-- ################################################################################################ -->
            <ul class="clear">
                <li class="active mainmenu"><a href="../index.html">หน้าแรก</a></li>
                <li><a class="mainmenu" href="owner1.php">แพ็คเกจทัวร์</a></li>
                <li><a class="mainmenu" href="owner2.php">ข้อมูลส่วนตัว</a></li>
                <li><a class="mainmenu" href="owner3.php">สถานะการจอง</a></li>
                <li><a class="mainmenu" href="owner4.php">การออกรายงาน</a></li>
                <li><a class="mainmenu" href="owner5.php">ติดต่อเรา</a></li>


            </ul>
            <!-- ################################################################################################ -->
        </nav>

        </ul>
        <!-- ################################################################################################ -->
        </nav>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper  overlay" style="background-image:url('images/demo/backgrounds/01.jpg');">
        <div id="pageintro" class="hoc clear">
            <!-- ################################################################################################ -->
            <article>
                <p class="headingg">Trang Thailand</p>
                <p class="heading ">Yan Ta Khao</p>
                <p></p>

                <ul class="nospace inline  pushright ">
                    <li><a class="btn " href="#">จองแพ็คเกจทัวร์</a></li>
                    <li><a class="btn " href="#">ค้นหาแพ็คเกจทัวร์</a></li>
                </ul>

            </article>
            <!-- ################################################################################################ -->
        </div>
    </div>


    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row2">
        <main class="hoc container clear">
            <!-- main body -->
            <!-- ################################################################################################ -->
            <div class="sectiontitle">
                <h6 class="heading submenu1">แก้ไขข้อมูลส่วนตัว</h6>
                <p></p>
            </div>
            <div class="group">



                <?php
                // รับค่ารหัสแผนกจากฟอร์ม 
                $mb_id = $_GET['mb_id'];

                // ดึงส่วนของการติดต่อฐานข้อมูลจากไฟล์ conn_mysql 
                require('connection.php');

                // สร้างคําสั่ง SQL ที่จะใช้งาน 
                $query = "SELECT * FROM member where mb_id = '$mb_id'";

                /* สั่งให้ SQL ทํางาน*/
                $result = $conn->query($query) or die("Query failed");
                /* ดึงข้อมูลข้อมูลมาใส่ตัวแปร */
                $row = $result->fetch_array();


                // จบการติดต่อฐานข้อมูล 
                $result->free();
                $conn->close();
                ?>
                <!--/ main body -->



                <div class="clear">
                    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="profile_update.php?id=<?php echo $_GET['id']; ?>" name="insert_form">
                        <div class="form-group">
                            <label class="control-label col-sm-3">username :</label>
                            <div class="col-sm-5 ">
                                <?php echo "<input type=\"text\"class=\"form-control\" name=\"mb_username\" value = \"$mb_username\"readonly>"; ?>
                                <?php echo "<input type=\"hidden\"class=\"form-control\" name=\"mb_id\" value = \"$mb_id\">"; ?>
                                <?php echo "<input type=\"hidden\"class=\"form-control\" name=\"mb_city\" value = \"$mb_city\">"; ?>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-sm-3">password :</label>
                            <div class="col-sm-5 ">
                                <?php echo "<input type=\"text\"class=\"form-control\" name=\"mb_password\" value = \"$mb_password\">"; ?>

                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-sm-3">ชื่อ :</label>
                            <div class="col-sm-5 ">
                                <?php echo "<input type=\"text\"class=\"form-control\" name=\"mb_name\" value = \"$mb_name\">"; ?>

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">นามสกุล :</label>
                            <div class="col-sm-5 ">
                                <?php echo "<input type=\"text\"class=\"form-control\" name=\"mb_lname\" value = \"$mb_lname\">"; ?>

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">เบอร์โทรศัพท์ :</label>
                            <div class="col-sm-5 ">
                                <?php echo "<input type=\"text\"class=\"form-control\" name=\"mb_phone\" value = \"$mb_phone\">"; ?>

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">email:</label>
                            <div class="col-sm-5 ">
                                <?php echo "<input type=\"text\"class=\"form-control\" name=\"mb_email\" value = \"$mb_email\">"; ?>

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">ที่อยู่ :</label>
                            <div class="col-sm-5 ">
                                <?php echo "<input type=\"text\"class=\"form-control\" name=\"mb_add\" value = \"$mb_add\"readonly>"; ?>

                            </div>
                        </div>
                        
                        <div class="form-group">
                         <label class="control-label col-sm-3">จังหวัด</label>
                         <div class="col-sm-5">
                              
                                <?php echo"<select class=\"form-control\" id=\"province1\" name=\"province1\"readonly>
                                                    <option id=\"province1_list\" >$mb_city </option></select>"?>

                             
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="control-label col-sm-3">อำเภอ</label>
                            <div class="col-sm-5">

                                <?php echo "<select class=\"form-control\" id=\"amphur\" name=\"amphur\"readonly>
                                                    <option id=\"amphur\">$amphur </option></select>" ?>


                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3">ตำบล</label>
                            <div class="col-sm-5">

                                <?php echo "<select class=\"form-control\" id=\"district\" name=\"district\"readonly>
                                                    <option id=\"district\" >$district </option></select>" ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3">เลขบัตร :</label>
                            <div class="col-sm-5">
                                <?php echo "<input type=\"text\"class=\"form-control\" name=\"mb_idcard\" value = \"$mb_idcard \"readonly>"; ?>

                            </div>
                        </div


                </div>

                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" name="update" value="update" class="btn btn-primary">บันทึก</button>
                        <button type="reset" class="btn btn-warning">ล้างข้อมูล</button>
                        <a class="btn btn-danger" href="profile.php" role="button">ยกเลิก</a>

                    </div>
                </div>


                </form>

            </div>
        </main>
    </div>
    </div>










    <div class="wrapper row4 overlay" style="background-image:url('images/demo/backgrounds/22.jpg');">
        <footer id="footer" class="hoc clear">
            <!-- ################################################################################################ -->
            <div class="one_third first">
                <h6 class="heading">Facilisis neque vestibulum</h6>
                <ul class="nospace btmspace-30 linklist contact">
                    <li><i class="fa fa-map-marker"></i>
                        <address>
                            Street Name &amp; Number, Town, Postcode/Zip
                        </address>
                    </li>
                    <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
                    <li><i class="fa fa-fax"></i> +00 (123) 456 7890</li>
                    <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
                </ul>
            </div>
            <div class="one_third">
                <h6 class="heading">Auctor egestas quisque</h6>
                <p class="nospace btmspace-30">Ut ipsum quisque luctus aliquam accumsan sapien quis magna etiam quis.</p>
                <form method="post" action="#">
                    <fieldset>
                        <legend>Newsletter:</legend>
                        <input class="btmspace-15" type="text" value="" placeholder="Name">
                        <input class="btmspace-15" type="text" value="" placeholder="Email">
                        <button type="submit " value="submit">Submit</button>
                    </fieldset>
                </form>
            </div>
            <div class="one_third">
                <h6 class="heading">Tempor orci vestibulum</h6>
                <figure><a href="#"><img class="borderedbox inspace-10 btmspace-15" src="images/demo/backgrounds/23.jpg" alt=""></a>
                    <figcaption>
                        <h6 class="nospace font-x1"><a href="#">Neque convallis pretium</a></h6>
                        <time class="font-xs block btmspace-10" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
                    </figcaption>
                </figure>
            </div>
            <!-- ################################################################################################ -->
        </footer>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row5">
        <div id="copyright" class="hoc clear">
            <!-- ################################################################################################ -->
            <p class="fl_left">เว็บไซต์การท่องเที่ยว ชุมชนย่านตาขาว</p>
            <p class="fl_right"> <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">มหาวิทยาลัยสงขลานครินทร์ วิทยาเขตตรัง</a></p>
            <!-- ################################################################################################ -->
        </div>
    </div>





    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
    <!-- JAVASCRIPTS -->
    <script src="layout/scripts/jquery.min.js"></script>
    <script src="layout/scripts/jquery.backtotop.js"></script>
    <script src="layout/scripts/jquery.mobilemenu.js"></script>
    <!-- นำเข้า Javascript jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>

    <script>
        $(function() {

            //เรียกใช้งาน Select2
            $(".select2-single").select2();

            //ดึงข้อมูล province จากไฟล์ get_data.php
            $.ajax({
                url: "get_data.php",
                dataType: "json", //กำหนดให้มีรูปแบบเป็น Json
                data: {
                    show_province: 'show_province'
                }, //ส่งค่าตัวแปร show_province เพื่อดึงข้อมูล จังหวัด
                success: function(data) {

                    //วนลูปแสดงข้อมูล ที่ได้จาก ตัวแปร data
                    $.each(data, function(index, value) {
                        //แทรก Elements ใน id province  ด้วยคำสั่ง append
                        $("#province").append("<option value='" + value.id + "'> " + value.name + "</option>");
                    });
                }
            });


            //แสดงข้อมูล อำเภอ  โดยใช้คำสั่ง change จะทำงานกรณีมีการเปลี่ยนแปลงที่ #province
            $("#province").change(function() {

                //กำหนดให้ ตัวแปร province มีค่าเท่ากับ ค่าของ #province ที่กำลังถูกเลือกในขณะนั้น
                var province_id = $(this).val();

                $.ajax({
                    url: "get_data.php",
                    dataType: "json", //กำหนดให้มีรูปแบบเป็น Json
                    data: {
                        province_id: province_id
                    }, //ส่งค่าตัวแปร province_id เพื่อดึงข้อมูล อำเภอ ที่มี province_id เท่ากับค่าที่ส่งไป
                    success: function(data) {

                        //กำหนดให้ข้อมูลใน #amphur เป็นค่าว่าง
                        $("#amphur").text("");

                        //วนลูปแสดงข้อมูล ที่ได้จาก ตัวแปร data  
                        $.each(data, function(index, value) {

                            //แทรก Elements ข้อมูลที่ได้  ใน id amphur  ด้วยคำสั่ง append
                            $("#amphur").append("<option value='" + value.id + "'> " + value.name + "</option>");
                        });
                    }
                });

            });

            //แสดงข้อมูลตำบล โดยใช้คำสั่ง change จะทำงานกรณีมีการเปลี่ยนแปลงที่  #amphur
            $("#amphur").change(function() {

                //กำหนดให้ ตัวแปร amphur_id มีค่าเท่ากับ ค่าของ  #amphur ที่กำลังถูกเลือกในขณะนั้น
                var amphur_id = $(this).val();

                $.ajax({
                    url: "get_data.php",
                    dataType: "json", //กำหนดให้มีรูปแบบเป็น Json
                    data: {
                        amphur_id: amphur_id
                    }, //ส่งค่าตัวแปร amphur_id เพื่อดึงข้อมูล ตำบล ที่มี amphur_id เท่ากับค่าที่ส่งไป
                    success: function(data) {

                        //กำหนดให้ข้อมูลใน #district เป็นค่าว่าง
                        $("#district").text("");

                        //วนลูปแสดงข้อมูล ที่ได้จาก ตัวแปร data  
                        $.each(data, function(index, value) {

                            //แทรก Elements ข้อมูลที่ได้  ใน id district  ด้วยคำสั่ง append
                            $("#district").append("<option value='" + value.id + "'> " + value.name + "</option>");

                        });
                    }
                });

            });

            //คำสั่ง change จะทำงานกรณีมีการเปลี่ยนแปลงที่  #district 
            $("#district").change(function() {

                //นำข้อมูลรายการ จังหวัด ที่เลือก มาใส่ไว้ในตัวแปร province
                var province = $("#province option:selected").text();

                //นำข้อมูลรายการ อำเภอ ที่เลือก มาใส่ไว้ในตัวแปร amphur
                var amphur = $("#amphur option:selected").text();

                //นำข้อมูลรายการ ตำบล ที่เลือก มาใส่ไว้ในตัวแปร district
                var district = $("#district option:selected").text();
                //ใช้คำสั่ง alert แสดงข้อมูลที่ได้
                alert("คุณได้เลือก :  จังหวัด : " + province + " อำเภอ : " + amphur + "  ตำบล : " + district);


            });


        });
    </script>
</body>

</html>