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
<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	//include_once __DIR__ . "/../helpers/mensagem.php";
	//$caminho = __DIR__ . "/../helpers/mensagem.php";
	//print_r($caminho); 
?>
    <h1>Plantas</h1>
    <ul>
        <?php foreach($data['especies'] as $especie): ?>

            <li>
                <!--<img src="especies/peperomia.jpg">-->
                <!--<img src="data:image/jpeg;base64,'.base64_encode( <?=$result['image']?> ).'"/>-->
                <!--<img src="'<?= $especie['imagem'] ?>'">;-->
                <?= $especie['idEspecie'] ?> - 
                <!--<?= $especie['imagem'] ?>-->
                <?= $especie['nomePop'] ?> - 
                <?= $especie['nomeCie'] ?> - 
                <?= $especie['frutifera'] ?> - 
                <?= $especie['toxidade'] ?> - 
                <?= $especie['exotica'] ?> - 
                <?= $especie['raridade'] ?> - 
                <?= $especie['medicinal'] ?> - 
                <?= $especie['descricao'] ?> -
                [ <a href="./EspecieController.php?action=verEspecie&idEspecie=<?= $especie['idEspecie'] ?>">Detalhes</a> ]
                [ <a href="./EspecieController.php?action=edit&idEspecie=<?= $especie['idEspecie'] ?>">Editar</a> ] 
                [ <a href="./EspecieController.php?action=deleteEspecieById&idEspecie=<?= $especie['idEspecie'] ?>">Excluir</a> ]
            </li>             
        <?php endforeach; ?>
    </ul>

    [ <a href="./EspecieController.php?action=loadFormNew">Cadastrar novo</a> ]
    
</body>
</html>