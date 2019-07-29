<?php

$images = scandir("images");

$data = array();

foreach($images as $img)
{
    if (!in_array($img, array(".","..")))
    {
       $filename = "images".DIRECTORY_SEPARATOR.$img;

       //informações do arquivo
       $info = pathinfo($filename);
       
       //pegar o tamanho do arquivo
       $info["size"] = filesize($filename);

       //data da modificação
       $info["modified"] = date("d/m/Y H:i:s", fileatime($filename));

       //url de acesso
       $info["url"] = "http://localhost:3000/".$filename;
        
       array_push($data, $info);
       
       // echo "<img src='$filename' >";

    }
}

//converte o array para json e mostra na tela
echo json_encode($data);