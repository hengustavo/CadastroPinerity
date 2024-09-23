<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
    <?php
        include('menu.php');
    ?>
</head>
<body>
    <form action="CadastroClienteExe.php" method="post">
        <fieldset>
        <legend>Cadastro de Clientes</legend>
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">
        </div>
        <div>
            <label for="email">E-mail</label>
            <input type="text" name="email" id="email">
        </div>
        <div>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha">
        </div>
        <div>
            <label for="ativo">Situação</label>
            <input type="hidden" name="ativo" id="ativo" value="0">
            <input type="checkbox" name="ativo" id="ativo" value="1">Ativo <br><br>
        </div>
        <div>
            <label for="cidade">Cidade</label>
            <select name="cidade" id="cidade">
            <?php 
                include('includes/conexao.php');
                $sql = "SELECT * FROM cidade";
                $result = mysqli_query($con,$sql);
                while($row = mysqli_fetch_array($result)){
                    echo "<option value='".$row['id']."'>"
                         .$row['nome']."/".$row['estado']
                        ."</option>";
                }
            ?>
            </select>
        </div>
        <div>
            <button type="submit">Cadastrar</button>
        </div>
        </fieldset>
    </form>
</body>
</html>