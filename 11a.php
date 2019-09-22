<?php
$imageURL = "download.jpg";
list($width,$height) = getimagesize($imageURL);
$imageProperties = imagecreatetruecolor($width, $height);
$targetLayer = imagecreatefromjpeg($imageURL);
imagecopyresampled($imageProperties, $targetLayer, 0, 0, 0, 0, $width, $height, $width, $height);
//imagecopyresampled ( $dst_image , $src_image , $dst_x , $dst_y , $src_x , $src_y , $dst_w , $dst_h ,  $src_w , $src_h )
$WaterMarkText = 'CONFIDENTIAL';
$watermarkColor = imagecolorallocate($imageProperties, 255,0,0);
imagestring($imageProperties, 5, 130, 117, $WaterMarkText, $watermarkColor);
//imagestring ( $image , int $font , int $x , int $y , string $string , int $color )
header('Content-type: image/png');
imagepng ($imageProperties);

?>