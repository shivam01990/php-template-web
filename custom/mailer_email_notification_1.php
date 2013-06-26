<?php
include_once "../dbconfig.php";
include_once "mail_functions.php";

$array = explode(',', $_POST["data"]);
$arrayemailcc = array();
$content = (string)EmailNotification1() . '';
$content= str_replace("â","", $content);
for ($i = 0, $l = count($array); $i < $l; $i++) {
	$result = mysql_query("SELECT *FROM `order`WHERE `id` =" . $array[$i]. "");
	while ($row = mysql_fetch_array($result)) 
	{
		//echo $row['email'];
		//echo "<br>";
		$arrayemailcc[] = $row['email'];
	}
}

//echo implode(',', $arrayemailcc);
$to_mail="preorder@tonkinreplicas.com";
//$to_mail="shivam1.srivastava@laitkor.com";
sendMail('Thank you for your order!', $content, 'here is your text',$to_mail, $arrayemailcc, $bcc = array());
echo"Mail Successfully Send";
mysql_close($con);
?>