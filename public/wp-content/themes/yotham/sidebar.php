<div id="sidebar" class="span-6">
	<ul>
<?php /* IF THIS IS THE FRONTPAGE */ if ( !is_home() || is_paged() ) { ?>
		<li id="home-link">
			<h2><a href="<?php echo get_settings('home'); ?>/" title="<?php bloginfo('name'); ?>">Accueil</a></h2>
		</li>
<?php } ?>
<?php /* FUNCTION FOR WIDGETS */ if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

<?php wp_list_pages('depth=1&sort_column=menu_order&title_li=' ) ?>

		<?php /* IF THIS IS THE FRONTPAGE */ if ( !is_404() ) { ?>
		
<?php } ?>
<?php endif; /* END FOR WIDGETS CALL */ ?>
	</ul>
</div>
