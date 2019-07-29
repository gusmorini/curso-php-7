<?php

    $name = "images";

    if (!is_dir($name)) 
    {
        mkdir($name); // cria o diretorio
        echo "Diretório criado com sucesso!";
    }
    else
    {
        //rmdir($name); remove o diretório
        echo "O diretório: $name já existe!";
    }

