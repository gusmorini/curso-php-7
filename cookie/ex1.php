<?php

$data = array("empresa"=>"Empresa 1");

setcookie("teste1", json_encode($data), time() + 3600);

echo "Cookie criado";

?>