<?php

include_once "conec.php";

try{
    $consulta = $conec->query("SELECT * FROM cadastro ");
        echo "<a href= 'index.php'> Home </a>";

        echo "<table border='1'><tr><td>Login</td><td>Senha</td><td>Email</td><td>Ações</td></tr>";

        while ($linha = $consulta ->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr><td>$linha[nome]</td><td>$linha[senha]</td><td>$linha[email]</td>      
            <td><a href='formeditar.php?id=$linha[id]'>Editar</a><td><a href='delete.php?id=$linha[id]'> Excluir</a></td></tr><br>";

    }
    echo "</table>";
}
catch(PDOExcption $erro){
    echo "Erro de execução" .$erro->getMessage();
}

        
?>