<?php

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

$font1 = "fonts".DIRECTORY_SEPARATOR."Bevan-Regular.ttf";
$font2 = "fonts".DIRECTORY_SEPARATOR."Playball-Regular.ttf";

imagettftext($image, 50, 0, 300, 150, $titleColor, $font1, "Certificado");
imagettftext($image, 32, 0, 380, 350, $titleColor, $font2, "Gustavo Morini");
imagettftext($image, 10, 0, 600, 600, $titleColor, $font2, "Concluido em: ".date("d/m/Y"));

//imagestring($image, 3, 440, 370, "Concluido em: ".date("d/m/Y"), $titleColor);

header("Content-Type: image/jpeg");

//mostra a imagem na tela
imagejpeg($image);

//salva a imagem em disco
//ultimo parametro é a qualidade da imagem de 1 a 100%
imagejpeg($image, "certificado-".date("Y-m-d").".jpg", 80);
imagedestroy($image);