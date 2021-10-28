<?php

include_once "conec.php";

try{
    $id = filter_var($_GET['id']);
    $nome = filter_var($_POST['nome']);
    $email = filter_var($_POST['email']);
    $senha =filter_var($_POST['senha']);
    


    $insert = $conec->prepare("INSERT INTO cadastro (nome, email, senha) VALUES(:nome, :email, :senha)");
    $insert->bindParam(':nome',$nome);
    $insert->bindParam(':email',$email);
    $insert->bindParam(':senha',$senha);
    $insert->execute();

    header('location: index.php');

}
catch(PDOExcption $erro){
    echo "Erro de execução" .$erro->getMessage();
}


?>