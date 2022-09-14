<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Cadastro de especies</h2>
<p/>
<form action="./EspecieController.php?action=create" method="POST">
	Nome Popular: <input type="text" name="nomePop">
	<br>
	Nome Cientifico: <input type="text" name="momeCie">
	<br>
	Frutifera? <input type="checkbox" name="frutifera" value="Sim"> Sim
			   <input type="checkbox" name="frutifera" value="Nao"> Não
	<br>
	Tóxica? <input type="checkbox" name="toxidade" value="Sim"> Sim
			   <input type="checkbox" name="toxidade" value="Nao"> Não
	<br>
	Comestível? <input type="checkbox" name="comestivel" value="Sim"> Sim
			   <input type="checkbox" name="comestivel" value="Nao"> Não
	<br>
	Rara? <input type="checkbox" name="raridade" value="Sim"> Sim
			   <input type="checkbox" name="raridade" value="Nao"> Não
	<br>
	Medicinal? <input type="checkbox" name="medicinal" value="Sim"> Sim
			   <input type="checkbox" name="medicinal" value="Nao"> Não
	<br>
	<p/>
	<input type="submit" value="Registrar">
	<input type="reset" value="Limpar">
</form>		

</body>
</html>