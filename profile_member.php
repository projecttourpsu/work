<?php
session_start();
include("connect_member.php");
//check session
if (!$_SESSION["mb_id"]) {
    //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form
    Header("Location: homepage.php");
} else
    $sql = "SELECT * from	member  
    INNER JOIN province ON member.mb_city = province.PROVINCE_ID 
    INNER JOIN amphur ON member.mb_amphur = amphur.AMPHUR_ID  
    INNER JOIN district ON member.mb_district = district.DISTRICT_ID 
    where mb_id = '" . $_SESSION['mb_id'] . "'";
$result = mysqli_query($conn, $sql) or die("Query failed");



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
include 'connect_member.php';

include('connection.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี

?>

<head>
    <title> ข้อมูลส่วนตัว (นักท่องเที่ยว)</title>
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

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>



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
                <li class="active mainmenu"><a href="#">หน้าแรก</a></li>
                <li><a class="mainmenu" href="package_show_detail.php">แพ็คเกจทัวร์</a></li>
                <li><a class="mainmenu" href="profile_member.php">ข้อมูลส่วนตัว</a></li>
                <li><a class="mainmenu" href="#">สถานะการจอง</a></li>
                <li><a class="mainmenu" href="#">การออกรายงาน</a></li>
                <li><a class="mainmenu" href="#">ติดต่อเรา</a></li>


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
    <div class="wrapper  ">
        <main class=" container clear">
            <!-- main body -->
            <!-- ################################################################################################ -->
            <div class="sectiontitle">
                
      
            <?php
                $i = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $i++;
                    ?>




                    <table class="" style="width: 740px;">
                        <tr style="background-color:#E6E6FA	;">
                            <td>
                                <center><span style="color: #000033;"><span style="font-size:36px;">ข้อมูลส่วนตัว
                            </td><br><br>
                        <tr style="background-color:#F8F8FF;"> <br> <br> <br>

                            <td width="320" height="80"><span style="color: #191970;"><strong><span style="font-size:20px;<span style=" font-size: 20px;>
                                            <br><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong> username:</strong>&nbsp;&nbsp;&nbsp;
                                            <?php echo $row["mb_username"]; ?><br><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong> password:</strong>&nbsp;&nbsp;&nbsp;
                                            <?php echo $row["mb_password"]; ?><br><br>

                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>ชื่อ-นามสกุล:</strong>&nbsp;&nbsp;&nbsp;
                                            <?php echo $row["mb_name"]; ?>&nbsp;&nbsp;<?php echo $row["mb_lname"]; ?><br><br>




                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>เบอร์โทร:</strong>&nbsp;&nbsp;&nbsp;
                                            <?php echo $row["mb_phone"]; ?><br><br>



                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>E-mail:</strong>&nbsp;&nbsp;&nbsp;
                                            <?php echo $row["mb_email"]; ?><br><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>ที่อยู่:</strong>&nbsp;
                                            <?php echo $row["mb_add"]; ?><br><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>เมือง:</strong>&nbsp;
                                            <?php echo $row["PROVINCE_NAME"]; ?><br><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>อำเภอ:</strong>&nbsp;
                                            <?php echo $row["AMPHUR_NAME"]; ?><br><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>ตำบล:</strong>&nbsp;
                                            <?php echo $row["DISTRICT_NAME"]; ?><br><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>หมายเลขบัตรประชาชน:</strong>&nbsp;
                                            <?php echo $row["mb_idcard"]; ?><br><br>
                                            

                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>สถานะ:</strong>&nbsp;&nbsp;&nbsp;
                                            
                                            <?php echo $row["mb_status"]; ?>

                                            <br><br><br><br>
                                          
                                            <center><a href="profile_edit.php?id=<?php echo $row['mb_id']; ?>" class="btn-warning btn-lg " role="button">แก้ไขข้อมูล</a> 
                            </center>
                            <br><br>
                                          
                        <?php
                    }
                    ?>
                    </table>

                

            </div>
    </div>
    </main>
    </div>
    </div>
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