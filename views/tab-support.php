<h3><?php _e('How to get Support?', $this->text_domain); ?></h3>
<p><?php _e('We know how important it is to our customers to have their questions and issues addressed as soon as possible. We currently offer support using the comments section of our items at CodeCanyon.', $this->text_domain); ?></p>

<p><?php printf(__('To get support to this plugin - <strong>%s</strong> -, click in the button below to post your comment:', $this->text_domain), $this->get_plugin_info('Name')); ?></p>

<p>
    <a class="button button-primary" href="<?php echo $this->get_plugin_info('PluginURI'); ?>"><?php _e('Go to the comments section', $this->text_domain); ?></a>
</p>
