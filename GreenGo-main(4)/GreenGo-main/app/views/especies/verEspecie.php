<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRUD</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf8">
    <link rel="stylesheet" type="text/css" href="../views/helpers/estilos.css">
    <script src="../views/helpers/funcoescrud.js" type="text/javascript"></script>


</head>
<body>
<?php foreach($data['especies'] as $especie): ?>

    <h2><?= $especie->getNomePop() ?></h2>

	<?= $especie->getImagem() ?>
	<br>
    Nome Popular: <?= $especie->getNomePop() ?>
	<br>
    Nome Cientifico: <?= $especie->getNomeCie() ?>
	<br>
    Descrição: <?= $especie->getDescricao() ?>
	<br>
    Frutifera: <?= $especie->getFrutifera() ?>
	<br>
    Raridade: <?= $especie->getRaridade() ?>
	<br>
    Medicinal: <?= $especie->getMedicinal() ?>
	<br>
    Toxidade: <?= $especie->getToxidade() ?>
	<br>
    Exotica: <?= $especie->getExotica() ?>
	<br>
<?php endforeach; ?>
</body>
</html>