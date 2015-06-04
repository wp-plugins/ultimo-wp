<div class="footer-732">

	<div class="footer-732-logo">
		<a href="http://codecanyon.net/user/732">
			<img src="<?php echo $this->get_plugin_url(); ?>assets/img/author.png" alt="<?php _e('Check out our premium plugins!', $this->text_domain); ?>">
		</a>
	</div>

	<ul class="footer-732-menu">
	<?php
		// Create footer menu
		// run your filters here, if needed
		$this->createFooterMenu();
	?>

	<?php foreach($this->footerMenu as $url => $text) : ?>
		<li>
			<?php if (is_string($url)) : ?>
				<a href="<?php echo $url; ?>"><?php echo $text; ?></a>
			<?php else : ?>
				<span><?php echo $text; ?></span>
			<?php endif; ?>
		</li>
	<?php endforeach; ?>
	</ul>

</div>