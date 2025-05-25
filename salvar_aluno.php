<?php
session_start();
include 'conexao.php';
if(!isset($_SESSION['user_id'])) header('Location: index.php');
$uid=(int)$_SESSION['user_id'];
$nome=$conn->real_escape_string($_POST['nome']);
$idade=(int)$_POST['idade'];
$endereco=$conn->real_escape_string($_POST['endereco']);
$escola=(int)$_POST['escola'];
$horario=$_POST['horario'];
$cuidados=isset($_POST['cuidados'])?1:0;
$conn->query("INSERT INTO Aluno (Nome,Idade,Endereco,Horario_Aula,Cuidados_Especiais,ID_Escola,cadastrado_por) VALUES('$nome',$idade,'$endereco','$horario',$cuidados,$escola,$uid)");
header('Location: lista_alunos.php');
?>