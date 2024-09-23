<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cidade</title>
    <?php
        include('menu.php');
    ?>
</head>
<body>
    <?php
        include('includes/conexao.php');
        $nome = $_POST['nome'];
        $estado = $_POST['estado'];
        echo "<h1>Dados da cidade</h1>";
        echo "Nome: $nome<br>";
        echo "Estado: $estado<br>";
        // INSERT INTO cidade (nome, estado)
        // VALUES ('$nome','$estado')
        $sql = "INSERT INTO cidade (nome, estado)";
        $sql .= " VALUES('".$nome."','".$estado."')";
        echo $sql;
        // Executa comando no banco de dados
        $result = mysqli_query($con,$sql);
        if($result){
            echo "<h2>Dados cadastrados com sucesso!</h2>";
        }else{
            echo "<h2>Erro ao cadastrar!</h2>";
            echo mysqli_error($con);
        }
    ?>    
</body>
</html>