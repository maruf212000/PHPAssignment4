<?php
    $imgpath1 = "download.jpg";
    $imgpath2 = "logo.png";
    $img = imagecreatefromjpeg($imgpath1);
    $wimg = imagecreatefrompng($imgpath2);
    $wimgx = imagesx($wimg);
    $wimgy = imagesy($wimg);
    imagecopy($img,$wimg,100,100,0,0,$wimgx,$wimgy);
    header("Content-Type: image/jpg");
    imagejpeg($img);
?>