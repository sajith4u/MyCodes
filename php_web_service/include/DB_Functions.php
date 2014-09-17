<?php

class DB_Functions {

    private $db;
    //put your code here
    // constructor
    function __construct() {
        require_once 'DB_Connect.php';
        // connecting to database
        $this->db = new DB_Connect();
        $this->db->connect();
    }

    // destructor
    function __destruct() {
        
    }

   

    /**
     * Get user by disease_name
     */
    public function getDiseaseName() {
        $result = mysql_query("SELECT * FROM test") or die(mysql_error());
        // check for result 
        $no_of_rows = mysql_num_rows($result);
        if ($no_of_rows > 0) {
            $result = mysql_fetch_array($result);
            $orchid_type = $result['OrchidType']; 
            $disease_name = $result['disease_name']; 			
            return $result;
        } else {
            // user not found
            return false;
        }
    }



}

?>
