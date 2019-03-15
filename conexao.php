<?php
$servidor = "seu servidor/localhost";
$usuario = "seu usuario";
$senha = "sua senha";
$dbname = "nome do banco de dados";

if (mysqli_connect_errno()) {
    echo "Falha na conexão com o servido MySQL:  " . mysqli_connect_error();
} else {
    echo 'Conexão Ok!';
}

//cria a conexão
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
