<?php

function __autoload($classname) {
  
    if (file_exists($dao = "../dao/" . $classname . ".php")) {
        include_once($dao);
    }
    if (file_exists($model = "../model/" . $classname . ".php")) {
        include_once($model);
    }
    include_once '../conexao/ConexaoPDO.php';
}
