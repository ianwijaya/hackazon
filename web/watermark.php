<?php

$handle= fopen('products_pictures/'.$_GET["img"], 'rb');
$img=new Imagick();
$img->readImageFile($handle);
$draw= new ImagickDraw();
$draw->setFillColor('black');
#$draw->setFont('fonts/fontawesome-webfont.ttf');
$draw->setFontSize(16);
$draw->setGravity(Imagick::GRAVITY_CENTER);
$svr_file = fopen ("svrinfo.txt","r") or die("Unable to open file!");
$svr_info=fgets($svr_file);
fclose($svr_file);
$img->annotateImage($draw, 10,0,0,$svr_info);
$img->setImageFormat('jpg');
header ('Content-type: image/jpg');
echo $img;

?>

