<?php

$link = "https://3c1703fe8d.site.internapcdn.net/newman/gfx/news/hires/2014/amazonlogo.jpg";

$content = file_get_contents($link);

$parse = parse_url($link);

$basename = basename($parse["path"]);

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose();

?>

<img src="<?=$basename?>">