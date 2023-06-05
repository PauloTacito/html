<?php 
$conexao = new mysqli ('localhost','root','12345','sga');

$sql = "SELECT * FROM cargos";

$resultado = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargos</title>
</head>
<body>
    <h3>Lista de Cargos</h3>

    <a href="adicionar.php">Adicionar Cargo</a>
<table border=1>
<thead>
    <th>Nome</th>
    <th>Ações</th>
</thead>
<tbody>
<tr>
<td>
    Enfermeiro
</td>

<td><a href="editar.php">Editar</a> -
    <a href="">Excluir</a>
</td>
<tr>
<td>
   Médico 
</td>
<td><a href="editar.php">Editar</a> -
    <a href="">Excluir</a>
</td>
<tr>
<td>
   Cirugião 
</td>

<td><a href="editar.php">Editar</a> -
    <a href="">Excluir</a>
</td>
<tr>
<td>
   Técnico de enfermagem  
</td>

<td><a href="editar.php">Editar</a> -
    <a href="">Excluir</a>
</td>


</tbody>


</table>

</body>
</html>