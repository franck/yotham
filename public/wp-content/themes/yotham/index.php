<?php get_header(); ?>

<div id="content" class="span-18 last">
  
  
  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

  		<div id="post-<?php the_ID(); ?>" class="post span-18 last">
  			<div class="post-header span-3 colborder">
  				<h3 class="post-date"><?php the_time('d M Y') ?></h3>
  				<?php edit_post_link('Modifié', '<p class="post-edit">', '</p>'); ?>
  			</div><!-- END POST-FOOTER -->
  			<div class="post-container span-14 last">
  				<div class="post-content">
  					<h2 class="post-title"><a href="<?php the_permalink() ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
  					<div class="post-entry">
  						<?php the_content('<span class="more-link">Lire la suite &raquo;</span>'); ?>



  						<?php link_pages('<p style="margin:-1em 0 0 0;"><strong>Pages: ', '</strong></p>', 'number'); ?>
  					</div><!-- END POST-ENTRY -->
  				</div><!-- END POST-CONTENT  -->
  			</div><!-- END-CONTAINER -->
  			
  		</div><!-- END POST -->

  <?php endwhile; ?>

  		<div class="navigation">
  			<div class="nav-left"><?php next_posts_link('&laquo; Older posts') ?></div>
  			<div class="nav-right"><?php previous_posts_link('Newer posts &raquo;') ?></div>
  		</div><!-- END NAVIGATION -->

  <?php else : ?>

  		<div id="post-error" class="post single-post">
  			<h2 class="post-title-single">Not Found</h2>
  			<div class="post-entry">
  				<p>Désolé mais nous ne trouvons pas d'articles pour cette page.</p>
  			</div><!-- END POST-ENTRY  -->
  		</div><!-- END POST -->

  <?php endif; ?>
  
		
</div><!-- END CONTENT -->

 
 
<?php get_footer(); ?>