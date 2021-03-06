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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
include 'connect_member.php';
include('connection.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี

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
                <h6 class="heading submenu1">สร้างแพ็คเกจทัวร์</h6>
                <p></p>
            </div>
            <div class="group">


                <!-- ################################################################################################ -->
                <!-- / main body -->
                <div class="clear">
                    <form class="form-horizontal" method="post" action="package_ins_data.php" enctype="multipart/form-data" name="upfile" id="upfile">
                        <div class="form-group">
                            <label class="control-label col-sm-3">ชื่อแพ็คเกจทัวร์</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="pkname" name="pkname" placeholder="ชื่อแพ็คเกจทัวร์">
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">รายละเอียดแพ็คเกจทัวร์</label>
                            <div class="col-sm-5">
                                <textarea class="form-control" name="pkdetail" class="form-control" id="pkdetail" rows="5" placeholder="รายละเอียดแพ็คเกจทัวร์"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3">ประเภทแพ็คเกจทัวร์</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="pktype" name="pktype" placeholder="เช่น ( one day trip / 2 วัน 3 คืน )">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">ราคา</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="pkprice" name="pkprice" placeholder="ราคา">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">วันที่</label>
                            <div class="col-sm-3">
                                <input class="form-control" type="date" name="pkdate">
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="control-label col-sm-3">เวลา</label>
                            <div class="col-sm-3">
                                <input class="form-control" type="time" value="00:00" id="pktime">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">รูปแพ็คเกจทัวร์</label>
                            <div class="col-sm-3">
                                <input class="form-control" type="file" name="fileupload" id="fileupload" multiple="multiple" required="required" />
                            </div>
                        </div>






                </div>

                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                        <button type="reset" class="btn btn-warning">ล้างข้อมูล</button>
                        <a class="btn btn-danger" href="../index.php" role="button">ยกเลิก</a>
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
</body>

</html>