<!DOCTYPE html>
<head>
<style type="text/css">
table{
	width: 1024px;
  border-collapse:collapse;
}
tr{
  border-bottom:1px solid  blue;
}
th{
  text-align:center;
  background:#32CD32;
  border-bottom:2px solid #1874CD;
}
td{
  padding:3px;
  text-align:left;
}
</style>
</head>

<body>
<?php
$pw = 'your password';
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
</body>
