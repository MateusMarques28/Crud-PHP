<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="cadastro.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body id="corpo">

    <div id= "div1">
        <h1 align = "center">Gersão Periféricos</h1>
    </div>

    <form action="salvadados.php" method="POST">
        <div align="center" id="div2">

            User:
                <input type="text" name="nome" id="user"><br>

            Email:
                <input type="email" name="email" id="email"><br>    

            Senha:
                <input type="password" name="senha" id="senha"><br> 
         
                <input type="submit" value="Concluir Cadastro" onclic="" id="clicou">
                
         </div>

    </form>
     
    <script>
        document.getElementById ("clicou").onclick = function clicar(){
    alert("Cadastro realizado com sucesso")
}
    </script>

</body>
</html>