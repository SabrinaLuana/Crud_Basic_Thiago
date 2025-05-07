<?php

include './DB/connect.php';

var_dump($_POST);

//$_POST é uma variavel global do php --- apache -- request http

if(isset($_POST['cadastrar'])){

    // print_r($_POST);

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $fone = $_POST['fone'];
    $email = $_POST['email'];
    $senha = $_POST['pass'];
    $conf_senha = $_POST['conf_pass'];

    $sql = "INSERT INTO cliente (nome,cpf,fone,email) VALUES ('$nome','$cpf','$fone','$email')";

    $result = mysqli_query($conn, $sql);



    if($result){
        echo 'Cadastrado com sucesso.';
    } else {
        die(mysqli_error($conn));
    }

}

// print_r($_POST);



// echo $nome . '<br>';
// echo $cpf . '<br>';
// echo $fone . '<br>';
// echo $email . '<br>';
// echo $senha . '<br>';
// echo $conf_senha . '<br>';


?>