<?php
// atualizar_aluno.php
session_start();
include 'conexao.php';

// Se não estiver logado, redireciona ao login
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}

// Recebe dados do formulário
$id      = (int) $_POST['id'];
$uid     = (int) $_SESSION['user_id'];
$nome    = $conn->real_escape_string($_POST['nome']);
$idade   = (int) $_POST['idade'];
$endereco= $conn->real_escape_string($_POST['endereco']);
$horario = $_POST['horario'];
$cuidados= isset($_POST['cuidados']) ? 1 : 0;

// Atualiza apenas se o aluno pertencer ao usuário logado
$sql = "
    UPDATE Aluno
    SET
      Nome = '$nome',
      Idade = $idade,
      Endereco = '$endereco',
      Horario_Aula = '$horario',
      Cuidados_Especiais = $cuidados
    WHERE ID = $id
      AND cadastrado_por = $uid
";

$conn->query($sql);

// Redireciona de volta para a lista
header('Location: lista_alunos.php');
exit;
?>
