<?php
/*
 Template Name: single blog post
*/
?>
<?php get_header(); ?>
<section id="blog" class="updatable">

	<article>
		<div class="container">
           
			
				<div class="col-md-11">

					<!-- post -->
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				    <div class="row">
			             <div class="col-xs-12">
				            <header><h2 class="pagetitle"><?php the_title('', ''); ?></h2></header>
				            <div><p><?php the_date(); ?><i class="icon-dot"></i>  by  <?php the_author(); ?>  </p></div>
				            <?php the_content(); ?>      
			             </div>
		            </div>
		            
		           
						    
						
					
					<?php endwhile; else: ?>
				    <div class="row">
			             <div class="col-xs-12">
			                   <!-- no posts -->
			              </div>
		            </div>
		           <?php endif; ?>
					<!-- end Post -->
					<div id="backtoblog">
						
                       <a href="/blog">
                       	<button type="button" class="btn btn-default">
                          <span class="glyphicon glyphicon-arrow-left"></span> Back to the Dog Blog
                        </button>
                       </a>
                    </div>
                    
                    
				</div>
				
		</div>
	</article>

</section>



</article>
</section>

<?php get_footer(); ?>		
		
		