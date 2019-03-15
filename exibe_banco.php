<?php
//cria a conexão
$conn = mysqli_connect('localhost', 'kap', 'ppee424', 'novo_usuario');
$consulta = "SELECT * FROM usuario ";
$resultado_usuario = mysqli_query($conn, $consulta);


?>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
    <?php
     if ($resultado_usuario->num_rows > 0){
        while($dado = $resultado_usuario->fetch_array()) { ?>
         <table class="" border="1"; bgcolor="#ff5722"; width="100%">
                <tr>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>E-mail</td>
                    <td>Data de criação</td>
                    <td>Idade</td>
                    <td>Cidade</td>
                    <td>CPF</td>
                    <td>Menssagem</td>
                </tr><br>
                        <tr>
                            <td><?php echo $dado["id"]; ?></td>
                            <td><?php echo $dado["nome"]; ?></td>
                            <td><?php echo $dado["email"]; ?></td>
                            <td><?php echo date("d/m/Y", strtotime($dado["created"])); ?></td>
                            <td><?php echo $dado["idade"]; ?></td>
                            <td><?php echo $dado["cidade"]; ?></td>
                            <td><?php echo $dado["cpf"]; ?></td>
                            <td><?php echo $dado["mensagem"]; ?></td>
                    <?php }
                } else {
//                    echo "Seu banco de Dados está vazio";
                    echo "<p class='sub2', >Seu Banco está vazio</p>";
                } ?>
            </table><br>
        <input type="submit" name="" class="sub2" value="Voltar" onclick="location. href='siteform.html'">
    </body>
</html>
