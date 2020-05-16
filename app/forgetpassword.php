<?php
    include 'include/common.php';
    if (isset($_POST['back'])){
        header('Location: index.php');
    }
    if (isset($_POST['submit'])){
        $_SESSION['errors'] = [];
		if (!isset($_POST['nric']) || strlen(trim($_POST['nric'])) == 0){
			$_SESSION['errors'][]='Please enter NRIC!';
		}
		if (!isset($_POST['DOB']) || strlen(trim($_POST['DOB'])) == 0){
			$_SESSION['errors'][]='Please enter Date of Birth!';
        }
		if (!isset($_POST['pwd']) || strlen(trim($_POST['pwd'])) == 0){
			$_SESSION['errors'][]='Please enter new password!';
		}
		if (!isset($_POST['pwd2']) || strlen(trim($_POST['pwd2'])) == 0){
			$_SESSION['errors'][]='Please enter confirm new password!';
        }
        if (count($_SESSION['errors'])==0){
            if ($_POST['pwd']!=$_POST['pwd2']){
                $_SESSION['errors'][]='Password does not match!';
            }else{
                $userDAO= new UserDAO();
                $user=$userDAO->retrieveUser($_POST['nric']);
                if (!$user){
                    $_SESSION['errors'][]='Invalid NRIC!';
                }elseif($_POST['DOB']!=date('Y-m-d', strtotime($user->getDOB()))){
                    $_SESSION['errors'][]='Invalid Date Of Birth!';
                }else{
                    $status=$userDAO->updateNewPassword($_POST['nric'],$_POST['pwd']);
                    if ($status){
                        echo "<script> 
                        alert('Password Updated Successfully');
                        </script>";
                    }else{
                        echo "<script> 
                        alert('Password Updated Failed!');
                        </script>";
                    }
                }

            }
        }
    }
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Rozar | Forget Password</title>
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
		<a href="index.php" class="site-logo">
			<img src="img/logo.png" alt="">
		</a>
		<nav class="header-nav">
			<ul class="main-menu">
				<li><a href="index.php" class="active">Home</a></li>
				<li><a href="about-us.html">About Us</a></li>
				<li><a href="#">Pages</a>
					<ul class="sub-menu">
						<li><a href="about-us.html">About Us</a></li>
						<li><a href="#">Loans</a></li>
						<li><a href="elements.html">elements</a></li>
					</ul>
				</li>
				<li><a href="news.html">News</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
			<div class="header-right">
				<a href="#" class="hr-btn"><i class="flaticon-029-telephone-1"></i>Call us now! </a>
				<div class="hr-btn hr-btn-2">+45 332 65767 42</div>
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
        <form action='forgetpassword.php' method='POST' class="hero-form">
            <?php
                printErrors();
            ?>
            <h2 style='color:white'>Forget Password</h2><br>
            <h4 style='color:white'>NRIC</h4> <input type='text' name='nric' placeholder='NRIC'>
            <h4 style='color:white'>Date Of Birth</h4><input type='date' name='DOB' placeholder='Date of Birth'>
            <h4 style='color:white'>New Password</h4>  <input type='password' name='pwd' placeholder='New Password'>
            <h4 style='color:white'>Confirm New Password</h4><input type='password' name='pwd2' placeholder='Confirm New Password'>
            <input type='submit' name='submit' value='Reset Password' class="site-btn"> <input type='submit' name='back' value='Back' class="site-btn"> 
		</form>
</div>
</div>
</div>
<div class="hero-slider owl-carousel">
        <div class="hs-item set-bg" data-setbg="img/hero-slider/1.jpg"></div>
    </div>
</section>
		
	<!-- Footer Section -->
	<footer class="footer-section">
		<div class="container">
			<a href="index.php" class="footer-logo">
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
