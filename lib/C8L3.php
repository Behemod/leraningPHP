<?php
    $im=imagecreatetruecolor(500,500);
    $color=imagecolorallocate($im,100,150,20);
    imagesetthickness($im,3);
    imagerectangle($im,10,10,150,200,$color);
    imagefilledrectangle($im,170,10,250,200,$color);
    imageline($im,10,220,10,300,imagecolorallocate($im,255,0,0));
    imagearc($im,50,220,100,100,30,90,$color);
    $points=[];$points[]=100;$points[]=200;$points[]=150;$points[]=220;$points[]=250;$points[]=270;$points[]=350;$points[]=120;$points[]=250;$points[]=20;
    imagepolygon($im,$points,imagecolorallocate($im,255,0,0)); #number of points is deprecated parameter imagepolygon($im,$points,5,$color)
    // imagefilledpolygon($im,$points,imagecolorallocate($im,255,0,0));
    imagesetpixel($im,400,50,$color);
    $color=imagecolorat($im,400,50);//print_r(imagecolorsforindex($im,$color));exit;
    $color=imagecolorallocatealpha($im,255,0,0,100);
    imagefilledrectangle($im,180,20,230,180,$color);
    $color=imagecolorat($im,200,100);//print_r(imagecolorsforindex($im,$color));exit;
    imagecopyresized($im,$im,250,250,0,0,220,220,100,150);
    imagefill($im,130,190,imagecolorallocate($im,255,255,255));
    $tile=imagecreatefromjpeg('../res/b.jpg');
    imagesettile($im,$tile);
    imagefill($im,30,190,IMG_COLOR_TILED);

    header('Content-type: image/png');
    imagepng($im);
    imagepng($im,'art.png');
    imagedestroy($tile);
    imagedestroy($im);
?>