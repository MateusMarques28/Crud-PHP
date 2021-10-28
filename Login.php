<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="login.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body id="corpo">

    <div id= "div1">
        <h1 align = "center">Gersão Periféricos</h1>
    </div>

    <form name = "formLogin" action="salvadados.php" method="POST">
        <div align="center" id="div2">

            Login:
                <input type="text" name="nome" id="nome" value=""><br>

            Senha:
                <input type="password" name="senha" id="senha" value=""><br>

                <input type="submit" value="Login" onclick="" id="clicou"> 
                
         </div>

         <div class="campo">
                <label for="Opções"><strong>Opções</strong></label>
                <select id="Opções" required>
                  <option selected disabled value="">Selecione</option>
                  <option>Usuário</option>
                  <option>ADM</option>
                  
                </select>
            </div>

    </form>   


</body>
</html>