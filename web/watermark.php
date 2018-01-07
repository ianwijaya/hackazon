<?php

$handle= fopen('products_pictures/'.$_GET["img"], 'rb');
$img=new Imagick();
$img->readImageFile($handle);
$draw= new ImagickDraw();
$draw->setFillColor('black');
#$draw->setFont('fonts/fontawesome-webfont.ttf');
$draw->setFontSize(20);
$draw->setTextUnderColor('yellow');
$draw->setGravity(Imagick::GRAVITY_CENTER);
$img->annotateImage($draw, 10,0,0,'  '.gethostname()).'  ';
$img->setImageFormat('jpg');
header ('Content-type: image/jpg');
echo $img;

?>
~

