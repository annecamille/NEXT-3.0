<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Front Content Template
 *
   Template Name:  Front Page
 *
 * @file           front-page.php
 * @package        NEXT 3.0
 * @author         Anne Camille 
 * @copyright      2012
 * @version        Release: 1.0
 * @filesource     wp-content/themes/NEXT-3.0/front-page.php
 */
?>
<?php get_header(); ?>
<div class="grid col-460">
	<?php if (function_exists('nivoslider4wp_show')) { nivoslider4wp_show(); } ?>
</div>
<div class="grid col-460 fit">
	<?php get_sidebar('home-top'); ?>
</div>



</div></div><!-- FIM DA DIV CONTAINER--><?php get_sidebar('home'); ?><div id="container" class="hfeed">


		
    <div id="content-full" class="grid col-940">
    

		
		
		
		
		
	</div><!-- end of #content-full -->

<?php get_footer(); ?>