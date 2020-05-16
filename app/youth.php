<?php
require_once 'include/common.php';
$plannerDAO= new FinancialPlannerDAO();
$plannerlist = $plannerDAO->retrieveAll();

if(isset($_POST['name'])&&isset($_POST['date'])){
    $name=$_POST['name'];
    $date=$_POST['date'];
    $newdate = date('Y-m-d', strtotime($date));
    $username='1'; #for now
    $youthDAO= new YouthDAO();
    $addresult=$youthDAO->add($username, $name, $newdate);
    
}
?>
<html>
<head>
    <title>Rozar Banking | Financial Planning for Youths</title>
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
 <!-- <div id="preloder">
		<div class="loader"></div>
    </div> -->
    
    <!-- Header Section -->
	<header class="header-section">
		<a href="index.html" class="site-logo">
			<img src="img/logo.png" alt="">
		</a>
		<nav class="header-nav">
			<ul class="main-menu">
				<li><a href="homepage-Loggedin.html" class="active">Home</a></li>
				<li><a href="#">Profile</a>
					<ul class="sub-menu">
						<li><a href="loans.html">Account Details</a></li>
						<li><a href="homepage-Financial Summary.html">Financial Summary</a></li>
						<li><a href="#">Transactions</a></li>
						<li><a href="loans.html">Apply for Loan</a></li>
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
	<section class="hero-section">
		<div class="container">
            <div class="row">
                <div class="col-lg-6">
					<div class="hs-text">
					</div>
				</div>
                <div class="col-lg-6">
                    <form method='POST' id="booking" class="hero-form">
                        <h5 style='color:white'><label for="name">Please Choose Financial Planner:</label><h5>
                        <select id="name" name="name">
                        <?php 
                            // echo $plannerlist[0]->getName();
                            foreach($plannerlist as $planner){
                                $plannername=$planner->getName();
                                // echo $plannername;
                                echo'<option value="'.$plannername.'">'.$plannername.'</option>';
                            }
                        ?>
                        </select>
                        <br><br>
                        <h5 style='color:white'><label for="date">Appointment Date</label><h5>
                        <input type="date" id="date" name="date" required="" placeholder="mm/dd/yyyy">
                        <br>
                        <input type="submit" value="Submit" class="site-btn">
                    </form>
                    <a href="financialplanner.html">Return</a>
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

<?php
    if (isset($addresult)){
    if($addresult){
        echo"<script>alert('Appointment has been booked.');window.location.href='financialplanner.html';</script>";
        exit();
    }
    else{
        echo"<script>alert('Booking unsuccessful. Try again.')</script>";
    }
}