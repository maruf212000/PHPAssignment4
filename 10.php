<?php
    header("Content-Type: image/jpeg");
    $imgname ="download.jpg";
    $img = imagecreatefromjpeg($imgname);
    $color = imagecolorallocate($img,0,255,0);
    $fontsize = 9;
    $x = 100;
    $y = 100;
    $s1 = "hello";
    imagestring($img,$fontsize,$x,$y,$s1,$color);
    imagejpeg($img);
?>