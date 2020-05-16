<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>LOANS2GO | Loans HTML Template</title>
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
	<link rel="stylesheet" href="css/jquery-ui.min.css"/>
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
			<a href="homepage-Loggedin.html" class="site-logo">
				<img src="img/logo.png" alt="">
			</a>
			<nav class="header-nav">
				<ul class="main-menu">
					<li><a href="homepage-Loggedin.html" class="active">Home</a></li>
					<li><a href="#">Profile</a>
						<ul class="sub-menu">
							<li><a href="#">Account Details</a></li>
							<li><a href="homepage-Financial Summary.html">Financial Summary</a></li>
							<li><a href="#">Transactions</a></li>
							<li><a href="loans.php">Apply for Loan</a></li>
						</ul>
					</li>
					<li><a href="#">Deposit/Transfer</a></li>
					<li><a href="financialplanner.html">Financial Planner</a></li>
					<li><a href="#">Quests/Rewards</a>
						<ul class="sub-menu">
								<li><a href="quest.php">Quests and Games</a></li>
								<li><a href="reward.php">Rewards</a></li>
						</ul>
					</li>
				</ul>
				<div class="header-right">
					<div class="header-right">
						
						<div class="hr-btn hr-btn-2"><i class="fa fa-sign-out" style="font-size:24px"></i>Logout</div>
					</div>
					
				</div>
			</nav>
		</header>
	<!-- Header Section end -->

	<!-- Page top Section end -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg/2.jpg">
		<div class="container">
			<h2>Loans</h2>
			<nav class="site-breadcrumb">
				<a class="sb-item" href="#">Home</a>
				<span class="sb-item active">Loans</span>
			</nav>
		</div>
	</section>
	<!-- Page top Section end -->

	<!-- Loans Section end -->
	<section class="loans-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<img src="img/loans.jpg" alt="">
				</div>
				<div class="col-lg-6">
					<div class="loans-text">
						<h2>Our Personal Loan Likelihood Checker is now available online</h2>
						<ul>
							<li>Allows you to check how likely your Loan application is to be approved</li>
							<li>Just key in your basic details below</li>
							<li>Skip the long waits!!!!</li>
						</ul>
						<!--  <a href="#" class="site-btn">apply right now!</a> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Loans Section end -->

	<!-- Score Section end -->
	<section class="score-section text-white set-bg" data-setbg="img/score-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-xl-9 col-lg-9">
					<h2>Calculate my Approval Likelihood</h2>
				</div>
				<!-- Loans calculator Section  -->
						<section class="loans-calculator-section spad">
							<div class="container">
								<!-- Hero Section end -->
									<div class="container">
										<div class="row">
											<div class="col-lg-6">
												<form class="hero-form" method='post' id="loanform">
													<input type="text" placeholder="Loan Amount (in dollars)" name="amount" id='amount'>
													<input type="text" placeholder="Loan Term (in months)" name="term" id='term'>
													<input type="text" placeholder="Monthy Income (in dollars)" name="income" id='income'>	
													<button type='submit' class="site-btn" id="calcbutton">Calculate Likelihood Now!</button> 
													<!-- <h5 style='color:white' id='perc'>hello</h5> -->
												</form>
											</div>
											<div class="col-lg-6">
												<br><br><br><br><br><br>
												<h1 style='color:white' id='perc'></h1>
											</div>
										</div>
									</div>
								<!-- Hero Section end -->
							<!-- <div class="loans-calculator">
								<div id="lc-dec" class="lc-control-btn">-</div>
								<div id="lc-inc" class="lc-control-btn ici">+</div>
								<div class="slider-input-warp">
									<div id="slider-range-max" class="slider">
										<div class="ui-slider-handle"><span id="loan-value">$1000</span></div>
									</div>
								</div>
								<div class="calculator-scale">
									<span></span>
									<span></span>
									<span></span>
									<span></span>
									<span></span>
								</div>
								<div class="lone-values">
									<div class="lone-value">$1000</div>
									<div class="lone-value lv-step">$10.000</div>
								</div>
								<div class="ls-result">Weekly payments: <span id="lone-emi">$19</span></div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem por incididunt ut labore et dolore mag na aliqua.  Class aptent taciti sociosqu ad litora torquent per conubia sed do eiusmod tem por incididun.</p>
								<div class="text-center">
									<a href="#" class="site-btn sb-big">show my score</a>
									<a href="#" class="site-btn mr-0 mr-sm-2 mt-4">apply right now!</a>
									<a href="#" class="site-btn sb-dark mt-4">see other loans</a>
								</div>
							</div> -->
						</div>
					</section>
					<!-- Loans calculator Section end -->
			</div>
		</div>
	</section>
	<!-- Score Section end -->

	<!-- Services Section -->
	<section class="services-section">
		<div class="container">
			<div class="text-center mb-5 pb-3">
				<h2>What loan may suit you</h2>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="service-item">
						<img src="img/loans/1.jpg" alt="">
						<h4>General Loan</h4>
						<a href="loans_submission.html" class="readmore">Apply for a loan now <img src="img/arrow.png" alt=""></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service-item">
						<img src="img/loans/2.jpg" alt="">
						<h4>Home Loan</h4>
						<a href="loans_submission.html" class="readmore">Apply for a loan now <img src="img/arrow.png" alt=""></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service-item">
						<img src="img/wedding.jpg" alt="">
						<h4>Wedding Loan</h4>
						<a href="loans_submission.html" class="readmore">Apply for a loan now <img src="img/arrow.png" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Services Section end -->

	<!-- Footer Section -->
	<footer class="footer-section">
		<div class="container">
			<a href="homepage-Loggedin.html" class="footer-logo">
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

<?php
	// if(isset($_POST['amount'])&&isset($_POST['term'])&&isset($_POST['income'])){
	// 	$amount=$_POST['amount'];
	// 	$term=$_POST['term'];
	// 	$income=$_POST['income'];
		// echo '<script>alert("'.$b.'");</script>';
	// }

?>

<script>
	$(document).ready(function() {
        $('#perc').hide();
    });
	
	$("#loanform").submit(async (event) => {  
		event.preventDefault();
		var amount = parseInt($('#amount').val());
		var term = parseInt($('#term').val());
		var income = parseInt($('#income').val());
		var percent = (1-(amount/term)/term)*100;
		percent = percent.toFixed(2);
		// alert(percent);
		var percElement = document.getElementById("perc");
		var percText = document.createTextNode(percent+'%');
		console.log(percText);
		percElement.appendChild(percText);
		$('#perc').show();
	});
</script>
