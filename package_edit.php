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
    <title> จัดการแพ็คเกจทัวร์(ผู้ประกอบการ)</title>
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
                <li class="active mainmenu"><a href="../index.php">หน้าแรก</a></li>
                <li><a class="mainmenu" href="package_edit.php">แพ็คเกจทัวร์</a></li>
                <li><a class="mainmenu" href="profile.php">ข้อมูลส่วนตัว</a></li>
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



    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper  ">
        <main class=" container clear">
            <!-- main body -->
            <!-- ################################################################################################ -->
            <div class="sectiontitle">
                
                <h6 class="heading submenu1">จัดการแพ็คเกจทัวร์</h6>
                <div class="fl_right"><br>
            <a class="btn btn-primary " href="package_ins.php" role="button">เพิ่มแพ็คเกจทัวร์</a>
    </div>

            </div>

            <div class="container">
  
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>
                                <center>ชื่อแพ็คเกจ</td>
                            <th>
                                <center>รายละเอียด</td>
                            <th>
                                <center>ประเภท</td>
                            <th>
                                <center>ราคา</td>
                            <th>
                                <center>วันที่</td>
                            <th>
                                <center>เวลา</td>
                            <th>
                                <center>รูป</td>
                            <th>
                                <center>แก้ไข</td>
                            <th>
                                <center>ลบ</td>
                        </tr>
                    </thead>
                    <?php
 //คำสั่งให้เลือกข้อมูลจาก TABLE ชื่อ tbl_member โดยเรียงจาก member_id และให้เรียงลำดับจากมากไปน้อยคือ DESC และ เปิดดู error เวลามีปัญหา
                    $query = "SELECT * FROM package1 where mb_id = '" . $_SESSION['mb_id'] . "' " or die("Error:" . mysqli_error());
                    //ประกาศตัวแปร sqli
                    $result = mysqli_query($conn, $query);
                    //สร้างตัวแปร $row มารับค่าจากการ fetch array
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                    <tr class="active">
                        <td align="center"><?php echo $row['pk_name']; ?></td>
                        <!--เรียกตัวแปรพร้อมฟิวที่จะให้แสดงคือmember_id-->
                        <td align="center"><?php echo $row['pk_detail']; ?></td>
                        <!--เรียกตัวแปรพร้อมฟิวที่จะให้แสดงคือmember_username-->
                        <td align="center"><?php echo $row['pk_type']; ?></td>
                        <!--เรียกตัวแปรพร้อมฟิวที่จะให้แสดงคือmember_username-->
                        <td align="center"><?php echo $row['pk_price']; ?></td>
                        <!--เรียกตัวแปรพร้อมฟิวที่จะให้แสดงคือmember_username-->
                        <td align="center"><?php echo $row['pk_date']; ?></td>
                        <!--เรียกตัวแปรพร้อมฟิวที่จะให้แสดงคือmember_username-->
                        <td align="center"><?php echo $row['pk_time']; ?></td>
                        <!--เรียกตัวแปรพร้อมฟิวที่จะให้แสดงคือmember_username-->
                        <?php $dept_no=$row["pk_id"]; ?>
                        <td align="center" width='100'><?php echo "<img src='../fileupload/package/" . $row['pk_img'] . "' >"; ?></td>


                        <td align="center"><a href="package_edit_show.php?pk_id=<?php echo $row['pk_id'];?>">แก้ไข</a>
                            <!--กรณีส่งค่าไปแก้ไข-->

                        <td> <a href="package_del.php?pk_id=<?php echo $row['pk_id'];?> " onclick="return confirm('Are you sure?')">Delete</a></td>
                        <!--<td align="center"><a href='package_del.php'<?php echo $row['pk_id']; ?> onclick="return confirm('Do you want to delete this record? !!!')">ลบ</a></td><!--กรณีส่งค่าไปลบ-->


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