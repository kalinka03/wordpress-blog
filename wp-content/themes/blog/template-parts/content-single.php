<article id="post-<?php the_ID(); ?>" <?php post_class('blog_post'); ?> >
					<h4> <?php the_title(); ?> </a> </h4>
						
						<div class="blog_category">
							<ul> 
								<li> <?php the_category(' ,');?> </li>

							</ul>
						</div>	
						
						<div class="blog_text">
							<ul>
								<li> | </li>
								<li><?php esc_html_e(' Post By', 'wpblog'); ?> : <?php the_author_posts_link(); ?>  </a> </li>
								<li> | </li>
								<li>  <?php esc_html_e('On', 'wpblog'); ?> : <?php the_time('j F Y'); ?> </li>
							</ul>
						</div>
						
						
						<div class="blog_post_img">
							 <?php the_post_thumbnail()  ?>
						</div>
						
						<p><?php the_content(); ?> </p>
					
						
						
					
				</article>