<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Cidades</title>
    <?php
        include('menu.php');
    ?>
</head>
<body>
    <?php
        include('includes/conexao.php');
        $sql = "SELECT * FROM cidade";        
        $result = mysqli_query($con, $sql); // Executa a consulta
    ?>
    <h1>Consulta de Cidades</h1>
    <a class="center"  href="CadastroCidade.html">Cadastrar Nova Cidade </a>
    <table class="styled-table">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Estado</th>
                <th>Alterar</th>
                <th>Deletar</th>
            </tr>
        </thead>
        <tbody>
        <?php //mysqli_fetch_array lê uma linha por vez
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['nome']."</td>";
                echo "<td>".$row['estado']."</td>";
                echo "<td><a href='alteraCidade.php?id="
                .$row['id']."'>Alterar</a></td>";
                echo "<td><a href='deletaCidade.php?id="
                .$row['id']."'>Deletar</a></td>";
                echo "</tr>";
            }
        ?>
        </tbody>
    </table>
</body>
</html>