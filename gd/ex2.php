<?php

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "Certificado", $titleColor);
imagestring($image, 5, 440, 350, "Goku", $titleColor);
imagestring($image, 3, 440, 370, "Concluido em: ".date("d/m/Y"), $titleColor);

header("Content-Type: image/jpeg");

//mostra a imagem na tela
imagejpeg($image);

//salva a imagem em disco
//ultimo parametro é a qualidade da imagem de 1 a 100%
imagejpeg($image, "certificado-".date("Y-m-d").".jpg", 80);


imagedestroy($image);
