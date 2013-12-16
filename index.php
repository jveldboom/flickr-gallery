<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Flickr Gallery</title>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
</head>
<body>

	<div class="container">
	<?php
	require('gallery/class.flickr_gallery.php');
	$settings = array(
		'api_key'       => 'YOUR API KEY',
		'user_id'       => 'USER ID',
		'gallery_title' => 'Gallery',
		'gallery_url'   => '/',
		'assets_url'    => '/gallery',
		'per_page'      => 24,
		'indicator'     => true,
		'jquery'        => true,
		'bootstrap'     => true,
	);

	$gallery = new flickr_gallery($settings);
	//echo $gallery->getUserId('jpn');
	echo $gallery->display();
	?>
	</div>

</body>
</html>