<?php
/*
 Template Name: archive
*/
?>
<?php get_header(); ?>
<section id="blog" class="updatable">

	<article>
		<div class="container">

			<div class="row">
				<div class="col-xs-12">
					<h2 class="pagetitle">
						<?php
              				  $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
				              if ($term) {
				                echo $term->name;
				              } elseif (is_day()) {
				                printf(__('Daily Archives: %s', 'roots'), get_the_date());
				              } elseif (is_month()) {
				                printf(__('Monthly Archives: %s', 'roots'), get_the_date('F Y'));
				              } elseif (is_year()) {
				                printf(__('Yearly Archives: %s', 'roots'), get_the_date('Y'));
				              } elseif (is_author()) {
				                global $post;
				                $author_id = $post->post_author;
				                printf(__('Author Archives: %s', 'roots'), get_the_author_meta('user_nicename', $author_id));
				              } else {
				                single_cat_title();
				              }
            			?>
                    </h2>
				</div>
			</div>
			
		    <div class="row post">
				<div class="col-md-9">	

		



				<?php if ( have_posts() ) : ?>
				
				<?php while ( have_posts() ) : the_post(); ?>
				
					<!-- start each post -->
					<div class="eachpost">
						<div class="title">
							<div class="centered"><div><h3><a href="<?php the_permalink();?>"><?php the_title() ;?></a></h3></div></div>
							<div class="clearfix"></div>
							<p><?php the_date(); ?><i class="icon-dot"></i>  by  <?php the_author(); ?>  </p>
						</div>	

						
							<?php the_post_thumbnail(' thumbnail pull-left'); ?>
						    <?php the_excerpt(); ?>

									<a href="<?php the_permalink();?>" class="btn btn-default">Read More</a>
					
					</div>
					<!-- end each post -->


					<?php endwhile; ?>
					</div>

					<?php else : ?>
				  		<br/> 
				    </div>
					<?php endif; ?>		
						

				<aside class="col-md-3">	
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-12">	
							<?php get_sidebar('blog'); ?>	
						</div>						
					</div>
				</aside>
		
		</div>
	</article>

</section>
<?php get_footer(); ?>		
		
		
		
