<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
</head>
<body>
    <form method="POST" action="/index.php/tipo/salvaralteracao">
        <input type="hidden" name="id" value="<?php echo $Tipo->id; ?>"/>

        <label>Nome</label>
        <input type="text" name="nome" value="<?php echo $Tipo->nome_tipo; ?>"/>
        <br />

        
        <br />
        <input type="submit" value="Salvar" /><br>
        <a href='/index.php/tipo'>Voltar/Cancelar</a>

    </form>
</body>
</html>