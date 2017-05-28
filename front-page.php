<?php get_header(); ?>


<div id="content">
	<section id="home">
		
		<!-- Jumbotron image -->
		<article class="bannercontainer">
			<div id="hm-main">
				
						<!-- <div id="hm-banner">
							<p>
								<span>Join the fun!</span>
								Daycare<i class="icon-star"></i>Training<i class="icon-star"></i>Socials	
							</p>		
						 </div>	-->															
			</div>
		</article>
		<!-- End Jumbotron image -->

		<!-- DD description -->
		<!--<article class="dddesc">
        	<div class="container">	
        	  <div class="row">
        	  	<div class="col-md-6 col-md-offset-3 text-center">
		         <p class="lead  text-center">Doggedly Devoted is dog daycare that is thoughtfully designed for your dog's safety, stimulation, and socialization. 
		         We are professionally trained dog play specialists who take exceptional care of your canine family member.</p>
	            </div>
	          </div>
        </article>-->

		<!-- end DD descriptions -->


       <!-- begin Dog Blog  -->
		<article class="dogBlog">
			<div class="container">
				
				<div class="row">   
				<?php
                      $args = array( 'posts_per_page' => 2, 'post_type' => 'post' , 'offset' => 0);
                      $myposts = get_posts( $args );
                      foreach ( $myposts as $post ) : setup_postdata( $post ); 
					  $attr = array('class'	=> "thumbnail pull-left",
	                                'alt'	=> "latest blog post");
                      
                ?>
                
	
							

				  
					    <div class="col-md-6 dogblogteaser">
						       <h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
						       <p><?php the_date(); ?></p>
						       <p><?php the_post_thumbnail('medium',$attr); ?>
						        <?php the_excerpt(); ?>
						       <a href="<?php the_permalink();?>" class="btn btn-default">Read More</a>			
				        </div>
						
				
			    <?php endforeach;?> 
					
				</div> 

			</div>     
		</article>
		<!-- end Dog Blog -->

	</section>
</div>

<?php get_footer(); ?>
