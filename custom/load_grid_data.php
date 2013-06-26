<?php
include_once '../dbconfig.php';
?>

	<table class="grid_" cellspacing="0 px">
		<tr>
			<td> &nbsp; </td>
			<td colspan="5"> Product Information </td>
			<td colspan="10"> Shipping Location </td>
			<td colspan="9"> BIlling Information</td>
			<td colspan="6"> PAYMENT INFORMATION</td>
			<td>Charge&nbsp;Information</td>
		</tr>
		<tr>
		<td class="SecondRow_odd">
		<span id="clickall">&nbsp;Check&nbsp;All&nbsp;</span>
		</td>
		<td rowspan="2" class="SecondRow_even">
		&nbsp;&nbsp;&nbsp;&nbsp;SCALE&nbsp;&nbsp;&nbsp;&nbsp;
		</td>
		<td rowspan="2" class="SecondRow_odd">
		&nbsp;&nbsp;&nbsp;&nbsp;MODEL&nbsp;&nbsp;&nbsp;&nbsp;
		</td>
		<td rowspan="2" class="SecondRow_even">
		&nbsp;&nbsp;&nbsp;&nbsp;PRICE&nbsp;&nbsp;&nbsp;&nbsp;
		</td>
		<td rowspan="2" class="SecondRow_odd">
		&nbsp;&nbsp;&nbsp;&nbsp;QTY&nbsp;&nbsp;&nbsp;&nbsp;
		</td>
		<td rowspan="2" class="SecondRow_even">
		&nbsp;CAT&nbsp;EMAIL&nbsp;
		</td>
		<td rowspan="2" class="SecondRow_odd">
		&nbsp;&nbsp;&nbsp;&nbsp;COMPANY&nbsp;NAME&nbsp;&nbsp;&nbsp;&nbsp;
		</td>
		<td rowspan="2" class="SecondRow_even">
		&nbsp;&nbsp;&nbsp;&nbsp;FIRST&nbsp;NAME&nbsp;&nbsp;&nbsp;&nbsp;
		</td>
		<td rowspan="2" class="SecondRow_odd">
		&nbsp;&nbsp;&nbsp;&nbsp;LAST&nbsp;NAME&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td rowspan="2" class="SecondRow_even">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADDRESS&nbsp;LINE&nbsp;1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td rowspan="2" class="SecondRow_odd">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADDRESS&nbsp;LINE&nbsp;2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td rowspan="2" class="SecondRow_even">
		&nbsp;&nbsp;&nbsp;&nbsp;CITY&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td rowspan="2" class="SecondRow_odd">
		&nbsp;&nbsp;&nbsp;&nbsp;STATE&nbsp;/&nbsp;PROVINCE&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td rowspan="2" class="SecondRow_even">
		&nbsp;&nbsp;&nbsp;&nbsp;POSTAL&nbsp;CODE&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td rowspan="2" class="SecondRow_odd">
		&nbsp;&nbsp;&nbsp;&nbsp;COUNTRY&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td rowspan="2" class="SecondRow_even">
		&nbsp;&nbsp;&nbsp;&nbsp;PHONE&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td rowspan="2" class="SecondRow_odd">
		&nbsp;&nbsp;&nbsp;&nbsp;FIRST&nbsp;NAME&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td rowspan="2" class="SecondRow_even">
		&nbsp;&nbsp;&nbsp;&nbsp;LAST&nbsp;NAME&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td rowspan="2" class="SecondRow_odd">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADDRESS&nbsp;LINE&nbsp;1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td rowspan="2" class="SecondRow_even">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADDRESS&nbsp;LINE&nbsp;2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td rowspan="2" class="SecondRow_odd">
		&nbsp;&nbsp;&nbsp;&nbsp;CITY&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td rowspan="2" class="SecondRow_even">
		&nbsp;&nbsp;&nbsp;&nbsp;STATE/&nbsp;PROVINCE&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td rowspan="2" class="SecondRow_odd">
		&nbsp;&nbsp;&nbsp;&nbsp;POSTAL&nbsp;CODE&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td rowspan="2" class="SecondRow_even">
		&nbsp;&nbsp;&nbsp;&nbsp;COUNTRY&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td rowspan="2" class="SecondRow_odd">
		&nbsp;&nbsp;&nbsp;&nbsp;PHONE&nbsp;NUMBER&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td rowspan="2" class="SecondRow_even">
		&nbsp;&nbsp;&nbsp;&nbsp;CREDIT&nbsp;CARD&nbsp;TYPE&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td rowspan="2" class="SecondRow_odd">
		&nbsp;&nbsp;&nbsp;&nbsp;NAME&nbsp;ON&nbsp;CARD&nbsp;&nbsp;&nbsp;&nbsp;</td>
		 <td rowspan="2" class="SecondRow_even">
            CREDIT&nbsp;CARD&nbsp;NO.</td>
        <td rowspan="2" class="SecondRow_odd">
           &nbsp;&nbsp;&nbsp;&nbsp;EXP.&nbsp;DATE&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td rowspan="2" class="SecondRow_even">
            &nbsp;&nbsp;&nbsp;&nbsp;SECURITY&nbsp;CODE&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td rowspan="2" class="SecondRow_odd">
            &nbsp;&nbsp;&nbsp;&nbsp;LAST&nbsp;4&nbsp;DIGITS&nbsp;OF&nbsp;CARDS&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td rowspan="2" class="SecondRow_even">
            &nbsp;&nbsp;&nbsp;&nbsp;UNIT&nbsp;TOTAL&nbsp;&nbsp;&nbsp;&nbsp;</td>
        </tr>

		<tr>
		<td class="SecondRow_odd">
		<span id="uncheckall">&nbsp;Uncheck&nbsp;All&nbsp;</span>
		</td>
		</tr>
		<?php

$result = mysql_query("SELECT * FROM `order` Order by `id` DESC",$con);

while($row = mysql_fetch_array($result))
{

		?>
		<tr>
		<td>
		<input id="Checkbox<?php echo $row['id']; ?>" name="selectrow" class="selectrow" value="<?php echo $row['id']; ?>" type="checkbox" />
		</td>
		<td>
		<?php echo $row['scale']; ?>
		</td>
		<td>
		<?php echo $row['model']; ?>
		</td>
		<td>
		<?php echo $row['price']; ?>
		</td>
		<td>
		<?php echo $row['qty']; ?>
		</td>
		<td>
		<?php echo $row['email']; ?>
		</td>
		<td>
		<?php echo $row['comaney_name_shipping']; ?>
		</td>
		<td>
		<?php echo $row['first_name_shipping']; ?>
		</td>
		<td>
		<?php echo $row['last_name_shipping']; ?>
		</td>
		<td>
		<?php echo $row['address1_shipping']; ?>
		</td>
		<td>
		<?php echo $row['address2_shipping']; ?>
		</td>
		<td>
		<?php echo $row['city_shipping']; ?>
		</td>
		<td>
		<?php echo $row['state_shipping']; ?>
		</td>
		<td>
		<?php echo $row['postal_shipping']; ?>
		</td>
		<td>
		<?php echo $row['country_shipping']; ?>
		</td>
		<td>
		<?php echo $row['phone_shipping']; ?>
		</td>
		<td>
		<?php echo $row['first_name_billing']; ?>
		</td>
		<td>
		<?php echo $row['last_name_billing']; ?>
		</td>
		<td>
		<?php echo $row['address1_billing']; ?>
		</td>
		<td>
		<?php echo $row['address2_billing']; ?>
		</td>
		<td>
		<?php echo $row['city_billing']; ?>
		</td>
		<td>
		<?php echo $row['state_billing']; ?>
		</td>
		<td>
		<?php echo $row['postal_billing']; ?>
		</td>
		<td>
		<?php echo $row['country_billing']; ?>
		</td>
		<td>
		<?php echo $row['phone_billing']; ?>
		</td>
		<td>
		<?php echo $row['credit_card_billing']; ?>
		</td>
		<td>
		<?php echo $row['card_name_billing']; ?>
		</td>
		<td>
	    <?php   echo $row['card_number_billing']; ?></td>
	    <td>
	      <?php echo $row['exp_date_billing'];  ?></td>
	    <td>
	        <?php echo $row['sequrity_code_billing'];  ?></td>
	    <td>
	        <?php echo substr($row['card_number_billing'], -4); ?></td>
	    <td>
	        <?php echo $row['unit_total']; ?></td>
		</tr>

		<?php } ?>
	</table>


<?php
mysql_close($con);
?>