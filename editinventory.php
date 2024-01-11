<?php include ('connect_db.php');
if (!isset($_GET['itemid'])) $_GET['itemid'] = "";
if (!isset($_GET['initemid'])) $_GET['initemid'] = "";
if (!isset($_GET['subtype'])) $_GET['subtype'] = "";
if (!isset($_GET['ryear'])) $_GET['ryear'] = "";
if (!isset($_GET['budgettype'])) $_GET['budgettype'] = "";
if (!isset($_GET['cost'])) $_GET['cost'] = "";
if (!isset($_GET['buyid'])) $_GET['buyid'] = "";
if (!isset($_GET['method'])) $_GET['method'] = "";
if (!isset($_GET['depname'])) $_GET['depname'] = "";
if (!isset($_GET['place'])) $_GET['place'] = "";
if (!isset($_GET['jobdetail'])) $_GET['jobdetail'] = "";
if (!isset($_GET['serialno'])) $_GET['serialno'] = "";
        $itemid = $_GET['itemid'];
        $initemid = $_GET['initemid'];
        $subtype = $_GET['subtype'];
        $serialno = $_GET['serialno'];
        $ryear = $_GET['ryear'];
        $budgettype = $_GET['budgettype'];
        $cost = $_GET['cost'];
        $buyid = $_GET['buyid'];
        $method = $_GET['method'];
        $depname = $_GET['depname'];
        $place = $_GET['place'];
        $jobdetail = $_GET['jobdetail'];
        try {
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT * FROM `sci_inventory`");
            $stmt->execute();
            $inventory = $stmt->fetch();
        } catch(PDOException $e) {
            //echo $e->getMessage();
          }
          
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>แก้ไขครุภัณฑ์</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Mentor
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.php">inventory</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="courses.html">Courses</a></li>
                    <li><a href="trainers.html">Trainers</a></li>
                    <li><a href="events.html">Events</a></li>
                    <li><a href="pricing.html">Pricing</a></li>

                    <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li>
                    <li><a class="active" href="contact.html">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <a href="courses.html" class="get-started-btn">Get Started</a>

        </div>
    </header><!-- End Header -->

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>แก้ไขครุภัณฑ์</h2>
            <p>คณะวิทยาศาสตร์ มหาวิทยาลัยนเรศวร </p>
        </div>
    </div><!-- End Breadcrumbs -->

    <div class="container col-lg-8 mt-3">

        <form action="editinventory_db.php" method="post">
            <div class="row">
                <div class="col-md-6 form-group mt-2">
                    <label class="form-control-label">รหัสครุภัณฑ์</label><input type="text" name="itemid"
                        class="form-control" placeholder="รหัสครุภัณฑ์" value="<?php echo $inventory['Item_id'];?>"
                        required>
                </div>
                <div class="col-md-6 form-group mt-2">
                    <label class="form-control-label">รหัสครุภัณฑ์ 3 มิติ</label><input type="text" class="form-control"
                        name="initemid" placeholder="รหัสครุภัณฑ์ 3 มิติ" value="<?php echo $inventory['Initem_id'];?>"
                        required>
                </div>
                <div class="mt-3">
                    <label class="form-control-label">ชื่อครุภัณฑ์</label><input type="text" class="form-control"
                        name="subtype" placeholder="ชื่อครุภัณฑ์" value="<?php echo $inventory['Subtype'];?>" required>
                </div>
                <div class="mt-3">
                    <label class="form-control-label">S/N</label><input type="text" class="form-control" name="serialno"
                        placeholder="S/N" value="<?php echo $inventory['Serial_no'];?>" required>
                </div>
                <div class="col-md-4 form-group mt-3">
                    <label class="form-control-label">ได้มาเมื่อ</label><input type="text" name="ryear"
                        class="form-control" placeholder="ได้มาเมื่อ" value="<?php echo $inventory['R_year'];?>"
                        required>
                </div>
                <div class="col-md-8 form-group mt-3">
                    <label class="form-control-label">ประเภทงบประมาณ</label><input type="text" class="form-control"
                        name="budgettype" placeholder="ประเภทงบประมาณ" value="<?php echo $inventory['Budget_type'];?>"
                        required>
                </div>
                <div class="col-md-6 form-group mt-3">
                    <label class="form-control-label">ราคาต่อหน่วย</label><input type="text" name="cost"
                        class="form-control" placeholder="ราคาต่อหน่วย" value="<?php echo $inventory['Cost'];?>"
                        required>
                </div>
                <div class="col-md-6 form-group mt-3">
                    <label class="form-control-label">เลขที่ใบเบิก</label><input type="text" class="form-control"
                        name="buyid" placeholder="เลขที่ใบเบิก" value="<?php echo $inventory['Buy_id'];?>" required>
                </div>
                <div class="col-md-6 form-group mt-3">
                    <label class="form-control-label">วิธีการได้มา</label><input type="text" name="method"
                        class="form-control" placeholder="วิธีการได้มา" value="<?php echo $inventory['Method'];?>"
                        required>
                </div>
                <div class="col-md-6 form-group mt-3">
                    <label class="form-control-label">ผู้ใช้งาน</label><input type="text" class="form-control"
                        name="depname" placeholder="ผู้ใช้งาน" value="<?php echo $inventory['Dep_name'];?>" required>
                </div>
                <div class="col-md-6 form-group mt-3">
                    <label class="form-control-label">ใช้อยู่ที่</label><input type="text" name="place"
                        class="form-control" placeholder="ใช้อยู่ที่" value="<?php echo $inventory['Place'];?>"
                        required>
                </div>
                <div class="col-md-6 form-group mt-3">
                    <label class="form-control-label">ทะเบียนครุภัณฑ์</label><input type="text" class="form-control"
                        name="jobdetail" placeholder="ทะเบียนครุภัณฑ์" value="<?php echo $inventory['Job_Detail'];?>"
                        required>
                </div>
                <div class="mt-2 text-center">
                    <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
                </div>
        </form>
    </div>
    </div>



    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Mentor</h3>
                        <p>
                            A108 Adam Street <br>
                            New York, NY 535022<br>
                            United States <br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Join Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>Mentor</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>