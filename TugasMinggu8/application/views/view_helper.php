<!DOCTYPE html>
<html>
<head>
	<title>Heading Helper HTML</title>
</head>
<body>
<?php
		echo Heading("Hello CI",1);
		echo Heading("Hello CI",2);
		echo Heading("Hello CI",3);
		echo Heading("Hello CI",4);
		echo Heading("Hello CI",5);
		echo Heading("Hello CI",6);

		$gambar = array(
			'src' 	=> 'https://static.cdn-cdpl.com/source/17045/codeigniter_service_provide-image(700x350-crop)-image(700x350-crop).jpg',
			'alt' 	=> 'Codeigniter - CI',
			'class'	=> 'post_images',
			'width' => '300',
			'height'=> '300',
			'title' => 'Artesonraju Mountain'
		);
		echo img($gambar);
?>
</body>
</html>