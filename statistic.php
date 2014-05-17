<?php
$pw = 'jf';
if(!empty($_POST['pw']) && $_POST['pw']==$pw){
	require_once("bk/include/functions.php");
    require_once("visitors.php");
    //inite the class
    $db = my_connection();
    $visitor = new visitors($db);
        
	$visitor->get_record();
	$db->close();
}
else{

?>
<form action='statistic.php' method='post' enctype='utf8'>
	<label>Please input verfication password:</label>
	<input type='text' name='pw' >
	<input type='submit' value='submit'>
</form>
<?php	
}
?>
