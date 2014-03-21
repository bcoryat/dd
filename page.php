<?php get_header(); ?>
<section>
	<article class="container">

	  	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	  	<div class="row">
			<div class="col-xs-12">
				<header><h1 class="pagetitle"><?php the_title('', ''); ?></h1></header>
			</div>
		</div>
		
		<div class="row">
			<div class="col-xs-12">	
				<?php the_content(); ?>       
		<?php endwhile; else: ?>
			<p>
				<?php _e('Sorry, this page does not exist.'); ?>
			</p>
		<?php endif; ?>
			</div>
		</div>


	</article>
</section>

<?php get_footer(); ?>

