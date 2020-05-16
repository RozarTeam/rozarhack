<?php
// $perx_url='https://api.perxtech.io/';
// $voucher_url='v4/vouchers';
// $api_url=$perx_url.$voucher_url;
// $authorization = "Authorization: Bearer 1495fbc4c54c80bcc27dc3bf8e37dc71d880ff79dc5347372bc2a1baa6bd8fc3";
// $api_url='https://light.microsite.perxtech.io/game/2?token=1495fbc4c54c80bcc27dc3bf8e37dc71d880ff79dc5347372bc2a1baa6bd8fc3&redirect_uri=http://localhost/rozar/app/reward.html';
// $voucher_json=file_get_contents($api_url);
// header('Location: '.$api_url);

?>

<html>
    <head>
        <title>Rozar | Quests and Games</title>
        <meta charset="UTF-8">
        <meta name="description" content="loans HTML Template">
        <meta name="keywords" content="loans, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Favicon -->
        <link href="img/favicon.ico" rel="shortcut icon"/>

        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
    
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/font-awesome.min.css"/>
        <link rel="stylesheet" href="css/owl.carousel.min.css"/>
        <link rel="stylesheet" href="css/flaticon.css"/>
        <link rel="stylesheet" href="css/slicknav.min.css"/>

        <!-- Main Stylesheets -->
        <link rel="stylesheet" href="css/style.css"/>

        <!--===============================================================================================-->	
            <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="css/util.css">
            <link rel="stylesheet" type="text/css" href="css/main.css">
        <!--===============================================================================================-->

        <style>
        .w3-button {width:150px;}
        </style>
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
    <header class="header-section">
		<a href="index.html" class="site-logo">
			<img src="img/logo.png" alt="" height="60" width="60">
		</a>
		<nav class="header-nav">
			<ul class="main-menu">
				<li><a href="index.html" class="active">Home</a></li>
				<li><a href="about-us.html">About Us</a></li>
				<li><a href="#">Pages</a>
					<ul class="sub-menu">
						<li><a href="about-us.html">About Us</a></li>
						<li><a href="loans.html">Loans</a></li>
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
    
    <section class="hero-section">

    <div class="hero-slider owl-carousel">
        <div class="hs-item set-bg" data-setbg="img/hero-slider/3.jpg"></div>
    </div>
    </section>
        <h3>Quest</h3>
        <div class="table100">
        <table>
            <thead>
            <tr class="table100-head">
                <th class="column1">No.</th>
                <th class="column2">Quest Name</th>
                <th class="column3">Quest Description</th>
                <th class="column4">Completion Rate</th>
                <th class="column5">Target</th>
                <th class="column6">Rewards</th>
            </tr>
            </thead>
            <tbody>
                <td class="column1">1</td>
                <td class="column2">Monthly Saving</td>
                <td class="column3">Save 35% of your income this month and earn rewards.</td>
                <td class="column4">0%</td>
                <td class="column5">0/1</td>
                <td class="column6">$100 Shopee Voucher</td>
            </tr>
            </tr>
                <td class="column1">2</td>
                <td class="column2">Saving Spree</td>
                <td class="column3">Spend less than $50 a day for 15 days</td>
                <td class="column4">33.33%</td>
                <td class="column5">5/15</td>
                <td class="column6">$30 Steam Voucher</td>
            </tr>
            </tr>
                <td class="column1">3</td>
                <td class="column2">Performance Bonus!</td>
                <td class="column3">Follow the reccommendation spending by Rozar planner for 21days</td>
                <td class="column4">100%</td>
                <td class="column5">21/21</td>
                <td class="column6">Razer $200 voucher</td>
            </tr>
            </tbody> 
        </table>
        </div>
        <br><br>
        <h3>Game</h3>
        <div class="table100">
        <table>
        <thead>
            <tr class="table100-head">
                <th colspan=2 class="column1">Games</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td class="column1">
                <p>Razer Scratch Card Promo<p>
            </td>
            <td class="column2">
                <button type='button' class="w3-button w3-red" id='scratchcard' onclick="scratchcard()">Play 
            </td>
        </tr>
        <tr>
            <td class="column1">
                <p>Gongcha Hit the Pinata<p>
            </td>
            <td class="column2">
                <button type='button' class="w3-button w3-red" id='pinata' onclick="gongcha()">Play 
            </td>
        </tr>
        </tbody>
        </table>
        </div>

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
<script>
function scratchcard(){
    window.location.replace("https://light.microsite.perxtech.io/game/2?token=1495fbc4c54c80bcc27dc3bf8e37dc71d880ff79dc5347372bc2a1baa6bd8fc3&redirect_uri=http://localhost/rozar/app/quest.php");
}

function gongcha(){
    window.location.replace("https://light.microsite.perxtech.io/game/3?token=1495fbc4c54c80bcc27dc3bf8e37dc71d880ff79dc5347372bc2a1baa6bd8fc3&redirect_uri=http://localhost/rozar/app/quest.php");
}
</script>