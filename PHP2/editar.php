<?php

include_once "conec.php";

try{
    $id = filter_var($_POST["id"], FILTER_SANITIZE_NUMBER_INT);
    $nome = filter_var($_POST["nome"]);
    $email = filter_var($_POST["email"]);
    $senha = filter_var($_POST["senha"]);

    $insert = $conec-> prepare("UPDATE cadastro SET nome = :nome, senha = :senha, email = :email WHERE id = :id");
    $insert-> bindParam(':id', $id);
    $insert-> bindParam(':nome', $nome);
    $insert-> bindParam(':senha', $senha);
    $insert-> bindParam(':email', $email);
    $insert-> execute();

    header('location: index.php');
}
catch(PDOException $erro){
    echo "Erro de execução" .$erro->getMessage();
}



?>