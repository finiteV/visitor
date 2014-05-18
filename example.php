<?php
    require_once("visitors.php");
    //inite the class
    $db = your_db_handler;
    $visitor = new visitors($db);
    $info =  $_SERVER['HTTP_USER_AGENT'];    
    $remote_ip = $_SERVER['REMOTE_ADDR'];
    $url=$_SERVER['PHP_SELF'];
	$r = $visitor->add_visitor($remote_ip,$info,$url);
	if(!$r){
		echo "errors";
	}
	$visitor->get_record();
	$db->close();

?>
