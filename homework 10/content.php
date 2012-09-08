<div class="content">
	<?php
		if(have_posts()){
	?>
	<?php the_post(); ?>
	<article>
		<h1><?php the_title(); ?></h1>
		<p><?php the_content();  ?></p>
	</article>
	<?php
		}else{
	?>
	<article>
		<h1>post not found</h1>
		<p>Are you sure there is a post here? I know a few good pyscologists:d</p>
	</article>
	<?php
		}
	?>
</div>