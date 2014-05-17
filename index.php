<?php
	 require_once("bk/include/functions.php");
    require_once("visitors.php");
    //inite the class
    $db = my_connection();
    $visitor = new visitors($db);
        
    $remote_ip = $_SERVER['REMOTE_ADDR'];

	$r = $visitor->add_visitor($remote_ip);
	if(!$r){
		echo "errors";
	}
	$visitor->get_record();
	$db->close();

?>
