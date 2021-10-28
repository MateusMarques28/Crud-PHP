<?php

try{
    $conec = new PDO("mysql:host=localhost; dbname=crud2", "root");
    $conec-> exec("set names utf8");
}
catch(PDOExcption $erro){
    echo "Erro de execução" .$erro->getMessage();
}