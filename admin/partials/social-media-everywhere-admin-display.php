<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       www.luiscabre.com
 * @since      1.0.0
 *
 * @package    Social_Media_Everywhere
 * @subpackage Social_Media_Everywhere/admin/partials
 */
?>

<div class="container">
<h2> Social Media Everywhere </h2>
<h5> This is a test plugin </h5>
  <form method="post" action="" >
  <?php 
    settings_fields('groupsocialmedia');
    do_settings_sections('groupsocialmedia');

  ?>
    <div class="form-group">
      <label for="facebook">Facebook:</label>
      <input type="text" class="form-control" id="facebook" placeholder="Facebook" value="<?php echo get_option('facebook'); ?>" name="facebook" >
    </div>
    <div class="form-group">
      <label for="twitter">Twitter:</label>
      <input type="text" class="form-control" id="twitter" placeholder="Twitter" value="<?php echo get_option('twitter'); ?>" name="twitter">
    </div>
    <div class="form-group">
      <label for="instagram">Instagram:</label>
      <input type="text" class="form-control" id="instagram" placeholder="instagram" value="<?php echo get_option('instagram'); ?>" name="instagram">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>


<!-- This file should primarily consist of HTML with a little bit of PHP. -->
