<?php
    require_once "include/common.php";
    $_SESSION['errors']=[];
    if (isset($_POST['submit'])){

        if (strlen($_FILES['frontIC']['name'])==0){
            $_SESSION['errors'][]= "Please Upload image of front IC";
        }
        if (strlen($_FILES['backIC']['name'])==0){
            $_SESSION['errors'][]= "Please Upload image of back IC";
        }
        if (count($_SESSION['errors'])==0){
            
            // $file_name =$_FILES['frontIC']['name'];
            // $file_ext = strtolower( end(explode('.',$file_name)));

            // $file_size=$_FILES['frontIC']['size'];
            $file_tmp= $_FILES['frontIC']['tmp_name'];

        
            // $type = pathinfo($file_tmp, PATHINFO_EXTENSION);
            $data = file_get_contents( $file_tmp );
            $frontICbase64['base64image']=base64_encode($data);


            // $file_name =$_FILES['backIC']['name'];
            // $file_ext = strtolower( end(explode('.',$file_name)));

            // $file_size=$_FILES['backIC']['size'];
            $file_tmp= $_FILES['backIC']['tmp_name'];
        
            // $type = pathinfo($file_tmp, PATHINFO_EXTENSION);
            $data = file_get_contents( $file_tmp );
            $backICbase64['base64image']=base64_encode($data);

            $_SESSION['front']=$frontICbase64;
            $_SESSION['back']=$backICbase64;

            header("Location: processRegister.php");
        }
    }
    
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>ROZAR | Registration</title>
	<meta charset="UTF-8">
	<meta name="description" content="loans HTML Template">
	<meta name="keywords" content="loans, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
 
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
    <link rel="stylesheet" href="css/slicknav.min.css"/>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header Section -->
	<header class="header-section">
		<a href="index.html" class="site-logo">
			<img src="img/logo.png" alt="">
		</a>
		<nav class="header-nav">
			<ul class="main-menu" >
				<li><a href="index.html" class="active">Home</a></li>
				
				<li><a href="about-us.html">About Us</a></li>
				<li><a href="about-us.html">Financial Services</a></li>
				<li><a href="news.html">News</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
			<div class="header-right">
				
			</div>
		</nav>
	</header>
    <!-- Header Section end -->
    
    <section class="hero-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
				</div>
				<div class="col-lg-6">
                        <form action="register.php" class="hero-form" method="POST" enctype="multipart/form-data">
                            <?php
                            printErrors();
                            ?>
                            <h4 style='color:white'>Please upload image of your front IC</h4><br>
                            <input name='frontIC'  type="file" accept=".JPG,.PNG"> <br><br>
                            <h4 style='color:white'>Please upload image of your Back IC</h4><br>
                            <input name='backIC'  type="file" > <br><br>
                            <input type="submit" name='submit' class="site-btn" value="Upload" accept=".JPG,.PNG"><br>
                        </form>
				</div>
			</div>
		</div>
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="img/hero-slider/1.jpg"></div>
			<div class="hs-item set-bg" data-setbg="img/hero-slider/2.jpg"></div>
			<div class="hs-item set-bg" data-setbg="img/hero-slider/3.jpg"></div>
		</div>
	</section>
    <!-- Hero Section end -->
    
    	<!-- Footer Section -->
	<footer class="footer-section">
		<div class="container">
			<a href="index.html" class="footer-logo">
                <img src="img/logo.png" alt="">
			</a>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<h2>What we do</h2>
						<ul>
							<li><a href="#">Loans</a></li>
							<li><a href="#">Car loans</a></li>
							<li><a href="#">Debt consolidation loans</a></li>
							<li><a href="#">Home improvement loans</a></li>
							<li><a href="#"> Wedding loans</a></li>
							<li><a href="#">Innovative Finance ISA</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<h2>About us</h2>
						<ul>
							<li><a href="#">About us</a></li>
							<li><a href="#">Our story</a></li>
							<li><a href="#">Meet the board</a></li>
							<li><a href="#">Meet the leadership team</a></li>
							<li><a href="#">Awards</a></li>
							<li><a href="#">Careers</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<h2>Legal</h2>
						<ul>
							<li><a href="#">Privacy policy</a></li>
							<li><a href="#">Loans2go principles</a></li>
							<li><a href="#">Website terms</a></li>
							<li><a href="#">Cookie policy</a></li>
							<li><a href="#">Conflicts policy</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<h2>Site Info</h2>
						<ul>
							<li><a href="#">Support</a></li>
							<li><a href="#">FAQ</a></li>
							<li><a href="#">Sitemap</a></li>
							<li><a href="#">Careers</a></li>
							<li><a href="#">Contact us</a></li>
						</ul>
					</div>
				</div>
			</div>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem por incididunt ut labore et dolore mag na aliqua.  Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti. Ut gravida mattis magna, non varius lorem sodales nec. In libero orci, ornare non nisl.</p>
			<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
		</div>
	</footer>
	<!-- Footer Section end -->
	
	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>

