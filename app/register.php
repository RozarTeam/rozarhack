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
<html>
<head>

</head>
<body>
<form action="register.php" method="POST" enctype="multipart/form-data">
    <?php
    printErrors();
    ?>
    Please upload image of your front IC<br>
    <input name='frontIC'  type="file" accept=".JPG,.PNG"> <br><br>
    Please upload image of your Back IC<br>
    <input name='backIC'  type="file" > <br><br>
    <input type="submit" name='submit' value="Upload" accept=".JPG,.PNG"><br>
</form>

</body>
</html>