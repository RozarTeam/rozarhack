<?php
// $perx_url='https://api.perxtech.io/';
// $voucher_url='v4/vouchers';
// $api_url=$perx_url.$voucher_url;
// $authorization = "Authorization: Bearer 1495fbc4c54c80bcc27dc3bf8e37dc71d880ff79dc5347372bc2a1baa6bd8fc3";
// $api_url='https://light.microsite.perxtech.io/game/2?token=1495fbc4c54c80bcc27dc3bf8e37dc71d880ff79dc5347372bc2a1baa6bd8fc3&redirect_uri=http://localhost/rozar/app/reward.html';
// $voucher_json=file_get_contents($api_url);
// header('Location: '.$api_url);
// echo "A";
// $curl = curl_init();

// curl_setopt_array($curl, array(
//   CURLOPT_URL => "https://api.perxtech.io/v4/vouchers",
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => "",
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 0,
//   CURLOPT_FOLLOWLOCATION => true,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => "GET",
//   CURLOPT_HTTPHEADER => array(
//     "Authorization: Bearer 1495fbc4c54c80bcc27dc3bf8e37dc71d880ff79dc5347372bc2a1baa6bd8fc3"
//   ),
// ));

// $response = curl_exec($curl);

// IF($response == FALSE) {
//     echo "cURL Error!".curl_error($curl);
// }
// curl_close($curl);

// echo $response;


?>

<html>
    <head>
        <title>Rozar | Rewards</title>
        <meta charset="UTF-8">
        <meta name="description" content="loans HTML Template">
        <meta name="keywords" content="loans, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Favicon -->
        <link href="img/favicon.ico" rel="shortcut icon"/>

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


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


        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
    <header class="header-section">
		<a href="index.html" class="site-logo">
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
    
    <section class="hero-section">

    <div class="hero-slider owl-carousel">
        <div class="hs-item set-bg" data-setbg="img/hero-slider/3.jpg"></div>
    </div>
    </section>

        <h3>Reward points: 1000pts</h3>
        <!-- <div class="container-table100"> -->
			<!-- <div class="wrap-table100"> -->
				<div class="table100">
        <table>
            <thead>
                <tr class="table100-head">
                    <th class="column1" colspan=3>Coupon</th> 
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="column1">
                        <img src="img/coupon/lazada.jpg" height="120" width="120">
                    </td>
                <td class="column2">
                    <h6>$20 Lazada Voucher</h6>
                </td>
                <td class="column3">
                    <button type='button' class="w3-button w3-red" name='lazada' id='lazada' onClick="MyWindow=window.open('resource/voucher1.html','MyWindow','width=600,height=600'); return false;"/>Redeem
                </td>
            </tr>   
            <tr>
                <td class="column1">
                    <img src="img/coupon/shopee.jpg" height="120" width="120">
                </td>
                <td class="column2">
                    <h6>$50 Shopee Voucher</h6>
                </td>
                <td class="column3">
                    <button type='button' class="w3-button w3-red" name='shopee' id='shopee' onClick="MyWindow=window.open('resource/voucher2.html','MyWindow','width=600,height=600'); return false;"/>Redeem
                </td>
            </tr>   
            <tr>
                <td class="column1">
                    <img src="img/coupon/steam.jpg" height="120" width="120">
                </td>
                <td class="column2">
                    <h6>$30 Steam Voucher</h6>
                </td>
                <td class="column3">
                        <button type='button' class="w3-button w3-red" name='steam' id='steam' onClick="MyWindow=window.open('resource/voucher3.html','MyWindow','width=600,height=600'); return false;"/>Redeem
                </td>
                </td>
            </tr>
            <tr>
                <td class="column1">
                    <img src="img/coupon/razer.jpg" height="120" width="120">
                </td>
                <td class="column2">
                    <h6>$200 Razer Voucher</h6>
                </td>
                <td class="column3">
                        <button type='button' class="w3-button w3-red" name='razer' id='razer' onClick="MyWindow=window.open('resource/voucher4.html','MyWindow','width=600,height=600'); return false;"/>Redeem
                </td>
                </td>
            </tr>
            </tbody>
        </table>
</div>
<!-- </div> -->
<!-- </div> -->

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