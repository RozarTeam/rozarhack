<?php

require_once 'common.php';

class UserDAO {

    public function authenticate($nric, $password) { // Authenticate Login
        
        // Connect to Database
        $connMgr = new ConnectionManager();
        $conn = $connMgr->getConnection();

        // Write & Prepare SQL Query (take care of Param Binding if necessary)
        $sql = "SELECT * FROM USER WHERE nric=:nric";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nric',$nric,PDO::PARAM_STR);
        
        // Execute SQL Query
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $status=$stmt->execute();

        // Retrieve Query Results (if any)
        $return_message = 'Invalid NRIC! Please try again or create new account.';
        if ($row=$stmt->fetch()){
            if (password_verify($password,$row['password'])){
                $return_message= 'SUCCESS';
            }
            else{
                $return_message='Password is incorrect!';
            }
        }
        
        // Clear Resources $stmt, $pdo
        $stmt = null;
        $conn = null;

        // Return (if any)
        return $return_message;
    }

    public function retrieveUser($nric) { // Retrieve User Information
        
        // Connect to Database
        $connMgr = new ConnectionManager();
        $conn = $connMgr->getConnection();

        // Write & Prepare SQL Query (take care of Param Binding if necessary)
        $sql = "SELECT * FROM USER WHERE nric=:nric";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nric',$nric,PDO::PARAM_STR);
        
        // Execute SQL Query
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();

        // Retrieve Query Results (if any)
        // $user=[];
        $user = false;
        if ($row=$stmt->fetch()){
            $user = new User($row['nric'], $row['password'], $row['name'], $row['race'], $row['DOB'],$row['Sex'],$row['CountryOfBirth'],$row['Address'],$row['Email'],$row['ContactNo']);
        }
        
        // Clear Resources $stmt, $pdo
        $stmt = null;
        $conn = null;

        // Return (if any)
        return $user;
    }

    public function add($User) { // Adding in new user information
        // Connect to Database
        $connMgr = new ConnectionManager();
        $conn = $connMgr->getConnection();

        $nric=$User->getNric();
        $password=$User->getPassword();
        $password=password_hash($password,PASSWORD_DEFAULT);
        $name=$User->getName();
        $race=$User->getRace();
        $DOB=$User->getDOB();
        $sex=$User->getSex();
        $CountryOfBirth=$User->getCountryOfBirth();
        $address=$User->getAddress();
        $email=$User->getEmail();
        $contactNo=$User->getContactNo();

        // Prepare SQL
        $sql = "INSERT INTO USER (nric, password, name, race, DOB, sex, CountryOfBirth, address, email, contactNo) VALUES
        (:nric, :password, :name, :race, :DOB, :sex, :CountryOfBirth, :address, :email, :contactNo)"; 
        $stmt=$conn->prepare($sql);
        $stmt->bindParam(':nric',$nric,PDO::PARAM_STR);
        $stmt->bindParam(':password',$password,PDO::PARAM_STR);
        $stmt->bindParam(':name',$name,PDO::PARAM_STR);
        $stmt->bindParam(':race',$race,PDO::PARAM_STR);
        $stmt->bindParam(':DOB',$DOB,PDO::PARAM_STR);
        $stmt->bindParam(':sex',$sex,PDO::PARAM_STR);
        $stmt->bindParam(':CountryOfBirth',$CountryOfBirth,PDO::PARAM_STR);
        $stmt->bindParam(':address',$address,PDO::PARAM_STR);
        $stmt->bindParam(':email',$email,PDO::PARAM_STR);
        $stmt->bindParam(':contactNo',$contactNo,PDO::PARAM_STR);

        // Run Query
        $status = False;
        if ($stmt->execute()){
            $status=True;
        }

        // Close Query/Connection
        $stmt = null;
        $conn = null;
         
        return $status; // Boolean True or False
    }
    
   
}


?>