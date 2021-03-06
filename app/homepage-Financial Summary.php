<?php
require_once 'include/common.php';
require_once 'include/protect.php';
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>ROZAR | Financial Summary</title>
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
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2004',  1000,      400],
          ['2005',  1170,      460],
          ['2006',  660,       1120],
          ['2007',  1030,      540]
        ]);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>

	
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		<script type="text/javascript">
		  google.charts.load("current", {packages:["corechart"]});
		  google.charts.setOnLoadCallback(drawChart);
		  function drawChart() {
			var data = google.visualization.arrayToDataTable([
			  ['Task', 'Hours per Day'],
			  ['Savings',     1100],
			  ['Food',      200],
			  ['Transport',  300],
			  ['Others', 250],
			  ['Expenditure',    700]
			]);
	
			var options = {
			  title: 'My Financial Summary of All Time	',
			  is3D: true,
			};
	
			var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
			chart.draw(data, options);
		  }
		</script>
</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header Section -->
	<header class="header-section">
			<a href="homepage-Loggedin.php" class="site-logo">
				<img src="img/logo.png" alt="">
			</a>
			<nav class="header-nav">
				<ul class="main-menu">
					<li><a href="homepage-Loggedin.php" class="active">Home</a></li>
					<li><a href="#">Profile</a>
						<ul class="sub-menu">
							<li><a href="#">Account Details</a></li>
							<li><a href="homepage-Financial Summary.php">Financial Summary</a></li>
							<li><a href="#">Transactions</a></li>
							<li><a href="loans.php">Apply for Loan</a></li>
						</ul>
					</li>
					<li><a href="#">Deposit/Transfer</a></li>
					<li><a href="financialplanner.php">Financial Planner</a></li>
					<li><a href="#">Quests/Rewards</a>
						<ul class="sub-menu">
								<li><a href="quest.php">Quests and Games</a></li>
								<li><a href="reward.php">Rewards</a></li>
						</ul>
					</li>
				</ul>
				<div class="header-right">
					<div class="header-right">
						
							<div onclick="logout()" class="hr-btn hr-btn-2"><i class="fa fa-sign-out" style="font-size:24px"></i>Logout</div>
					</div>
					
				</div>
			</nav>
		</header>
	<!-- Header Section end -->

	<section class="cta-section set-bg" data-setbg="img/cta-bg.jpg">
		
		
	</section>
	

	

	<div class="row">
	  <div class="column2" style="background-color:#fff;">
		<h2>&nbsp; &nbsp; &nbsp; &nbsp;My Financial Summary</h2>
		<div id="piechart_3d" style="width: 900px; height: 500px;"></div>
		
	  </div>
	  <div class="column2" style="background-color:#fff;">
		<h2>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Summary Report</h2><br><br><br><br>
		<h5>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; TOTAL ASSETS : $50928</h5><br>
		<h5>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; 	  Current Assets : $30827</h5><br>
		<h5>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;  Cash : $19726</h5><br>
		<h5>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;  Receivables : $ 8273</h5><br>
		<h5>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;  Inventory : $3293</h5><br>
		<h5>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; TOTAL NET SAVINGS : $17264</h5><br>
		<h5>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; TOTAL NET EXPENDITURE : $11293</h5><br>
		
		
		
		

	  </div>
	</div>
	
	<!-- Why Section end -->
	<section class="why-section spad">
		<div class="container">

			<div id="piechart_3d" style="width: 900px; height: 200px;"></div>
	</section>
	<!-- Why Section end -->


	<!-- CTA Section end -->
	<section class="cta-section set-bg" data-setbg="img/cta-bg.jpg">
		<div class="container">
			
		</div>
	</section>
	<!-- CTA Section end -->







	<!-- Footer Section -->
	<footer class="footer-section">
		<div class="container">
			
				
			</a>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<h2>What we do</h2>
						
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<h2>About us</h2>
						
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<h2>Legal</h2>
						
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<h2>Site Info</h2>
						
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
		function logout(){
			window.location.href = 'logout.php'
		}
		</script>