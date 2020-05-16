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
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
<h1>Particular</h1>
<form action='processRegister.php' method='POST'>
<?php
printErrors();
?>
<h3>NRIC: <input type='text' name='nric' id='nric' required></h3>
<h3>Password: <input type='password' name='pwd' id='pwd' required></h3>
<h3>Confirm Password: <input type='password' name='pwd2' id='pwd2' required></h3>
<h3>Name: <input type='text' name='name' id='name' required></h3>
<h3>Race: <input type='radio' name='race' id='raceC' value="Chinese">Chinese <input type='radio' name='race' id='raceM' value="Malay">Malay <input type='radio' name='race' id='raceI' value="Indian">Indian  <input type='radio' name='race' id='raceO' value="Others">Others</h3>
<h3>Date Of Birth: <input type='date' name='DOB' id='DOB' required></h3>
<h3>Sex: <input type='radio' name='sex' id='sexM' value="M">Male <input type='radio' name='sex' id='sexF' value="F">Female</h3>
<h3>Country Of Birth: <input type='text' name='CountryOfBirth' id='CountryOfBirth' required></h3>
<h3>Address: <input type='text' name='address' id='address' required></h3>
<h3>Email: <input type='text' name='email' id='email' required></h3>
<h3>Contact No: <input type='text' name='contactNo' id='contactNo' required></h3>
<input type='submit' name='submit' value='Confirm'>
</form>

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


</body>
