<?php

require 'config.php';


if (!empty($_POST)){
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $township = $_POST['township'];
    $address = $_POST['address'];

    $sql = "SELECT COUNT(phone) AS num FROM users WHERE phone = :phone";
    $stmt = $pdo->prepare($sql);

    $stmt->bindValue(':phone', $phone);

    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if($row['num'] > 0){
        echo "This phonenumber already taken!";
    }else{

        $sql = "INSERT INTO users(username,phone,email,township,address) VALUES (:username,:phone,:email,:township,:address)";

        $stmt = $pdo->prepare($sql);

        $stmt->bindValue(':username', $username);
        $stmt->bindValue(':phone', $phone);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':township', $township);
        $stmt->bindValue(':address', $address);

        $result = $stmt->execute();

        if ($result) {
            header('location:succe.php');
        }
    }
}

?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="/design/img/favicon.png" type="image/png">
        <title>Tun Electronics</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="design/css/bootstrap.css">
        <link rel="stylesheet" href="design/vendors/linericon/style.css">
        <link rel="stylesheet" href="design/css/font-awesome.min.css">
        <link rel="stylesheet" href="design/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="design/vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="design/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="design/vendors/animate-css/animate.css">
        <!-- main css -->
        <link rel="stylesheet" href="design/css/style.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="design/css/responsive.css">
    </head>
    <body>

        <!--================Header Menu Area =================-->
        <header class="header_area">

            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display logo font color 003cff-->
						<img src="design/img/banner/logo.png">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="admin.php">Login</a></li>
							</ul>
						</div>
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->

        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
                        <h3 style="font-weight:bold; color:#eeeeee">Register ပြုလုပ်ခြင်းဖြင့် TUN electronics logo ပါ mask လက်ဆောင်ရယူပါ</h3>

                        <a class="black_btn" href="#register">Register Now</a>

					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        <div class="row"   style="background-color:#fffeee;">
            <div class="col-md-6" style="padding-left:100px; padding-top:20px; padding-bottom:20px;">
                <a name="register">
			    <div class="card innerm shadow-lg p-3 mb-6 bg-white rounded" style="width: 30rem;">
                <div class="card-body"  style="background-color:blue," >

                    <h2 style="color: #333333; padding-bottom:20px">Register Form</h2>
                        <form class="" action="index.php" method="post">
                            <div class="form-group" style="color: #272626; font-weight:bold">
                                <label for="username">Username</label>
                                <input class="form-control" type="text" name="username" value="" required=" placeholder="example">
                            </div>
                            <div class="form-group" style="color: #272626; font-weight:bold">
                                <label for="phone">Phone Number</label>
                                <input class="form-control" type="number" name="phone" value="" required placeholder="(+95)">
                            </div>
                            <div class="form-group" style="color: #272626; font-weight:bold">
                                <label for="email">Email Address</label>
                                <input class="form-control" type="text" name="email" value="" required placeholder="example@gmail.com">
                            </div>
                            <div class="form-group" style="color: #272626; font-weight:bold">
                                <label for="township">Township</label>
                                <input class="form-control" type="text" name="township" value="" required>
                            </div>
                            <div class="form-group" style="color: #272626; font-weight:bold">
                                <label for="address">Address</label>
                                <input class="form-control" type="text" name="address" value="" required >
                            </div>
                            <div class="form-group" style="color: #272626; font-weight:bold">
                                <input class="btn btn-primary" type="submit" name="" value="Register" required>
                            </div>
                        </form>

					</div>
					</div>
                </a>
            </div>

            <div class="col-md-6" style="padding:20px 50px 10px 20px">
                <h2 style="color: #333333">About Tun Electronic Company</h2><br>
                <p style="color: #333333">
                    Founded in 1997, Tun Electronic Company (Known as Maung Maung Tun Electronic) is a family run business based in Yangon, Myanmar (Burma) and offer all kinds of electronic and consumer’s products and system solutions for the residential, commercial and industrial sectors.
                </p>

                <h2 style="color: #333333">Main Office</h2><br>
                <p style="color: #333333">
                Tun Electronic Trading Co., Ltd.<br>
                No.99 Anawrahta Road, Latha,<br>
                Yangon, Myanmar.<br>
                Tel. 95-1-8385805<br>
                </p>

                <h2 style="color: #333333">Customers </h2><br>
                <p style="color: #333333">
                The Company’s customer markets comprise retailers, enterprises, municipalities, utilities, universities, businesses, government’s institutions and other NGO organizations.
            </div>

        </div>



        <!--================ start footer Area  =================-->

                <div class="row" style="background-color:#dddddd; padding:20px 0px 0px 80px">
                    <p>
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> Copyright@ 2020 Online Register Form and Tracking.All Rights Reserved from Tun Electronics |
                        Developed by  <a href="http://www.novelidea.com.mm" target="_blank">Novel Idea </p>
                </div>
            </div>

		<!--================ End footer Area  =================-->




        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="design/js/jquery-3.2.1.min.js"></script>
        <script src="design/js/popper.js"></script>
        <script src="design/js/bootstrap.min.js"></script>
        <script src="design/js/stellar.js"></script>
        <script src="design/vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="design/vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="design/vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="design/vendors/isotope/isotope-min.js"></script>
        <script src="design/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="design/js/jquery.ajaxchimp.min.js"></script>
        <script src="design/vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="design/vendors/counter-up/jquery.counterup.js"></script>
        <script src="design/js/mail-script.js"></script>
        <script src="design/js/theme.js"></script>
    </body>
</html>
