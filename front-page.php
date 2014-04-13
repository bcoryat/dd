<?php get_header(); ?>


<div id="content">
	<section id="home">
		
		<!-- Jumbotron image -->
		<article class="bannercontainer">
			<div id="hm-main">
				
						<div id="hm-banner">
							<p>
								<span>Join the fun!</span>
								Daycare<i class="icon-star"></i>Training<i class="icon-star"></i>Socials	
							</p>		
						 </div>																
			</div>
		</article>
		<!-- End Jumbotron image -->

		


		

		<!-- begin Announcements -->
		<article class="announcements">
			<div class="container">	
				<div class="row">
					<div class="col-xs-12"><h2 class="header">Announcements</h2></div>
				</div>
				

				<div class="row">
				
					<div class="col-md-9">
						<?php dynamic_sidebar('home'); ?>

						
					</div>
					
						<div class="col-md-3">
						<img src="<?php bloginfo('template_url')?>/img/announcements.jpg" alt="Announcements" class="img-responsive thumbnail thumb">
					</div>
					
				</div>
				

			</div>
		</article>
		<!-- end Announcements -->

     
     
       <!-- begin Dog Blog  -->
		<article class="dogBlog">
			<div class="container">
				
				<div class="row">
					<div class="col-xs-12"><h2 class="header">From the Dog Blog</h2></div>
				</div>
				
				<?php
                      $args = array( 'posts_per_page' => 1, 'post_type' => 'post' , 'offset' => 0);
                      $myposts = get_posts( $args );
                      foreach ( $myposts as $post ) : setup_postdata( $post ); 
					  $attr = array('class'	=> "thumbnail pull-left",
	                                'alt'	=> "latest blog post");
                      
                ?>
                
	
							

				<div class="row">
				
						
					    
					    <div class="col-xs-12">
					    	
					    	  
						       <h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
						       <p><?php the_date(); ?><i class="icon-dot"></i>  by  <?php the_author(); ?>  </p>
						       <p><?php the_post_thumbnail('medium',$attr); ?>
						        <?php the_excerpt(); ?>
						       <a href="<?php the_permalink();?>" class="btn btn-default">Read More</a>
						
				        </div>
						
					</div>
					<?php endforeach;?> 
					
				 </div>

			</div>     
		</article>
		<!-- end Dog Blog -->

	</section>
</div>

<?php get_footer(); ?>