<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<title>Gallery</title>
	<link rel="stylesheet" type="text/css" href="reset.css" />
	<link rel="stylesheet" type="text/css" href="gallery.css" />
	<script type="text/javascript" src="zepto.js"></script>
	<script type="text/javascript" src="gallery.js"></script>
</head>
<body>
	<div class="container">
		<div class="gallery">
			<?php
				$images_path = './images';
				$include_types = 'jpg,jpeg,png,gif';

				$include_types=explode(',',$include_types);
				$images = scandir($images_path);
				
				foreach ($images as $img) {
					$exp = explode('.', $img);
					$img_type = strtolower(end($exp));
					if(in_array($img_type, $include_types))
						echo "<a href='$images_path/$img'><img src='$images_path/small/$img' alt='my gallery' /></a>";
				}
			?>
			
		</div>
	</div>
</body>
</html>
