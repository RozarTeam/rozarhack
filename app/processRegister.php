<?php
    require_once 'include/common.php';
    if (!isset($_SESSION['front']) && !isset($_SESSION['back'])){
        header('Location: register.php');
    }
    if (isset($_POST['submit'])){
        $_SESSION['errors']=[];
        if ($_POST['pwd']!= $_POST['pwd2']){
            $_SESSION['errors'][]="Password does not match!";
        }else{
            $userDAO= new userDAO();
            if ($userDAO->retrieveUser($_POST['nric'])){
                echo"<script>alert('You have already registered before';</script>";
            }else{
                $User= new User($_POST['nric'],$_POST['pwd'], $_POST['name'], $_POST['race'], $_POST['DOB'], $_POST['sex'], $_POST['CountryOfBirth'], $_POST['address'], $_POST['email'], $_POST['contactNo']);
            
                $status=$userDAO->add($User);
                if ($status){
                    echo"<script>alert('User Registered Successfully');</script>";
                }else{
                    echo"<scriptalert('User Registeration Failed');</script>";
                }
                header( "Refresh:1; url = index.php");
                // header("Location: index.php");
            }
            
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
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
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
	<!-- <div id="preloder">
		<div class="loader"></div>
	</div> -->

	<!-- Header Section -->
	<header class="header-section">
		<a href="index.php" class="site-logo">
			<img src="img/logo.png" alt="">
		</a>
		<nav class="header-nav">
			<ul class="main-menu" >
				<li><a href="index.php" class="active">Home</a></li>
				
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

	<section class="cta-section set-bg" data-setbg="img/cta-bg.jpg">
		
		
	</section>
<div class="container">
<h2>Particular</h2>
<form action='processRegister.php' method='POST'>
<?php
printErrors();
?>
<h4>NRIC: <input type='text' name='nric' id='nric' required></h4>
<h4>Password: <input type='password' name='pwd' id='pwd' required></h4>
<h4>Confirm Password: <input type='password' name='pwd2' id='pwd2' required></h4>
<h4>Name: <input type='text' name='name' id='name' required></h4>
<h4>Race: <input type='radio' name='race' id='raceC' value="Chinese">Chinese <input type='radio' name='race' id='raceM' value="Malay">Malay <input type='radio' name='race' id='raceI' value="Indian">Indian  <input type='radio' name='race' id='raceO' value="Others">Others</h4>
<h4>Date Of Birth: <input type='date' name='DOB' id='DOB' required></h4>
<h4>Sex: <input type='radio' name='sex' id='sexM' value="M">Male <input type='radio' name='sex' id='sexF' value="F">Female</h4>
<h4>Country Of Birth: <input type='text' name='CountryOfBirth' id='CountryOfBirth' required></h4>
<h4>Address: <input type='text' name='address' id='address' required></h4>
<h4>Email: <input type='text' name='email' id='email' required></h4>
<h4>Contact No: <input type='text' name='contactNo' id='contactNo' required></h4>
<input type='submit' name='submit' value='Confirm'>
</form>
</div>

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

	</body>
</html>

<script>
$(async () => {
    var serviceURL = 'https://niw1itg937.execute-api.ap-southeast-1.amazonaws.com/Prod/verify' ;
    try {
        const response =
            await fetch(
                serviceURL, {
                method: 'POST', headers: {
                    'Content-Type': 'application/json',
                    'x-api-key' :'hiy0Bmdv2Id55DmFJduM'
                }, 
                body: JSON.stringify({ "base64image": '<?php echo $_SESSION['front']['base64image'];?>' })
            });

        const data = await response.json();
        if (data.vision.length!=0){
            console.log(data.vision);
            if (data.vision.extract.length!=0){
                if (data.vision.extract.idNum.length!=0){
                    $('#nric').val(data.vision.extract.idNum);
                }
                if (data.vision.extract.countryOfBirth.length!=0){
                    $('#CountryOfBirth').val(data.vision.extract.countryOfBirth);
                }
                if (data.vision.extract.dob.length!=0){
                    var datearray = data.vision.extract.dob.split("-");
                    var DOB=new Date(datearray[2]+"/"+datearray[1]+"/"+datearray[0]);
                    var formattedDate= DOB.getDate() + "/" + (DOB.getMonth() + 1) + "/" + DOB.getFullYear();
                    console.log(formattedDate);
                    $('#DOB').val(formattedDate);
                }
                if (data.vision.extract.name.length!=0){
                    $('#name').val(data.vision.extract.name);
                }
                if (data.vision.extract.race.length!=0){
                    console.log(data.vision.extract.race);
                    if (data.vision.extract.race=="CHINESE"){
                        $('#raceC').attr('checked','checked');
                    }
                    if (data.vision.extract.race=="MALAY"){
                        $('#raceM').attr('checked','checked');
                    }
                    if (data.vision.extract.race=="INDIAN"){
                        $('#raceI').attr('checked','checked');
                    }
                }
            }
        }
        
        
    }catch (error) {
        print('There is a problem with the server, please try again later.<br />' + error);
    }
    unset($_SESSION['front']);
})
$(async () => {
    var serviceURL = 'https://niw1itg937.execute-api.ap-southeast-1.amazonaws.com/Prod/verify' ;
    try {
        const response =
            await fetch(
                serviceURL, {
                method: 'POST', headers: {
                    'Content-Type': 'application/json',
                    'x-api-key' :'hiy0Bmdv2Id55DmFJduM'
                }, 
                body: JSON.stringify({ "base64image": '<?php echo $_SESSION['back']['base64image'];?>' })
            });

        const data = await response.json();
        if (data.vision.length!=0){
            if (data.vision.extract.length!=0){
                if (data.vision.extract.address.length!=0){
                    $('#address').val(data.vision.extract.address);
                }
            }
        }
        
        
    }catch (error) {
        print('There is a problem with the server, please try again later.<br />' + error);
    }
    unset($_SESSION['back']);
})
</script>

