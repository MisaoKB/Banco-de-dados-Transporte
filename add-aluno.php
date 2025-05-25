<?php
include 'conexao.php';
if(!isset($_SESSION['user_id'])) header('Location: index.php');
$noHeader=false; include 'header.php';
?>
<!DOCTYPE html><html lang="pt-BR"><head><meta charset="UTF-8"/><meta name="viewport" content="width=device-width,initial-scale=1.0"/><title>Cadastro de Aluno</title><link rel="stylesheet" href="style.css"/></head><body>
<div class="container"><h2>Cadastro de Aluno</h2>
<form action="salvar_aluno.php" method="post">
<label>Nome</label><input type="text" name="nome" required/>
<label>Idade</label><input type="number" name="idade" required/>
<label>Endereço</label><input type="text" name="endereco"/>
<label>Escola (ID)</label><input type="number" name="escola" required/>
<label>Horário</label><input type="time" name="horario" required/>
<label>Cuidados Especiais</label><select name="cuidados"><option value="0">Não</option><option value="1">Sim</option></select>
<button type="submit">Cadastrar</button>
</form></div></body></html>