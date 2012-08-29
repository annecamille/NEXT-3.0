<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit; 
 
 $options = get_option('responsive_theme_options');
 //print '<pre>'; print_r($options); print '</pre>';
 
?>
        <div id="widgets" class="grid col-940 ">
        <?php responsive_widgets(); // above widgets hook ?>
            
            <?php if (!dynamic_sidebar('Content home top')) : ?>

			<div class="grid col-220">
				<div class="widget-wrapper">
					 <img src="<?php print get_stylesheet_directory_uri() ; ?>/icons/facebook.jpg" alt="Facebook" title="Facebook">
				</div>
			</div>
			
			<div class="grid col-220">
				<div class="widget-wrapper">
					 <img src="<?php print get_stylesheet_directory_uri() ; ?>/icons/youtube.jpg" alt="Youtube" title="Youtube">
				</div>
			</div>
			
			<div class="grid col-220">
				<div class="widget-wrapper">
					 <img src="<?php print get_stylesheet_directory_uri() ; ?>/icons/wikipedia.jpg" alt="Wikipedia" title="Wikipédia">
				</div>
			</div>
			
			<div class="grid col-220 fit">
				<div class="widget-wrapper">
					 <img src="<?php print get_stylesheet_directory_uri() ; ?>/icons/facebook.jpg" alt="Facebook" title="Facebook">
				</div>
			</div>
			<?php endif; //end of main-sidebar ?>

        <?php responsive_widgets_end(); // after widgets hook ?>
        </div><!-- end of #widgets -->