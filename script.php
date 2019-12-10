<?php
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'juvenil';
$categorias[] = 'adulto';


//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome))
{
	echo "O nome não pode ser vazio!";
	return;
}

if(strlen($nome) < 3 || strlen($nome) > 40)
{
	echo "O nome deve conter mais de 2 caracteres e menos de 40";
	return;
}
if(!is_numeric($idade))
{
	echo "Idade não é válida!"
}
echo "<br>";
//var_dump($nome);
//var_dump($idade);
if($idade>=6 && $idade<=12){
	for($i=0;$i< count($categorias);$i++)
	{
		if($categorias[$i] == 'infantil'){
			echo "O nadador ".$nome. " é categoria ".$categorias[$i];
		}
	}
}
else if($idade>=13 && $idade<=18){
	for($i=0;$i< count($categorias);$i++)
	{
		if($categorias[$i] == 'juvenil'){
			echo "O nadador $nome é categoria $categorias[$i]";
		}
	}
}
else if($idade>=19 && $idade<=25){
	for($i=0;$i< count($categorias);$i++)
	{
		if($categorias[$i] == 'adulto')
		echo "O nadador ".$nome." é categoria ".$categorias[$i];
	}
}
?>

