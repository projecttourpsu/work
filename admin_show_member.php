<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
<?php
include 'connect_member.php';

include('connection.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี

?>

<head>
    <title>จัดการข้อมูลสมาชิก</title>
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


                    &nbsp&nbsp<a class="btn btn-danger" href="../index.php" role="button">ออกจากระบบ</a>

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
                <li><a class="mainmenu" href="admin_show_package.php">แพ็คเกจทัวร์</a></li>
                <li><a class="mainmenu" href="profile.php">ข้อมูลส่วนตัว</a></li>
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



    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper  ">
        <main class=" container clear">
            <!-- main body -->
            <!-- ################################################################################################ -->
            <div class="sectiontitle">
                <h6 class="heading submenu1">จัดการข้อมูลสมาชิก</h6>
            </div>

            <div class="container">

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>
                                <center>Username</td>
                            <th>
                                <center>ชื่อ-นามสกุล</td>
                            <th>
                                <center>สถานะ</td>
                            <th>
                                <center>จัดการข้อมูล</td>
                            

                        </tr>
                    </thead>
                    <?php
                    //คำสั่งให้เลือกข้อมูลจาก TABLE ชื่อ tbl_member โดยเรียงจาก member_id และให้เรียงลำดับจากมากไปน้อยคือ DESC และ เปิดดู error เวลามีปัญหา
                    $query = "SELECT * from	member  
                        INNER JOIN province ON member.mb_city = province.PROVINCE_ID 
                       INNER JOIN amphur ON member.mb_amphur = amphur.AMPHUR_ID  
                     INNER JOIN district ON member.mb_district = district.DISTRICT_ID ";

                    //ประกาศตัวแปร sqli
                    $result = mysqli_query($conn, $query);
                    //สร้างตัวแปร $row มารับค่าจากการ fetch array
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <tr class="active">
                            <td align="center"><?php echo $row['mb_username']; ?></td>
                            <!--เรียกตัวแปรพร้อมฟิวที่จะให้แสดงคือmember_id-->
                            <td align="center"><?php echo $row['mb_name'] ?>&nbsp;<?php echo $row["mb_lname"]; ?></td>
                            <!--เรียกตัวแปรพร้อมฟิวที่จะให้แสดงคือmember_username-->
                            <td align="center"><?php echo $row['mb_status']; ?>
                            
                        </td>
                            <!--เรียกตัวแปรพร้อมฟิวที่จะให้แสดงคือmember_username-->

                            <td align="center" width ="15%">
                               

                                <a href="admin_edit.php?mb_id=<?php echo $row['mb_id']; ?>" title="แก้ไข"  class="btn btn-warning  fa fa-edit" role="button"></a>&nbsp;&nbsp;
                                <!--กรณีส่งค่าไปแก้ไข-->
                                <a href="admin_member_del.php?mb_id= <?php echo $row['mb_id']; ?> " onclick="return confirm('ต้องการลบข้อมูลหรือไม่ ? ')" title="ลบข้อมูล"  class="btn btn-danger  fa fa-close" role="button"></a></td>
                            <!--<td align="center"><a href='package_del.php'<?php echo $row['pk_id']; ?> onclick="return confirm('Do you want to delete this record? !!!')">ลบ</a></td><!-กรณีส่งค่าไปลบ-->


                        </tr>
                    <?php
                }
                mysqli_close($conn);
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