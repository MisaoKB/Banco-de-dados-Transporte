<?php
// Formulário para editar um aluno
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
$noHeader = false;
include 'header.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8"/>
  <title>Editar Aluno</title>
  <link rel="stylesheet" href="style.css"/>
</head>
<body>
  <div class="container">
    <h2>Editar Aluno</h2>
    <form action="atualizar_aluno.php" method="post">
      <input type="hidden" name="id" value="<?= $a['ID'] ?>"/>
      <label>Nome</label>
      <input type="text" name="nome" value="<?= htmlspecialchars($a['Nome']) ?>" required/>
      <label>Idade</label>
      <input type="number" name="idade" value="<?= $a['Idade'] ?>"/>
      <label>Endereço</label>
      <input type="text" name="endereco" value="<?= htmlspecialchars($a['Endereco']) ?>"/>
      <label>Horário</label>
      <input type="time" name="horario" value="<?= $a['Horario_Aula'] ?>"/>
      <label>Cuidados Especiais</label>
      <select name="cuidados">
        <option value="0" <?= !$a['Cuidados_Especiais']?'selected':'' ?>>Não</option>
        <option value="1" <?= $a['Cuidados_Especiais']?'selected':'' ?>>Sim</option>
      </select>
      <button type="submit">Atualizar</button>
    </form>
  </div>
</body>
</html>
