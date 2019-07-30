<?php

if(isset($_COOKIE["teste1"])) {

    //json_decode desta forma gera um objeto
    //json_decode com true no final gera um array
    
    $obj = json_decode($_COOKIE["teste1"]);
    
    var_dump($obj->empresa);

}

?>