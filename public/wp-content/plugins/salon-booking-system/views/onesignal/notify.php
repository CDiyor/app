<?php
// phpcs:ignoreFile WordPress.Security.EscapeOutput.OutputNotEscaped
/**
 * @var SLN_Plugin          $plugin
 * @var SLN_Wrapper_Booking $booking
 */

$default_template = SLN_Admin_SettingTabs_GeneralTab::getDefaultOnesignalNotificationMessage();
$template	  = $plugin->getSettings()->get('onesignal_notification_message') ? $plugin->getSettings()->get('onesignal_notification_message') : $default_template;

$message = str_replace(
    array(
	'[NAME]',
	'[SALON NAME]',
	'[DATE]',
	'[TIME]',
	'[PRICE]',
	'[BOOKING ID]',
    ),
    array(
	$booking->getDisplayName(),
	$plugin->getSettings()->getSalonName(),
	$plugin->format()->date($booking->getDate()),
	$plugin->format()->time($booking->getTime()),
	$booking->getAmount(),
	$booking->getId(),
    ),
    __(sprintf('%s', $template), 'salon-booking-system')
);

echo $message;