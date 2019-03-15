<?php

$conn = mysqli_connect('seu servidor', 'seu usuario', 'sua senha', ' sua base de dados');

if (mysqli_connect_errno()) {
    die('Erro na conexão.');
} else {
    echo 'Conexão Ok!';
}

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$data = date('Y-m-d H:i:s');
$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
var_dump($cpf);
$mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);

$insertQuery = "INSERT INTO usuario (nome, email, created, idade, cidade, cpf, mensagem ) VALUES ('$nome', '$email', '$data', '$idade', '$cidade', '$cpf', '$mensagem')";
$resultado_usuario = mysqli_query($conn, $insertQuery);


if($resultado_usuario === true){
    echo"<script language='javascript' type='text/javascript'>alert('Cadastro realizado com sucesso!');window.location.href='siteform.html'</script>";
}else{
    die(mysqli_error($conn));
    echo"<script language='javascript' type='text/javascript'>alert('Houve um erro inesperado! ');window.location.href='siteform.html'</script>";
}
