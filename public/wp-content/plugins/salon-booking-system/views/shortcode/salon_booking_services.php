<?php
// phpcs:ignoreFile WordPress.Security.EscapeOutput.OutputNotEscaped
if(!$data['services']) return;
$plugin = SLN_Plugin::getInstance();
?>
<section class="sln-datashortcode sln-datashortcode--services">	
	<div class="sln-datalist <?php 
	if(isset($data['styled'])) echo 'sln-datalist--styled '; 
	if(isset($data['columns'])) echo 'sln-datalist--'.esc_html($data['columns']).'cols ';
	?>">
	<?php 
	$display = $data['display'];
	foreach ($data['services'] as $service) {
		$thumb     = has_post_thumbnail($service->getId()) ?get_the_post_thumbnail(
        	$service->getId(),
        	'thumbnail'
    	) : '';	
	?>
		<div class="sln-datalist__item">
			<?php if(!$display || in_array('name',$display)){ ?>
			<h3 class="sln-datalist__item__name"><?php echo esc_html($service->getName()) ?></h3>
			<?php } ?>
			<?php if(!$display || in_array('image',$display)){ ?>
			<div class="sln-datalist__item__image">
				<?php echo $thumb; ?>
			</div>
			<?php } ?>
			<?php if(!$display || in_array('description',$display)){ ?>
			<p class="sln-datalist__item__description">
				<?php echo $service->getContent(); ?>
			</p>
			<?php } ?>
			<div class="sln-datalist__item__info">
				<?php if(!$display || in_array('duration',$display)){ ?>
				<p class="sln-datalist__item__duration">
					<span><?php echo esc_html__('Duration', 'salon-booking-system')?>: </span>
					<strong><?php echo $service->getTotalDuration()->format('H:i') ?></strong>
				</p>
				<?php } ?>
				<?php if(!$display || in_array('price',$display)){ ?>
				<p class="sln-datalist__item__price">
					<span><?php esc_html_e('Price','salon-booking-system');?>: </span>
					<strong><?php echo $plugin->format()->moneyFormatted($service->getPrice()) ?></strong>
				</p>
				<?php } ?>
			</div>
			<div class="sln-datalist__item__actions">
				<?php $booking_link = add_query_arg(
					array(
						'service' => $service->getId(),
						'skip_service_selection' => $data['skip_service_selection'],
						'secondary' => $service->isSecondary() ? '1' : '0',
					),
					$data['booking_url']
				);
				?>
				<a href="<?php 	echo esc_html($booking_link) ?>" class="sln-datalist__item__cta"><?php esc_html_e('Book now','salon-booking-system'); ?></a>
			</div>
		</div>
	<?php } ?>			
		<div class="sln-datalist_clearfix"></div>
	</div>
</section>
