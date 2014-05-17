<?php	
    require_once("visitors.php");
    //inite the class
    $db = your_db_handler;
    $visitor = new visitors($db);
    $info =  $_SERVER['HTTP_USER_AGENT'];    
    $remote_ip = $_SERVER['REMOTE_ADDR'];

	$r = $visitor->add_visitor($remote_ip,$info);
	if(!$r){
		echo "errors";
	}
	$visitor->get_record();
	$db->close();

?>
