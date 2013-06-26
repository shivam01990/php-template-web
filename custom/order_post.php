<?php
ob_start();
/*code written by:Shivam Srivastava on 24-MAY-2013*/

include '../dbconfig.php';
include 'mail_functions.php';
$scale = $_POST['scale_hidden'].'';
$model = mysql_real_escape_string($_POST['model_hidden']);
$price = mysql_real_escape_string($_POST['price_hidden']);
$qty = mysql_real_escape_string($_POST['txtqty']);
$email = mysql_real_escape_string($_POST['txtemail']);

/*Shipping information*/
$companeyname_shipping = mysql_real_escape_string($_POST['txtCompaneyname']);
$first_name_shipping = mysql_real_escape_string($_POST['txtfirstname']);
$last_name_shipping = mysql_real_escape_string($_POST['txtlastname']);
$address1_shipping = mysql_real_escape_string($_POST['txtadderss1']);
$address2_shipping = mysql_real_escape_string($_POST['txtaddress2']);
$city_shipping = mysql_real_escape_string($_POST['txtcity']);
$state_shipping = mysql_real_escape_string($_POST['txtstate']);
$postalcode_shipping = mysql_real_escape_string($_POST['txtPostalcode']);
$country_shipping = mysql_real_escape_string($_POST['txtcountry']);
$phone_shipping = mysql_real_escape_string($_POST['txtphone']);

/*billing information*/
$firstname_billing = mysql_real_escape_string($_POST['txtfirstname_billing']);
$lastname_billing = mysql_real_escape_string($_POST['txtlastname_billing']);
$address1_billing = mysql_real_escape_string($_POST['txtaddress1_billing']);
$address2_billing = $_POST['txtaddressline2_billing'];
$city_billing = mysql_real_escape_string($_POST['txtcity_billing']);
$state_billing = mysql_real_escape_string($_POST['txtstate_billing']);
$postalcode_billing = mysql_real_escape_string($_POST['txtpostalcode_billing']);
$country_billing = mysql_real_escape_string($_POST['txtcountry_billing']);
$phone_billing = mysql_real_escape_string($_POST['txtphone_billing']);
$card_billing = mysql_real_escape_string($_POST['card']);
$card_fullname_billing = mysql_real_escape_string($_POST['txtnameofcard']);
$card_number_billing = mysql_real_escape_string($_POST['txtcardno']);
$exp_date_billing = mysql_real_escape_string($_POST['txtexpdate']);
$sequrity_code =mysql_real_escape_string($_POST['txtsequritycode']);
$unit_total = mysql_real_escape_string($_POST['txtunittolal']);

mysql_query("INSERT INTO `weborderform`.`order` (`scale`,`model`, `price`,    `qty`,  `email`,  `comaney_name_shipping`, `first_name_shipping`,     `last_name_shipping`, `address1_shipping`,    `address2_shipping`,    `city_shipping`,   `state_shipping`,    `postal_shipping`,`country_shipping`,`phone_shipping`,`first_name_billing`,   `last_name_billing`,    `address1_billing`,    `address2_billing`,   `city_billing`,   `state_billing`,     `postal_billing`,        `country_billing`,   `phone_billing`,    `credit_card_billing`,   `card_name_billing`,    `card_number_billing`,   `exp_date_billing`, `sequrity_code_billing`,`unit_total`)
	                                       VALUES ('$scale','$model',$price, '$qty','$email','$companeyname_shipping','$first_name_shipping','$last_name_shipping','$address1_shipping','$address2_shipping','$city_shipping','$state_shipping', '$postalcode_shipping','$country_shipping','$phone_shipping', '$firstname_billing', '$lastname_billing', '$address1_billing', '$address2_billing', '$city_billing', '$state_billing', '$postalcode_billing', '$country_billing', '$phone_billing', '$card_billing', '$card_fullname_billing', '$card_number_billing', '$exp_date_billing', '$sequrity_code ',$unit_total )", $con);

	                                      
$content=(string)EmailNotification1().'';
	                                       
sendMail('Thank you for your order!', $content,'here is your text',$email, $cc = array(), $bcc = array()) ;
	                                       
	                                       
mysql_close($con);
header("Location:../order_complete.html");

exit;
?>