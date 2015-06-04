<?php
// Get active user
$user = wp_get_current_user(); 

// Get the image to be used
$image = $this->getField('background-image')
  ? $this->getField('background-image')
  : $this->getAsset('bg.jpg');
?>

<div id="parallax-main-block" class="parallax-container">
  <div class="parallax material-admin-primary-color-bg">
    <img class="parallax-img" src="<?php echo $image; ?>">
    
    <div id="parallax-content">
      <div class="container"></div>
    </div>
    
  </div>
  
  <a href="<?php echo get_edit_user_link($user->ID); ?>" >
    <div id="mwp-user-card" class="tooltiped" data-tooltip="<?php _e('Edit your profile', $this->textDomain); ?>" data-position="bottom">
      <div class="user-card-avatar">
        <?php echo get_avatar($user->ID, 60); ?>
      </div>
      <div class="user-card-info">
        <div class="user-card-name"><?php echo $user->display_name; ?></div>
        <div class="user-card-email"><?php echo $user->user_email; ?></div>
      </div>
    </div>
  </a>
</div>