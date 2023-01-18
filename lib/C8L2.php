<?php
    // $data=getimagesize('../res/a.jpg');echo print_r($data,1).'<br>';
	$im=imagecreatefromjpeg('../res/a.jpg');
	header('Content-Type: image/jpeg');
	imagejpeg($im);
	// echo '<pre>'.print_r($im,1).'<pre><br>'; #can be after imagejpeg(), but not before
	imagedestroy($im);
	// echo imagesx($im).'<br>';
	// echo imagesy($im).'<br>';
	// imagejpeg($im,'../res/b.jpg');
?>