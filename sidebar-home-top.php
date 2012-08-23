<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit; 
 
 $options = get_option('responsive_theme_options');
 //print '<pre>'; print_r($options); print '</pre>';
 
?>
        <div id="widgets" class="grid col-940 ">
        <?php responsive_widgets(); // above widgets hook ?>
            
            <?php if (!dynamic_sidebar('Content home top')) : ?>

			<div class="grid col-140">
				<a href="#">
					 <img src="<?php print get_stylesheet_directory_uri() ; ?>/icons/facebook-grande-icon.jpg" width="138px" height="100px" alt="Facebook">
					 <strong>Fan page</strong>
				</a>
			</div>

			<div class="grid col-140">
				<a href="#">
					 <img src="<?php print get_stylesheet_directory_uri() ; ?>/icons/wikipedia-grande-icon.jpg" width="138" height="100" alt="Wikipedia">
					 <strong>Wiki do NEXT</strong>
				</a>
			</div>

			<div class="grid col-140">
				<a href="#">
					<img src="<?php print get_stylesheet_directory_uri() ; ?>/icons/youtube-grande-icon.jpg" width="138" height="100" alt="Youtube">
					<strong>Canal do NEXT</strong>
				</a>
			</div>
			
			<div class="grid col-140">
				<div class="widget-wrapper">
					 <img src="<?php print get_stylesheet_directory_uri() ; ?>/icons/facebook-grande-icon.jpg" width="138" height="100" alt="Twitter">
					 <strong>Fan page</strong>
				</div>
			</div>
			
			<div class="grid col-140">
				<div class="widget-wrapper">
					 <img src="<?php print get_stylesheet_directory_uri() ; ?>/icons/facebook-grande-icon.jpg" width="138" height="100" alt="Twitter">
					 <strong>Fan page</strong>
				</div>
			</div>
			
			<div class="grid col-140 fit">
				<div class="widget-wrapper">
					 <img src="<?php print get_stylesheet_directory_uri() ; ?>/icons/facebook-grande-icon.jpg" width="138" height="100" alt="Twitter">
					 <strong>Fan page</strong>
				</div>
			</div>
			<?php endif; //end of main-sidebar ?>

        <?php responsive_widgets_end(); // after widgets hook ?>
        </div><!-- end of #widgets -->