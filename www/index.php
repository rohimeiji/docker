<?php
error_reporting(1);

$imagick = new \Imagick("baju_bola.jpg");

$imagick->resizeImage(320,240,Imagick::FILTER_LANCZOS,1);

header("Content-Type: image/jpg");
echo $imagick->getImageBlob();