<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
</head>
<body>
    <form method="POST" action="/index.php/login/salvaralteracao">
        <input type="hidden" name="id" value="<?php echo $Login->id; ?>"/>

        <label>Usuario</label>
        <input type="text" name="usuario" value="<?php echo $Login->usuario; ?>"/>
        <br />

        <label>Redigite a Senha</label>
        <input type="password" name="senha" id="senha" value="" required/>
        <br />

        <label>Email</label>
        <input type="text" name="email" value="<?php echo $Login->email; ?>"/>
        <br />

        <br />
        <input type="submit" value="Salvar" />
        <a href='/index.php/produto'>Voltar/Cancelar</a>

    </form>
</body>
</html>