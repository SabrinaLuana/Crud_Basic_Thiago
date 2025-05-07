<?php
// inclui conexão com banco
require './DB/connect.php';


// monta a query de consulta em sql
$sql = 'select * from cliente';
$result = mysqli_query($conn,$sql);

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
    <link rel="stylesheet" href="style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <ul>
            <li><a href="index.php"> Cadastrar</a></li>
            <li><a href="listar.php"> Listar</a></li>
        </ul>
    </header>
    <h1 class="py-5 mx-5">Clientes cadastrados</h1>



    <div class="container">
        
        <table class="table table-striped">
        <tr>
            <td>Id</td>
            <td>Nome</td>
            <td>CPF</td>
            <td>Fone</td>
            <td>Email</td>
            <td>Editar</td>
            <td>Excluir</td>
        </tr>

        <?php

            if($result){
                while ($linha = mysqli_fetch_assoc($result)) {
                    $id = $linha['id'];
                    $nome = $linha['nome'];
                    $cpf = $linha['cpf'];
                    $fone = $linha['fone'];
                    $email = $linha['email'];

                    echo '
                    <tr>
                        <td>'.$id.'</td>
                        <td>'.$nome.'</td>
                        <td>'.$cpf.'</td>
                        <td>'.$fone.'</td>
                        <td>'.$email.'</td>
                        <td><a href="editar_cliente.php?id='.$id.'">editar<a></td>
                        <td><a href="excluir_cliente.php?id='.$id.'">excluir<a></td>
                    
                    </tr>
                    ';

                    echo $id . ' ' . $nome . ' ' . $cpf . '<br>';
                }
            }

            
        
        
        ?>
    </table></div>
    
    
</body>
</html>







