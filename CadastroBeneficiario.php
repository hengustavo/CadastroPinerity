<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Beneficiário</title>
    <?php
        include('menu.php');
    ?>
</head>
<body>
    <form action="core/beneficiario_repositorio.php" method="post">
    <input type="hidden" name="acao" value="<?php echo empty($id) ? 'insert' : 'update' ?>">
    <input type="hidden" name="id" value="<?php echo $entidade['id'] ?? '' ?>">
        <fieldset>
        <legend>Cadastro de Pessoa</legend>
        <div>
            <label for="NIS">NIS:</label>
            <input type="number" name="NIS" id="NIS">
        </div>
        <div>
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome">
        </div>
        <div>
            <label for="cpf">CPF: </label>
            <input type="number" name="cpf" id="cpf">
        </div>
        <div>
            <label for="telefone">Telefone: </label>
            <input type="number" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" name="telefone" id="telefone">
        </div>
        <div>
            <label for="email">E-mail</label>
            <input type="text" name="email" id="email">
        </div>
        <div>
            <label for="folha_resumo">Folha Resumo: </label>
            <input type="file" name="folha_resumo" id="folha_resumo">
        </div>
        <div>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha">
        </div>
        <div>
            <button type="submit">Cadastrar</button>
        </div>
        </fieldset>
    </form>
</body>
</html>