<div class="content" style="min-height:600px;">
	<?php
		if(have_posts()){
		 	the_post();
			 $meta = get_post_custom();
	  ?>
	<article>
		<h1><?php the_title(); ?></h1>
		<p><?php the_content();  ?></p>
		<?php 
			if (count($meta['price'])>0) {
				$price = $meta['price'][0];
				echo "<p>Price : <b>$price$</b></p>";
			}
			if(count($meta['img'])>0){
				echo "<div class='post_images'>";
				foreach ($meta['img'] as $img_id) {
					$img_small = wp_get_attachment_image($img_id,'thumbnail');
					$img_larg = wp_get_attachment_image_src($img_id,'large'); 
					echo "<a href='$img_larg[0]'>$img_small</a>"; 
				}
				echo "</div>";
			}			

		 ?>
	</article>
	<?php
		}else{
	?>
	<article>
		<h1>post not found</h1>
		<p>Are you sure there is a post here? I know a few good physcologists:d</p>
	</article>
	<?php
		}
	?>
</div>