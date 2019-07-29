<?php

echo "<h1>Deleta arquivos</h1>";

if (!is_dir("images")) mkdir("images");

foreach (scandir("images") as $item) {
    if (!in_array($item, array(".",".."))) {

        unlink ("images/" . $item );
        
        echo "$item removido <br>";

    }
}

//apaga todos os arquivos da pasta images