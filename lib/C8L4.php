<?php
    $im=imagecreatetruecolor(500,500);
    $text='HI & BYE';
    imagettftext($im,16,50,100,100,imagecolorallocate($im,255,255,0),'../res/fonts/times_new_roman.ttf',$text);
    $text='Русский текст';
    imagettftext($im,16,50,100,300,imagecolorallocate($im,255,255,0),'../res/fonts/times_new_roman.ttf',$text);
    $text='中文文本';
    imagettftext($im,16,50,300,100,imagecolorallocate($im,255,255,0),'../res/fonts/Slidefu-Regular-2.ttf',$text);

    header('Content-type: image/png');
    imagepng($im);
    imagedestroy($im);
?>