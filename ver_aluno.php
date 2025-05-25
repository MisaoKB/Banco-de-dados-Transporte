<?php
// Exibe detalhes de um aluno
session_start();
include 'conexao.php';
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}
$id = (int)$_GET['id'];
$uid = (int)$_SESSION['user_id'];
$res = $conn->query("SELECT * FROM Aluno WHERE ID=$id AND cadastrado_por=$uid");
if ($res->num_rows !== 1) {
    die('Aluno não encontrado ou sem permissão.');
}
$a = $res->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8"/>
  <title>Detalhes do Aluno</title>
  <link rel="stylesheet" href="style.css"/>
</head>
<body>
  <?php $noHeader = false; include 'header.php'; ?>
  <div class="container">
    <h2>Detalhes de <?= htmlspecialchars($a['Nome']) ?></h2>
    <ul>
      <li><strong>Idade:</strong> <?= $a['Idade'] ?></li>
      <li><strong>Endereço:</strong> <?= htmlspecialchars($a['Endereco']) ?></li>
      <li><strong>Horário:</strong> <?= $a['Horario_Aula'] ?></li>
      <li><strong>Cuidados Especiais:</strong> <?= $a['Cuidados_Especiais'] ? 'Sim' : 'Não' ?></li>
    </ul>
    <a href="lista_alunos.php">← Voltar</a>
  </div>
</body>
</html>
