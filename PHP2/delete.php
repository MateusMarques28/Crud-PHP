<?php

include_once "conec.php";

try{
    $id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);  
    $insert = $conec-> prepare("DELETE FROM cadastro WHERE id = :id");
    $insert-> bindParam(':id', $id);
    $insert-> execute();

    header('location: index.php');

    echo "Usuário excluído com sucesso";
}
catch(PDOException $erro){
    echo "Erro de execução" .$erro->getMessage();
}

?>
