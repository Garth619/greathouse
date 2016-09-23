<div class="sidebar_wrapper blog">
		
		<div id="sidebar">
			
		<ul>	
		<?php wp_list_categories();?>
		</ul>
			
		<ul>
			<li class="recent">Recent Posts</li>
			<?php
				$recent_posts = wp_get_recent_posts();
				foreach( $recent_posts as $recent ){
					echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
				}
				wp_reset_query();
			?>
		</ul>
				


	
		</div><!-- sidebar -->
		
	</div><!-- sidebar_wrapper -->