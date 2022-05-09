<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
</head>
<body>
    <form method="POST" action="/index.php/produto/salvaralteracao">
        <input type="hidden" name="id" value="<?php echo $Produto->id; ?>"/>

        <label>Nome</label>
        <input type="text" name="nome" value="<?php echo $Produto->nome; ?>"/>
        <br />

        <label>Perecivel</label>
        <input type="text" name="perecivel" id="perecivel" value="<?php echo $Produto->perecivel; ?>" required/>
        <br />

        <label>Tipo</label>
        <select name="tipo" required>
            <option value="">Escolha o tipo</option>
            <?php echo $opcoes; ?>
        </select>
        <br />


        <label>Valor</label>
        <input type="text" name="valor" value="<?php echo $Produto->valor; ?>"/>
        <br />

        <label>Imagem</label>
        <input type="text" name="imagem" value="<?php echo $Produto->imagem; ?>"/>
        <br />
        
        <br />
        <input type="submit" value="Salvar" />
        <a href='/index.php/produto'>Voltar/Cancelar</a>

    </form>
</body>
</html>