<?php
include "conexao.php";
if($_SERVER['REQUEST_METHOD']==='POST'){
    $nome=$conn->real_escape_string($_POST['nome']);
    $telefone=$conn->real_escape_string($_POST['telefone']);
    $email=$conn->real_escape_string($_POST['email']);
    $cnh=$conn->real_escape_string($_POST['cnh']);
    $senha=md5($_POST['password']);
    $conn->query("INSERT INTO Motorista (Nome,Telefone,Email,CNH,Senha) VALUES('$nome','$telefone','$email','$cnh','$senha')");
    header('Location: index.php');exit;
}
?>
<!DOCTYPE html><html lang="pt-BR"><head><meta charset="UTF-8"/><meta name="viewport" content="width=device-width,initial-scale=1.0"/><title>Cadastro Motorista</title><link rel="stylesheet" href="style.css"/></head><body>
<div class="container"><h2>Cadastro de Motorista</h2>
<form method="post">
<label>Nome</label><input name="nome" required/>
<label>Telefone</label><input name="telefone" required/>
<label>Email</label><input type="email" name="email" required/>
<label>CNH</label><input name="cnh" required/>
<label>Senha</label><input type="password" name="password" required/>
<button type="submit">Cadastrar</button>
</form></div>
</body></html>