<?php
include "conexao.php";
if(!isset($_SESSION['user_id'])) header('Location: index.php');
$noHeader=false; include "header.php";
if($_SERVER['REQUEST_METHOD']==='POST'){
    $placa=$conn->real_escape_string($_POST['placa']);
    $modelo=$conn->real_escape_string($_POST['modelo']);
    $capacidade=(int)$_POST['capacidade'];
    $conn->query("INSERT INTO Onibus (Placa,Modelo,Capacidade) VALUES('$placa','$modelo',$capacidade)");
    header('Location: lista_alunos.php');exit;
}
?>
<!DOCTYPE html><html lang="pt-BR"><head><meta charset="UTF-8"/><meta name="viewport" content="width=device-width,initial-scale=1.0"/><title>Cadastro Ônibus</title><link rel="stylesheet" href="style.css"/></head><body>
<div class="container"><h2>Cadastro de Ônibus</h2>
<form method="post">
<label>Placa</label><input name="placa" required/>
<label>Capacidade</label><input type="number" name="capacidade" required/>
<label>Modelo</label><input name="modelo" required/>
<button type="submit">Cadastrar</button>
</form></div>
</body></html>