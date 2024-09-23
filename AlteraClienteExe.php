<?php
    include('includes/conexao.php');
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $ativo = $_POST['ativo'];
    $cidade = $_POST['cidade'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração de Cliente</title>
    <?php
        include('menu.php');
    ?>
</head>
<body>
    <h1> Alteração de cliente</h1>
    <?php
        echo "<p>Id: $id</p>";
        echo "<p>Nome: $nome</p>";
        echo "<p>Email: $email</p>";
        $sql = "UPDATE cliente SET 
                  nome   = '$nome',
                  email  = '$email',
                  senha  = '$senha',
                  ativo  = $ativo, 
                  id_cidade = '$cidade'
                WHERE id = $id";
            
        $result = mysqli_query($con, $sql);
        if ($result)
            echo "Dados atualizados!";
        else
            echo "Erro ao atualizar dados!\n"
            .mysqli_error($con);
    ?>
</body>
</html>