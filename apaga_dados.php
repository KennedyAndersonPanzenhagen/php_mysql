<?php
$conn = mysqli_connect('localhost', 'kennedyanderson', '!@u!SWZrmm.rO[GCf!1([UL!Pzcw,K', 'novo_usuario');
$consulta = "SELECT * FROM usuario";

if (mysqli_connect_errno()) {
    die();
} else {
    echo('');
}

$deleteQuery = ('TRUNCATE TABLE usuario'); //mysql_query('TRUNCATE TABLE table;');
$resultado_usuario = mysqli_query($conn, $deleteQuery);

if ($deleteQuery && $resultado_usuario == true) {
    echo"<script language='javascript' type='text/javascript'>alert('Seu Banco de Dados foi excluido com sucesso!');window.location.href='exibe_banco.php'</script>";
} else {
    echo"<script language='javascript' type='text/javascript'>alert('Não há o que excluir!');window.location.href='exibe_banco.php'</script>";;
}
