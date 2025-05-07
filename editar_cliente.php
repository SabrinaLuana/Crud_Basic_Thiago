<?php

require './DB/connect.php';

// receber o id via get

if(isset($_GET['id'])){
    $id_recebido = $_GET['id'];

    //selecionar o cliente por id

    $sql = "select * from cliente where id = $id_recebido";
    $result = mysqli_query($conn,$sql);
    var_dump($result);

    $cliente = mysqli_fetch_assoc($result);

    echo $cliente['nome'];
    $id = $cliente['id'];
    $nome = $cliente['nome'];
    $fone = $cliente['fone'];
    $email = $cliente['email'];
    $cpf = $cliente['cpf'];





} else{
    header('location: index.php');
}

if(isset($_POST['editar'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $fone = $_POST['fone'];

    $sql_update = "update cliente set nome='$nome',cpf='$cpf',email='$email',fone='$fone' where id = $id_recebido";

    $result_update = mysqli_query($conn,$sql_update);

    if ($result_update) {
        echo '<script> alert("Cliente Atualizado com sucesso!!")</script>';
    }

    echo "Dados recebidos via post";
    echo $nome . $email . $cpf . $fone;
}

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
            <li><a href="index.php"> Cadastrar</a></li>
            <li><a href="listar.php"> Listar</a></li>
        </ul>
    </header>
    <h1>Editar cliente</h1>

    <div class="container">
        
        <form method="POST">

            <input type="text" name="nome" value="<?=$cliente['nome'];?>" id="nome" placeholder="Digite seu nome">
            <br>
            <input type="text" name="cpf" value="<?=$cliente['cpf'];?>" id="cpf" placeholder="Digite seu cpf">
            <br>
            <input type="text" name="fone" value="<?=$cliente['fone'];?>" id="fone" placeholder="Digite seu fone">
            <br>
            <input type="text" name="email" value="<?=$cliente['email'];?>" id="email" placeholder="Digite seu email">
            <br>
            <!-- <input type="password" name="pass" id="pass" placeholder="Digite sua senha">
            <br>
            <input type="password" name="conf_pass" id="conf_pass" placeholder="confirme sua senha">
            <br> -->
            <!-- <input class="btn btn-primary" type="submit" name="cadastrar" id="bot" placeholder="cadastrar"> -->
            <button type="reset" class="btn btn-danger">Cancelar</button>
                
            <button type="submit" name="editar" class="btn btn-primary">Editar</button>

        </form>
    
    </div>

    
    
</body>
</html>







