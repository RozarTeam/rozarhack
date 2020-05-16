<?php
require_once 'common.php';
/**
 * 
 */
class FinancialPlannerDAO
{
    public function retrieveAll(){


        $sql = 'select * from financialplanner
                ';

        $connMgr = new ConnectionManager();       
        $conn = $connMgr->getConnection();
        
        $stmt = $conn->prepare($sql); 
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $results=[];
        while($row=$stmt->fetch()){
            $results = new FinancialPlanner($row['name']);
            $result []= $results; 
        }
        $stmt = null;
        $pdo = null;
        return $result;
    }


}

?>