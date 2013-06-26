<?php
include_once '../dbconfig.php';
if($_GET["data"])
{
$array = explode(',', $_GET["data"]);
$where_clause =$where_clause.''. ' where `id`='.$array[0];
for ($i = 1, $l = count($array); $i < $l; $i++) {
	$where_clause =$where_clause.''. ' or `id`='.$array[$i].'';
}
$select= "SELECT * FROM `order` ";
$select=$select.''.$where_clause.'';
$result = mysql_query($select);
$num_row = mysql_num_rows($result);
$content = "scale\t";
$content.= "model\t";
$content.= "price\t";
$content.= "qty\t";
$content.= "email\t";
$content.= "company_name_shipping\t";
$content.="first_name_shipping\t";
$content.="last_name_shipping\t";
$content.="address1_shipping\t";
$content.="address2_shipping\t";
$content.="city_shipping\t";
$content.="state_shipping\t";
$content.="postal_shipping\t";
$content.="country_shipping\t";
$content.="phone_shipping\t";
$content.="first_name_billing\t";
$content.="last_name_billing\t";
$content.="address1_billing\t";
$content.="address2_billing\t";
$content.="city_billing\t";
$content.="state_billing\t";
$content.="postal_billing\t";
$content.="country_billing\t";
$content.="phone_billing\t";
$content.="credit_card_billing\t";
$content.="card_name_billing\t";
$content.="card_number_billing\t";
$content.="exp_date_billing\t";
$content.="sequrity_code_billing\t";
$content.="last_4_digits_on_card\t";
$content.="unit_total\n";
//$content.="time\n";




if($num_row > 0)
{
while($row = mysql_fetch_array($result))
{
$scale= (string)$row['scale']."\t";
$model = $row['model']."\t";
$price = $row['price']."\t";
$qty =$row['qty']."\t";
$email =$row['email']."\t";
$comaney_name_shipping =$row['comaney_name_shipping']."\t";
$first_name_shipping =$row['first_name_shipping']."\t";
$last_name_shipping =$row['last_name_shipping']."\t";
$address1_shipping =$row['address1_shipping']."\t";
$address2_shipping =$row['address2_shipping']."\t";
$city_shipping =$row['city_shipping']."\t";
$state_shipping =$row['state_shipping']."\t";
$postal_shipping =$row['postal_shipping']."\t";
$country_shipping =$row['country_shipping']."\t";
$phone_shipping =$row['phone_shipping']."\t";
$first_name_billing =$row['first_name_billing']."\t";
$last_name_billing =$row['last_name_billing']."\t";
$address1_billing =$row['address1_billing']."\t";
$address2_billing =$row['address2_billing']."\t";
$city_billing =$row['city_billing']."\t";
$state_billing =$row['state_billing']."\t";
$postal_billing =$row['postal_billing']."\t";
$country_billing =$row['country_billing']."\t";
$phone_billing = $row['phone_billing']."\t";
$credit_card_billing = $row['credit_card_billing']."\t";
$card_name_billing = $row['card_name_billing']."\t";
$card_number_billing = $row['card_number_billing']."\t";
$exp_date_billing = $row['exp_date_billing']."\t";
$sequrity_code_billing = $row['sequrity_code_billing']."\t";
$last_4_digitsofcard = substr($row['card_number_billing'], -4)."\t";
$unit_total = $row['unit_total']."\n";
//$time = $row['time']."\n";

$content.= $scale;
$content.= $model;
$content.= $price;
$content.= $qty;
$content.= $email;
$content.= $comaney_name_shipping;
$content.= $first_name_shipping;
$content.= $last_name_shipping;
$content.= $address1_shipping;
$content.= $address2_shipping;
$content.= $city_shipping;
$content.= $state_shipping;
$content.= $postal_shipping;
$content.= $country_shipping;
$content.= $phone_shipping;
$content.= $first_name_billing;
$content.= $last_name_billing;
$content.= $address1_billing;
$content.= $address2_billing;
$content.= $city_billing;
$content.= $state_billing;
$content.= $postal_billing;
$content.= $country_billing;
$content.= $phone_billing;
$content.= $credit_card_billing;
$content.= $card_name_billing;
$content.= $card_number_billing;
$content.= $exp_date_billing;
$content.= $sequrity_code_billing;
$content.= $last_4_digitsofcard;
$content.= $unit_total;
//$content.= $time;


}
mysql_free_result($result);
}
else
{
$content = "No Data Found !";
}


header("Content-Type: application/vnd.ms-excel");
$filename = "Excel_Export_Data.xls";
header("Content-Disposition: attachment;filename=\"$filename\"");
echo $content;
exit();
}
mysql_close($con);
?>