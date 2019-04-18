<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
include 'page/connect_member.php';
include('page/connection.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี

?>

<head>
    <title> การท่องเที่ยวชุมชนย่านตาขาว </title>
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
    <link rel="stylesheet" href="css/acss.css">

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



            <div class="fl_right"><br>
                <ul>
                    <!--button login -->

                    <!-- Trigger the modal with a button -->
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModaluser">login</button>

                    <!-- Modal user -->
                    <div class="modal fade" id="myModaluser" role="dialog">
                        <div class="modal-dialog" role="document">

                            <!-- Modal content-->

                            <div class="modal-content">

                                <div class="modal-body">

                                    <form method="post" action="page/login_process.php" name="login_form">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <center>
                                                <h2 class="modal-title">
                                                    <FONT COLOR=#000000>login</FONT>
                                                </h2>
                                            </center>
                                        </div>


                                        <div class="form-group">
                                            <label for="">Username:</label>
                                            <input type="username" class="form-control" id="usernames" placeholder="กรุณากรอกชื่อผู้ใช้งาน" name="usernames">
                                        </div>
                                        <div class="form-group">
                                            <label for="pwd">Password:</label>
                                            <input type="password_loging" class="form-control" id="password_loging" placeholder="กรุณากรอกรหัสผ่าน" name="password">
                                        </div>


                                        <button type="submit" class="btn btn-primary" value="login">เข้าสู่ระบบ</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>

                                </div>
                                </form>

                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn btn-Primary" data-toggle="modal" data-target="#myModaluser1">สมัครสมาชิก</button>
                    <!-- Trigger the modal with a button -->
                    <!-- Modal user -->
                    <div class="modal fade" id="myModaluser1" role="dialog">
                        <div class="modal-dialog" role="document">

                            <!-- Modal content-->

                            <div class="modal-content">

                                <div class="modal-body">

                                    <center><span style="font-size:32px;">สร้างบัญชีผู้ใช้ใหม่</center>


                                    <main class="hoc container clear">
                                        <div class="clear">


                                            <form class="form-horizontal" method="post" action="page/member_ins_data.php" enctype="multipart/form-data" name="upfile" id="upfile" OnSubmit="return fncSubmit();">
                                                <div class="form-group">
                                                    <label class="control-label col-sm-3">Username</label>
                                                    <div class="col-sm-3">
                                                        <input name="usernames" class="form-control" type="text" id="usernames" placeholder="ภาษาอังกฤษ" required />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-3">Password</label>
                                                    <div class="col-sm-3">
                                                        <input name="password" class="form-control" type="password" id="password" data-minlength="6" placeholder="ตัวเลขอย่างน้อย 3 ตัว" required />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-3">Confirm Password</label>
                                                    <div class="col-sm-3">
                                                        <input name="confirm_password" class="form-control" type="password" id="confirm_password" placeholder="รหัสต้องตรงกัน" required />
                                                        <span id="pwmatch" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> Passwords Match
                                                        <script>
                                                            $("input[type=password]").keyup(function() {
                                                                if ($("#password").val() == $("#confirm_password").val()) {
                                                                    $("#pwmatch").removeClass("glyphicon-remove");
                                                                    $("#pwmatch").addClass("glyphicon-ok");
                                                                    $("#pwmatch").css("color", "#00A41E");
                                                                } else {
                                                                    $("#pwmatch").removeClass("glyphicon-ok");
                                                                    $("#pwmatch").addClass("glyphicon-remove");
                                                                    $("#pwmatch").css("color", "#FF0004");
                                                                }

                                                            })
                                                        </script>
                                                    </div>

                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-3">ชื่อ</label>
                                                    <div class="col-sm-3">
                                                        <input type="text" class="form-control" name="names" id="namese" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-3">นามสกุล</label>
                                                    <div class="col-sm-3">
                                                        <input type="text" class="form-control" name="lnames" id="lnamese" placeholder="" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-sm-3">ที่อยู่</label>
                                                    <div class="col-sm-3">
                                                        <textarea class="form-control" name="address" id="address" rows="2" placeholder="บ้านเลขที่,หมู่บ้าน,ซอย"></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-sm-3">เมือง</label>
                                                    <div class="col-sm-3">
                                                        <!-- แสดงตัวเลือก จังหวัด -->
                                                        <select class="form-control " id="province" name="province">
                                                            <option id="province_list"> -- Select --</option>

                                                        </select>

                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-sm-3">อำเภอ</label>
                                                    <div class="col-sm-3">
                                                        <!-- แสดงตัวเลือก อำเภอ -->
                                                        <select class="form-control " id="amphur" name="amphur">
                                                            <option id="amphur_list"> -- Select --</option>

                                                        </select>


                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-sm-3">ตำบล</label>
                                                    <div class="col-sm-3">
                                                        <!-- แสดงตัวเลือก ตำบล -->
                                                        <select class="form-control " id="district" name="district">
                                                            <option> -- Select --</option>

                                                        </select>

                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-sm-3">เบอร์โทรศัพท์</label>
                                                    <div class="col-sm-3">
                                                        <input type="number"  size="10" class="form-control" name="phone" id="phone" placeholder="ตัวเลขเท่านั้น"  required>
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label class="control-label col-sm-3">email</label>
                                                    <div class="col-sm-3">
                                                        <input type="text" class="form-control" name="email" id="email" placeholder="Ex:example@hotmail.com" required>
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label class="control-label col-sm-3">เลขบัตรประจำตัวประชาชน</label>
                                                    <div class="col-sm-3">
                                                        <input type="number"  class="form-control" name="idcard" id="idcard" centerplaceholder="0-0000-00000-00-0" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-sm-3">อัพโหลดบัตรประชาชน <br>(*เฉพาะผู้ประกอบการ) </label>
                                                    <div class="col-sm-3">
                                                        <input type="file" name="fileupload" id="fileupload" required="required" />
                                                    </div>
                                                </div>
                                        </div>

                                        <script language="javascript">
                                            function fncSubmit() {


                                                if (document.upfile.password.value != document.upfile.confirm_password.value) {
                                                    alert('กรุณาตรวจสอบพาสเวิร์ดให้ตรงกัน');
                                                    document.upfile.password.focus();
                                                    return false;
                                                }

                                                document.upfile.submit();
                                            }
                                        </script>

                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-9">
                                                <button type="submit" class="btn btn-primary">บันทึก</button>
                                                <button type="reset" class="btn btn-warning">ล้างข้อมูล</button>
                                                <a href="index.php" class="btn btn-danger  ">ยกเลิก</a>
                                            </div>
                                        </div>

                                        </form>
                                </div>
                                </main>
                            </div>
                        </div>

                </ul>
            </div>









        </div>
        <!-- ################################################################################################ -->
    </div>
    </div>
    </div>

    </div>




    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
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
            <ul class="clear">
                <li class="active mainmenu"><a href="index.html">หน้าแรก</a></li>

                <li><a class="mainmenu" href="#">ข้อมูลแพ็คเกจทัวร์</a>

                <li><a class="mainmenu" href="#ประสบการณ์ท้องถิ่นที่คุณจะหลงรัก">สถานที่ท่องเที่ยว</a></li>
                <li><a class="mainmenu" href="#พาคุณไปพบกับรสชาติอาหารที่ยิ่งกิน ยิ่งอร่อย!">ร้านอาหาร</a></li>
                <li><a class="mainmenu" href="#ที่พักน่ารักเหมาะกับการพักผ่อน">ที่พัก</a></li>


                <li><a class="mainmenu" href="#">ติดต่อเรา</a></li>


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
                <footer>
                    <ul class="nospace inline pushright">
                        <li><a class="btn inverse" href="#">จองแพ็คเกจทัวร์</a></li>
                        <li><a class="btn inverse" href="#">ค้นหาแพ็คเกจทัวร์</a></li>
                    </ul>
                </footer>
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
                <h6 class="heading submenu1">การท่องเที่ยวชุมชนย่านตาขาว</h6>
                <p></p>
            </div>
            <div class="group">
                <div class="one_half first">
                    <p>ชุมชนย่านตาขาว (Amphoe Yan Ta Khao)</p>
                    <p class="btmspace-50">&nbsp; &nbsp;&nbsp;&nbsp;เดิมอำเภอย่านตาขาวเป็นเพียงตำบล ขึ้นกับอำเภอกันตัง ต่อมา
                        เมื่อประชาชนได้เข้ามาอาศัยอยู่มากขึ้น การติดต่อระหว่างตำบลกับอำเภอไม่สะดวก เพราะระยะทางห่างไกล
                        การคมนาคมก็อาศัยทางเรือ ในการปกครองไม่สามารถดูแลความทุกข์สุขของราษฎรได้อย่างทั่วถึง
                        และราษฎรจะติดต่อกับที่ว่าการอำเภอก็ยากลำบาก ตำบลย่านตาขาวจึงถูกยกฐานะขึ้นเป็น กิ่งอำเภอย่านตาขาว เมื่อวันที่
                        1 มกราคม พ.ศ. 2491 โดยมีเขตการปกครอง 6 ตำบล คือ ตำบลย่านตาขาว ตำบลหนองบ่อ ตำบลทุ่งค่าย ตำบลนาชุมเห็ด
                        ตำบลในควน และตำบลโพรงจระเข้ ตำบลต่างๆ เหล่านี้ เดิมอยู่ในเขตการปกครองของอำเภอกันตัง
                        และได้ใช้อาคารโรงเรียนจีนของสมาคมพ่อค้าจีน เป็นที่ว่าการกิ่งอำเภอย่านตาขาว</p>

                </div>
                <div class="one_half"> <iframe width="500" height="280" src="https://www.youtube.com/embed/YGLjiVskfmk">
                    </iframe></div>
            </div>
            <!-- ################################################################################################ -->
            <!-- / main body -->
            <div class="clear"></div>
        </main>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper  overlay" style="background-image:url('images/demo/backgrounds/03.jpg');">
        <section class="hoc container clear">
            <!-- ################################################################################################ -->
            <div class="sectiontitle">

            </div>
            <ul class="nospace group center">
                <li class="one_quarter first">
                    <article><a href="#"><i class="icon btmspace-30 fa fa-globe"></i></a>
                        <h6 class="heading font-x1">Local Stories</h6>
                        <p>Est pellentesque tempus sodales justo lectus faucibus neque a mollis augue arcu&hellip;</p>
                    </article>
                </li>
                <li class="one_quarter">
                    <article><a href="#"><i class="icon btmspace-30 fa fa-history"></i></a>
                        <h6 class="heading font-x1">Suspendisse potenti</h6>
                        <p>Fusce consequat ipsum non ipsum aliquam iaculis odio non bibendum bibendum erat&hellip;</p>
                    </article>
                </li>
                <li class="one_quarter">
                    <article><a href="#"><i class="icon btmspace-30 fa fa-handshake-o"></i></a>
                        <h6 class="heading font-x1">Donec sagittis purus</h6>
                        <p>Dolor ut dignissim ipsum nisl sit amet metus nam dui dui rhoncus tempus aliquam&hellip;</p>
                    </article>
                </li>
                <li class="one_quarter">
                    <article><a href="#"><i class="icon btmspace-30 fa fa-plane"></i></a>
                        <h6 class="heading font-x1">Ullamcorper odio sed</h6>
                        <p>Rutrum vel tellus donec tortor lectus varius vel egestas a dictum in odio sed&hellip;</p>
                    </article>
                </li>
            </ul>
            <!-- ################################################################################################ -->
        </section>
    </div>
    <br><br>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row3">
        <section class="hoc container clear">
            <!-- ################################################################################################ -->
            <div class="sectiontitle">
                <h6 class="heading submenu1"><a name=ประสบการณ์ท้องถิ่นที่คุณจะหลงรัก>ประสบการณ์ท้องถิ่นที่คุณจะหลงรัก</a> </h6>
                <p></p>
            </div>
            <ul class="nospace group services">
                <li class="one_quarter first">
                    <article class="inverse wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/03.jpg');"><a href=""><i class=" icons  fa fa-3x fa-suitcase"></i></a>
                        <h6 class="heading font-x1 font"><a href="#"><br><br><br>น้ำตกเค็ม</a></h6>
                        <p class="font">Salt Water Waterfall</p>
                    </article>
                </li>
                <li class="one_quarter">
                    <article class="inverse wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/04.jpg');"><a href="#"><i class=" icons  fa fa-3x fa-suitcase"></i></a>
                        <h6 class="heading font-x1 font"><a href="#"><br><br><br>วังหินลาด</a></h6>
                        <p class="font">Wang Hinlard</p>
                    </article>
                </li>
                <li class="one_quarter">
                    <article class="inverse wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/01.jpg');"><a href="#"><i class=" icons  fa fa-3x fa-suitcase"></i></a>
                        <h6 class="heading font-x1 font"><a href="#"><br><br><br>สวนพฤกษศาสตร์สากลภาคใต้ (ทุ่งค่าย)</a></h6>
                        <p class="font"></p>
                    </article>
                </li>
                <li class="one_quarter">
                    <article class="inverse wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/05.jpg');"><a href="#"></a><i class="icons fa fa-3x fa-suitcase"></i>
                        <h6 class="heading font-x1 font"><a href="#"><br><br><br>น้ำตกไพรสวรรค์ </a></h6>
                        <p class="font">(Prai Sawan Waterfall)</p>
                    </article>
                </li>
            </ul>

            <br><br>

            <ul class="nospace group services">
                <li class="one_quarter first">
                    <article class="inverse wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/18.jpg');"><a href="#"><i class="icons fa fa-3x fa-suitcase"></i></a>
                        <h6 class="heading font-x1 font"><a href="#"><br><br><br>น้ำตกสายรุ้ง </a></h6>
                        <p class="font">(Rainbow Waterfall)</p>
                    </article>
                </li>
                <li class="one_quarter">
                    <article class="inverse wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/19.jpg');"><a href="#"><i class="icons fa fa-3x fa-suitcase"></i></a>
                        <h6 class="heading font-x1 font"><a href="#"><br><br><br>Canopy Walkway </a></h6>
                        <p class="font">Canopy Walkway </p>
                    </article>
                </li>
                <li class="one_quarter">
                    <article class="inverse wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/20.jpg');"><a href="#"><i class="icons fa fa-3x fa-suitcase"></i></a>
                        <h6 class="heading font-x1 font"><a href="#"><br><br><br>สวนสาธารณะหนองชุมแสง </a></h6>
                        <p class="font">ย่านตาขาว</p>
                    </article>
                </li>
                <li class="one_quarter">
                    <article class="inverse wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/21.jpg');">21<a href="#"><i class="icons fa fa-3x fa-suitcase"></i></a>
                        <h6 class="heading font-x1 font"><a href="#"><br><br><br>หลาดต้นน้ำ ตรัง</a></h6>
                        <p class="font">ลำขนุน</p>
                    </article>
                </li>
            </ul>
            <!-- ################################################################################################ -->
        </section>
    </div>

    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row2">
        <section class="hoc container clear">
            <!-- ################################################################################################ -->
            <div class="sectiontitle">
                <h6 class="heading submenu1"><a name=พาคุณไปพบกับรสชาติอาหารที่ยิ่งกิน ยิ่งอร่อย!>พาคุณไปพบกับรสชาติอาหารที่ยิ่งกิน</a></h6>
                <p></p>
            </div>
            <ul class="nospace group services">
                <li class="one_quarter first">
                    <article class="inverse wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/06.jpg');"><a href="#"><i class="icons fa fa-3x fa-cutlery"></i></a>
                        <h6 class="heading font-x1 font"><a href="#"><br><br><br>ท่าใคลซีฟู๊ด</a></h6>
                        <p class="font">(Tha Klai Seafood)</p>
                    </article>
                </li>
                <li class="one_quarter">
                    <article class="inverse wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/07.jpg');"><a href="#"><i class="icons fa fa-3x fa-cutlery"></i></a>
                        <h6 class="heading font-x1 font"><a href="#"><br><br><br>จันโอชา ติ่มซำคำโต</a></h6>
                        <p class="font">(๋Jan O Cha)</p>
                    </article>
                </li>
                <li class="one_quarter">
                    <article class="inverse wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/08.jpg');"><a href="#"><i class="icons fa fa-3x fa-cutlery"></i></a>
                        <h6 class="heading font-x1 font"><a href="#"><br><br><br>บะหมี่เกี๊ยวโกวอน </a></h6>
                        <p class="font">(Kho Won)</p>
                    </article>
                </li>
                <li class="one_quarter">
                    <article class="inverse wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/09.jpg');"><a href="#"><i class="icons fa fa-3x fa-cutlery"></i></a>
                        <h6 class="heading font-x1 font"><a href="#"><br><br><br>เฟรนด์ชิพ </a></h6>
                        <p class="font">(Friendship)</p>
                    </article>
                </li>

            </ul>
            <br><br>
            <ul class="nospace group services">
                <li class="one_quarter first">
                    <article class="inverse wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/10.jpg');"><a href="#"><i class="icons fa fa-3x fa-cutlery"></i></a>
                        <h6 class="heading font-x1 font"><a href="#"><br><br><br>ร้านโกลิต - เจ้าเก่า </a></h6>
                        <p class="font">(Ko Lid)</p>
                    </article>
                </li>
                <li class="one_quarter">
                    <article class="inverse wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/11.jpg');"><a href="#"><i class="icons fa fa-3x fa-cutlery"></i></a>
                        <h6 class="heading font-x1 font"><a href="#"><br><br><br>เกาะลิบง ย่านตาขาว</a></h6>
                        <p class="font">(Koh Libong)</p>
                    </article>
                </li>
                <li class="one_quarter">
                    <article class="inverse wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/12.jpg');"><a href="#"><i class="icons fa fa-3x fa-cutlery"></i></a>
                        <h6 class="heading font-x1 font"><a href="#"><br><br><br>ร้านริชชี่คอฟฟี่บาร์ </a></h6>
                        <p class="font">(Richy Coffee Bar) </p>
                    </article>
                </li>
                <li class="one_quarter">
                    <article class="inverse wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/13.jpg');"><a href="#"><i class="icons fa fa-3x fa-cutlery"></i></a>
                        <h6 class="heading font-x1 font"><a href="#"><br><br><br>ร้านหมี่โกล่ำย่านตาขาว บะหมี่ร้อยปี</a></h6>
                        <p class="font"></p>
                    </article>
                </li>

            </ul>

            <!-- ################################################################################################ -->
        </section>
    </div>
    <div class="wrapper row3">
        <section class="hoc container clear">
            <!-- ################################################################################################ -->
            <div class="sectiontitle">
                <h6 class="heading submenu1"> <a name=ที่พักน่ารักเหมาะกับการพักผ่อน>ที่พักน่ารักเหมาะกับการพักผ่อน</a> </h6>
                <p></p>
            </div>
            <ul class="nospace group services">
                <li class="one_quarter first">
                    <article class="inverse wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/14.jpg');"><a href="#"><i class="icons fa fa-3x fa-bed"></i></a>
                        <h6 class="heading font-x1 font"><a href="#"><br><br><br>รีเวอร์ ปาร์ค รีสอร์ท</a></h6>
                        <p class="font">(River Park)</p>
                    </article>
                </li>
                <li class="one_quarter">
                    <article class="inverse wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/15.jpg');"><a href="#"><i class="icons fa fa-3x fa-bed"></i></a>
                        <h6 class="heading font-x1 font"><a href="#"><br><br><br>พี.เค อินท์, ย่านตาขาว</a></h6>
                        <p class="font">(PK IN)</p>
                    </article>
                </li>
                <li class="one_quarter">
                    <article class="inverse wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/16.jpg');"><a href="#"><i class="icons fa fa-3x fa-bed"></i></a>
                        <h6 class="heading font-x1 font"><a href="#"><br><br><br>ลานช้างรีสอร์ท</a></h6>
                        <p class="font">(Larn Chang)</p>
                    </article>
                </li>
                <li class="one_quarter">
                    <article class="inverse wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/17.jpg');"><a href="#"><i class="icons fa fa-3x fa-bed"></i></a>
                        <h6 class="heading font-x1 font"><a href="#"><br><br><br>คิวปิด โฮเต็ล</a></h6>
                        <p class="font">(Cupid Hotel)</p>
                    </article>
                </li>
            </ul>
            <br><br>
            <!-- ################################################################################################ -->
    </div>
    <br><br>
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