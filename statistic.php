<?php
$pw = 'password';
if(!empty($_POST['pw']) && $_POST['pw']==$pw){
	
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
function my_connection(){
  $mysql_host = '';
  $mysql_user = '';
  $mysql_password = '';
  $mysql_database = '';
  
  @$db=new mysqli($mysql_host,$mysql_user,$mysql_password,$mysql_database);
  //set connection charset
  if(!$db->set_charset("utf8")){
       die('failed to set connection characterset');
  }
  
  if(mysqli_connect_error()){
    echo 'Cannot connect to database.';
    exit;
  }
  else{
    return $db;
  }
}
?>
