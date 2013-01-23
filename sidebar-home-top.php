<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit; 
 
 $options = get_option('responsive_theme_options');
 //print '<pre>'; print_r($options); print '</pre>';
 
?>
	<div id="container" class="hfeed">
	   <div id="widgets" class="grid col-940 ">
        <?php responsive_widgets(); // above widgets hook ?>
            
            <?php if (!dynamic_sidebar('Content home top')) : ?>

			<div class="grid col-460">
				<div class="widget-wrapper">
					<div class="mosaic-block cover">
						<div class="mosaic-overlay" id="facebook"></div>
						<a href="http://www.facebook.com/next.icict.fiocruz" target="_blank" class="mosaic-backdrop">
							<div class="details">
								<h4>FACEBOOK</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet libero nisi. Aliquam pulvinar velit rutrum sem bibendum auctor. </p>
							</div>
						</a>
					</div>
				</div>
			</div>
			
			<div class="grid col-460 fit">
				<div class="widget-wrapper">
					<div class="mosaic-block cover">
						<div class="mosaic-overlay" id="youtube"></div>
						<a href="http://www.youtube.com/nextfiocruz" target="_blank" class="mosaic-backdrop">
							<div class="details">
								<h4>CANAL DO NEXT</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet libero nisi. Aliquam pulvinar velit rutrum sem bibendum auctor. </p>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="clr"></div>
			<div class="grid col-460">
				<div class="widget-wrapper">
					<div class="mosaic-block cover">
						<div class="mosaic-overlay" id="wikipedia"></div>
						<a href="http://www.next.icict.fiocruz.br/wiki/" target="_blank" class="mosaic-backdrop">
							<div class="details">
								<h4>WIKI DO NEXT</h4>
								<p>O Wiki do Next &eacute; um projeto que visa criar um ambiente de colabora&ccedil;&atilde;o coletiva entre pesquisadores e experimentadores de Tecnologias Interativas. </p>
							</div>
						</a>
					</div>
				</div>
			</div>
			
			<div class="grid col-460 fit">
				<div class="widget-wrapper">
					<div class="mosaic-block cover">
						<div class="mosaic-overlay" id="moodle"></div>
						<a href="http://www.moodle.icict.fiocruz.br/" target="_blank" class="mosaic-backdrop">
							<div class="details">
								<h4>MOODLE</h4>
								<p>Veja os cursos a dist&acirc;ncia que o NEXT oferece utilizando a plataforma Moodle. </p>
							</div>
						</a>
					</div>
				</div>
			</div>
			<?php endif; //end of main-sidebar ?>

        <?php responsive_widgets_end(); // after widgets hook ?>
        </div></div><!-- end of #widgets e #container -->