<?php

$hostname = '10.38.0.83'; //ip da maquina
$username = 'luana';
$password = '321';
$db = 'crud';

$conn = new mysqli($hostname, $username, $password, $db);


// if($conn){
//     echo 'Conectado com sucesso.';
// } else {
//     echo 'Erro ao se connectar.';
// }


?>