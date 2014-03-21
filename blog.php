<?php
/*
 Template Name: blog-main
*/
?>
<?php get_header(); ?>
<section id="blog" class="updatable">

	<article>
		<div class="container">

			<div class="row">
				<div class="col-xs-12"><h2 class="pagetitle">The Dog Blog</h2></div>
			</div>
			
		    <div class="row post">
				<div class="col-md-9">	

		
<?php

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

query_posts(array(
	'post_type'      => 'post', 
	'paged'          => $paged,
	'posts_per_page' => 10
));


if ( have_posts() ) : ?>

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

<div class="pagination">	<?php my_pagination(); ?> </div>  </div>

<?php else : ?>

        <br/> </div>
	
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
		
		
		
