<?php

function __autoload($classname) {
//    include '../app/dao/';
    
    if (file_exists($dao = "../app/dao/" . $classname . ".php")) {
        include_once($dao);
    }
    if (file_exists($model = "../app/model/" . $classname . ".php")) {
        include_once($model);
    }
    include_once '../app/conexao/ConexaoPDO.php';
}
