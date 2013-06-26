<?php
include_once '../dbconfig.php';
if($_POST["data"])
{
$array = explode(',', $_POST["data"]);
$where_clause =$where_clause.''. ' `id`='.$array[0];
for ($i = 1, $l = count($array); $i < $l; $i++) {
	$where_clause =$where_clause.''. ' or `id`='.$array[$i].'';
}
$select= "DELETE FROM `order` where  ";
$select=$select.''.$where_clause.'';
mysql_query($select);
echo "Record Successfully Deleted  ";
mysql_close($con);
}
else {
	echo "No Record Selected";
}
?>