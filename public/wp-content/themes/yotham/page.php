<?php get_header(); ?>

<div id="content" class="span-18 last">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div id="post-<?php the_ID(); ?>" class="post single-post">
		  <?php edit_post_link('Modifier cette page', '<p>', '</p>'); ?>
			<h2 class="post-title-single"><?php the_title(); ?></h2>
                        
			<div class="post-entry">
				<?php the_content('<span class="more-link">Lire la suite &raquo;</span>'); ?>
				<?php link_pages('<p>Pages: ', '</p>', 'number'); ?>
			</div><!-- END POST-ENTRY  -->
		</div><!-- END POST -->

		<div class="navigation span-18 last">
			<div class="nav-left span-9"><?php previous_post_link('&laquo; %link') ?></div>
			<div class="nav-right span-9 last"><?php next_post_link('%link &raquo;') ?></div>
		</div><!-- END NAVIGATION -->

<?php endwhile; else : ?>

		<div id="post-error" class="post single-post">
			<h2 class="post-title-single">Not Found</h2>
			<div class="post-entry">
				<p>Désolé mais nous ne trouvons pas d'articles pour cette page.</p>
			</div><!-- END POST-ENTRY  -->
		</div><!-- END POST -->

<?php endif; ?>

</div><!-- END CONTENT -->


<?php get_footer(); ?>