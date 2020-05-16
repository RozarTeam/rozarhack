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
<html>
    <head>
    </head>
    <body>
        <form action='forgetpassword.php' method='POST'>
            <?php
                printErrors();
            ?>
            <h1>Forget Password</h1>
            <h3>NRIC <input type='text' name='nric'></h3>
            <h3>Date Of Birth<input type='date' name='DOB'></h3>
            <h3>New Password <input type='password' name='pwd'></h3> 
            <h3>Confirm New Password <input type='password' name='pwd2'></h3>
            <input type='submit' name='submit' value='Reset Password'> <input type='submit' name='back' value='Back'> 
        </form>
    </body>
</html>
