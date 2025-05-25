<?php
// Remove definitivamente o aluno
session_start();
include 'conexao.php';
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}
$id = (int)$_POST['id'];
$uid = (int)$_SESSION['user_id'];
// Garante que só apaga quem cadastrou
$conn->query("DELETE FROM Aluno WHERE ID=$id AND cadastrado_por=$uid");
header('Location: lista_alunos.php');
exit;
?>
