<?php include ('connect_db.php');
try {
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT * FROM `sci_inventory` LIMIT 0, 50");
  $stmt->execute();
  $inventory = $stmt->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>รายการครุภัณฑ์</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

            <h1 class="logo me-auto"><a href="index.html">inventory</a></h1>
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

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
                <h2>รายการครุภัณฑ์</h2>
                <p>คณะวิทยาศาสตร์ มหาวิทยาลัยนเรศวร </p>
            </div>
        </div><!-- End Breadcrumbs -->
        <style>
        table {
            text-align: center;
            font-size: 13px;
        }

        th {
            vertical-align: middle;
        }
        </style>
        <div class="table-responsive">
            <table class="table container  mt-3 table-bordered">
                <thead class="thead-dark table-success">
                    <tr>
                        <th scope="col" rowspan="3">#</th>
                        <th scope="col" rowspan="3">รหัสครุภัณฑ์</th>
                        <th scope="col" rowspan="3">รหัสครุภัณฑ์ 3 มิติ</th>
                        <th scope="col" rowspan="3">ชื่อครุภัณฑ์</th>
                        <th scope="col" rowspan="3">S/N</th>
                        <th scope="col" colspan="2" rowspan="2">ได้มา</th>
                        <th scope="col" rowspan="3">ราคาต่อหน่วย</th>
                        <th scope="col" rowspan="3">เลขที่ใบเบิก</th>
                        <th scope="col" rowspan="3">วิธีการได้มา</th>
                        <th scope="col" rowspan="3">ผู้ใช้งาน</th>
                        <th scope="col" colspan="4" text-center>สภาพการสำรวจ</th>
                        <th scope="col" rowspan="3">ใช้อยู่ที่</th>
                        <th scope="col" rowspan="3">ทะเบียนครุภัณฑ์</th>
                        <th scope="col" rowspan="3">Action</th>
                    </tr>
                    <tr>

                        <th scope="col" colspan="2">ใช้ได้</th>
                        <th scope="col" colspan="2">ใช้ไม่ได้</th>
                    </tr>
                    <tr>
                        <th scope="col">เมื่อไร</th>
                        <th scope="col">ประเภทงบประมาณ</th>
                        <th scope="col">ใช้งานต่อ</th>
                        <th scope="col">จำหน่ายปี</th>
                        <th scope="col">ซ่อมใช้งานต่อ</th>
                        <th scope="col">จำหน่ายปี</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                $countInv = 1;
                foreach($inventory as $inventory){
                $conn = null;
                $rDate = $inventory["R_date"]."/".$inventory["R_month"]."/".$inventory["R_year"];
                ?>
                    <form name="form2">
                        <tr style="text-align: left;">
                            <td><?php echo $countInv;?></td>
                            <td scope="row">
                                <!--
                    <p><button type="button" class="btn btn-primary">Update</button></p>
                -->
                                <?php echo $inventory['Item_id'];?>
                                <input name="itemid" type="hidden" class="form-control"
                                    value="<?php echo $inventory['Item_id'];?>">
                            </td>
                            <td><?php echo $inventory['Initem_id'];?>
                            </td>
                            <td><?php echo $inventory["Subtype"];?></td>
                            <td><?php echo $inventory["Serial_no"];?></td>
                            <td align="center"><?php echo $rDate;?></td>
                            <td><?php echo $inventory["Budget_type"];?></td>
                            <td align="right"><?php echo number_format($inventory["Cost"]);?></td>
                            <td align="center"><?php echo $inventory["Buy_id"];?></td>
                            <td align="center"><?php echo $inventory["Method"];?></td>
                            <td><?php echo $inventory["Dep_name"];?></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><?php echo $inventory["Place"];?></td>
                            <td><?php echo $inventory["Job_Detail"];?></td>
                            <td align="center"><a href="editinventory.php?itemid=<?php echo $inventory['Item_id']; ?>"
                            <span class="glyphicon glyphicon-pencil">;</span></a><a href="deleteinventory.php?itemid=<?php echo $inventory['Item_id']; ?>"><span class="glyphicon glyphicon glyphicon-remove">;</span></a>
                            </td>
                        </tr>

                        <?php
                        //$countInv++;
                                }
                            }
                    catch(PDOException $e) {
                    echo "Error: " . $e->getMessage();
                    }
                    
?>
                    </form>
                </tbody>
            </table>
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