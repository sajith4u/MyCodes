<?php

if (isset($_GET['tag']) && $_GET['tag'] != '') {
	// get tag
	$tag = $_GET['tag'];
    require_once 'include/DB_Functions.php';
	$db = new DB_Functions();	
	// check for tag type
	if ($tag == 'login') {
		// Request type is check Login
		
		$diseaseName = $db->getDiseaseName();
		
		$email = $_GET['email'];
		$password = $_GET['password'];		
	    $response["success"] = 1;
		$response["uid"] = $email;
		$response["user"]["name"] = $password;	
		$response["user"]["email"] = $email;  
        $response["response"] = "Successful Message";
		$response["diseaseName"] = $diseaseName['disease_name'];
		$response["OrchidType"] = $diseaseName['OrchidType'];
      	
		echo json_encode($response);		
		
	}  else {
		echo "Invalid Request";
	}
} else {
	echo "Access Denied";
}
?>
