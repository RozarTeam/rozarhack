<?php
require_once 'common.php';
/**
 * 
 */
class AdultDAO
{
    public function add($username, $name, $date){


        $sql = 'INSERT INTO adult (username, name, date)
                VALUES (:username, :name, :date)
                ';

        $connMgr = new ConnectionManager();       
        $conn = $connMgr->getConnection();
        
        $stmt = $conn->prepare($sql); 
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':date', $date, PDO::PARAM_STR);
        
        $isAddOK = False;
        if ($stmt->execute()) {
            $isAddOK = True;
        }
        return $isAddOK;
    }


}

?>