<?php

include_once "conec.php";

$id = filter_var($_GET ["id"], FILTER_SANITIZE_NUMBER_INT);
$consulta = $conec -> query("SELECT * FROM cadastro WHERE id = '$id' ");
$linha = $consulta -> fetch(PDO:: FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body id="corpo">
<form action="editar.php" method="POST" id="form">
        <div align="center" id="div2">
            <input type="hidden" name="id" value="<?php echo $linha['id'] ?>">
            Login:
                <input type="text" name="nome" id="nome" value="<?php echo $linha['nome'] ?>"><br>

            Email:
                <input type="email" name="email" id="email" value="<?php echo $linha['email'] ?>"><br>

            Senha:
                <input type="password" name="senha" id="senha" value="<?php echo $linha['senha'] ?>"><br>

                <input type="submit" value="Salvar" onclick="" id="clicou"> 
                
         </div>
    </form>   

    <script>
        document.getElementById ("clicou").onclick = function clicar(){
    alert("Dados editados com sucesso")
}
    </script>
    
</body>
</html>

