<?php

$imagick = new \Imagick;
$imagick->newImage(10, 10, 'red');
$imagick->setImageFormat('avif');
$contents = $imagick->getImageBlob();

assert(count($contents) > 0);
