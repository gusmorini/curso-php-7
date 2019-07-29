<?php

//o arquivo a ser criado
$file = fopen("log.txt", "a+");

//abre o arquivo e insere os dados
fwrite($file, date("Y-m-d H:i:s \n"));

//fecha o arquivo
fclose($file);

echo "Arquivo criado com sucesso!";