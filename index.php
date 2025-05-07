<?php

require './DB/connect.php';

// $nome = 'Fernanda';
// $cpf = '46736789243';
// $fone = '32172935824';
// $email = 'fer@gmail.com';


// $sql = "INSERT INTO cliente (nome,cpf,fone,email) VALUES ('$nome','$cpf','$fone','$email')";


// $res = mysqli_query($conn,$sql);

// if($res){
//     echo '<script> alert("Cadastrado com sucesso.")</script>';
// } else {
//     echo 'error';
// }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sys</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <header>
        <ul>
            <li><a href="index.php"></a> Cadastrar</li>
            <li><a href="listar.php"> Listar</a></li>
        </ul>
    </header>
    <h1>Cadastro do cliente</h1>

    <div class="container">
        
        <form action="cadastra.php" method="POST">

            <input type="text" name="nome" id="nome" placeholder="Digite seu nome">
            <br>
            <input type="text" name="cpf" id="cpf" placeholder="Digite seu cpf">
            <br>
            <input type="text" name="fone" id="fone" placeholder="Digite seu fone">
            <br>
            <input type="text" name="email" id="email" placeholder="Digite seu email">
            <br>
            <input type="password" name="pass" id="pass" placeholder="Digite sua senha">
            <br>
            <input type="password" name="conf_pass" id="conf_pass" placeholder="confirme sua senha">
            <br>
            <input class="btn btn-primary" type="submit" name="cadastrar" id="bot" placeholder="cadastrar">


        </form>
    
    </div>
    
</body>
</html>







