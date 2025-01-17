
<?php   // algolplus
    // phpcs:ignoreFile WordPress.Security.EscapeOutput.OutputNotEscaped
	$custom_url = $plugin->getSettings()->get('custom_feedback_url');
	$feedback_url = !empty($custom_url) ? $custom_url : home_url() . '?sln_customer_login=' . $customer->getHash() . '&feedback_id=' . $booking->getId();
?>

<tr>
    <td align="left" valign="top" style="font-size:18px;line-height:29px;color:#4d4d4d;font-weight:500;font-family: 'Avenir-Medium',sans-serif,arial;padding: 0 0 0 8px;" class="font1">
	<?php

	    $msg = $plugin->getSettings()->get('feedback_message');
	    $msg = esc_html__( sprintf('%s', $msg) , 'salon-booking-system');

	    $customer_name = implode(' ', array_filter(array(
		SLN_Enum_CheckoutFields::getField('firstname')->isHidden() ? '' : $booking->getFirstname(),
		SLN_Enum_CheckoutFields::getField('lastname')->isHidden() ? '' : $booking->getLastname(),
	    )));

	    $msg = str_replace(array('[NAME]', '[SALON NAME]', '[DATE]'), array($customer_name, $plugin->getSettings()->getSalonName(), $plugin->format()->date($booking->getDate())), $msg);
	    $msg = nl2br($msg);

	    echo $msg;
	?>
    </td>
</tr>
<tr>
    <td align="center" valign="top" height="22" style="font-size:1px;line-height:1px;">&nbsp;</td>
</tr>
<tr>
    <td align="left" valign="top" style="font-size:18px;line-height:29px;color:#4d4d4d;font-weight:500;font-family: 'Avenir-Medium',sans-serif,arial;padding: 0 0 0 8px;" class="font1">
	 <?php esc_html_e('Click on this button to send us your feedback', 'salon-booking-system'); ?> <br/>
	 <a href="<?php echo $feedback_url ?>"style="
	    text-transform: uppercase;
	    display: inline-block;
	    padding: 10px 20px;
	    margin-bottom: 0;
	    font-size: 12px;
	    font-weight: 400;
	    line-height: 1.42857143;
	    text-align: center;
	    white-space: nowrap;
	    vertical-align: middle;
	    -ms-touch-action: manipulation;
	    touch-action: manipulation;
	    cursor: pointer;
	    -webkit-user-select: none;
	    -moz-user-select: none;
	    -ms-user-select: none;
	    user-select: none;
	    background-image: none;
	    border: 1px solid transparent;
	    border-radius: 3px;
	    color: #fff;
	    background-color: #0d569f;
	    text-decoration: none;"><?php esc_html_e('Submit a review','salon-booking-system'); ?></a>
    </td>
</tr>
<tr>
    <td align="center" valign="top" height="22" style="font-size:1px;line-height:1px;">&nbsp;</td>
</tr>