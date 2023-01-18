<?php
    $im=imagecreatetruecolor(700,700);
    imagesetthickness($im,mt_rand(5,20));
    imagearc($im,100,mt_rand(150,600),250,250,0,360,imagecolorallocate($im,255,0,0));
    imagearc($im,250,mt_rand(150,600),250,250,0,360,imagecolorallocate($im,255,0,0));
    imagearc($im,400,mt_rand(150,600),250,250,0,360,imagecolorallocate($im,255,0,0));
    imagearc($im,550,mt_rand(150,600),250,250,0,360,imagecolorallocate($im,255,0,0));
    imagettftext($im,mt_rand(48,96),mt_rand(0,180),100,mt_rand(150,600),imagecolorallocate($im,mt_rand(20,255),mt_rand(20,255),mt_rand(20,255)),'../res/fonts/times_new_roman.ttf',IntlChar::chr([mt_rand(65,90),mt_rand(97,122)][mt_rand(0,1)]));
    imagettftext($im,mt_rand(48,96),mt_rand(0,180),250,mt_rand(150,600),imagecolorallocate($im,mt_rand(20,255),mt_rand(20,255),mt_rand(20,255)),'../res/fonts/times_new_roman.ttf',IntlChar::chr([mt_rand(65,90),mt_rand(97,122)][mt_rand(0,1)]));
    imagettftext($im,mt_rand(48,96),mt_rand(0,180),400,mt_rand(150,600),imagecolorallocate($im,mt_rand(20,255),mt_rand(20,255),mt_rand(20,255)),'../res/fonts/times_new_roman.ttf',IntlChar::chr([mt_rand(65,90),mt_rand(97,122)][mt_rand(0,1)]));
    imagettftext($im,mt_rand(48,96),mt_rand(0,180),550,mt_rand(150,600),imagecolorallocate($im,mt_rand(20,255),mt_rand(20,255),mt_rand(20,255)),'../res/fonts/times_new_roman.ttf',IntlChar::chr([mt_rand(65,90),mt_rand(97,122)][mt_rand(0,1)]));
    imagesetthickness($im,mt_rand(5,20));
    imageline($im,0,0,700,700,imagecolorallocate($im,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255)));
    imageline($im,0,700,700,0,imagecolorallocate($im,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255)));
    for($i=1;$i<7;$i++){imagesetthickness($im,mt_rand(5,10));imageline($im,0,$i.'00',700,$i.'00',imagecolorallocate($im,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255)));}
    for($i=1;$i<7;$i++){imagesetthickness($im,mt_rand(5,10));imageline($im,$i.'00',0,$i.'00',700,imagecolorallocate($im,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255)));}

    header('Content-type: image/png');
    imagepng($im);
    imagedestroy($im);
?>