<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href ="CSS/estilo.css">
    <title>Projeto Login</title>
</head>
<body>
<div id="corpo-form-cad">
    <h1>CADASTRAR</h1>
    <form method="POST" action="processa.php">
        <input type="text" name="nome" placeholder="Nome" maxlength="30">
        <input type="text" name="telefone"placeholder="Telefone" maxlength="14">
        <input type="email" name="email" placeholder="Usuario" maxlength="40">
        <input type="password" name="senha" placeholder="Senha" maxlength="15">
        <input type="password" name="confsenha" placeholder="Confimar Senha" maxlength="15">               
        <input type="submit" value="Cadastrar">
    </form>
</div>
</body>
</html>