<?php
include "conexao.php";
if(!isset($_SESSION['user_id'])) header('Location: index.php');
$noHeader=false; include "header.php";
$uid=(int)$_SESSION['user_id'];
$res=$conn->query("SELECT * FROM Aluno WHERE cadastrado_por=$uid");
?>
<!DOCTYPE html><html lang="pt-BR"><head><meta charset="UTF-8"/><meta name="viewport" content="width=device-width,initial-scale=1.0"/><title>Alunos</title><link rel="stylesheet" href="style.css"/><script>function confirmDel(id){if(confirm('Apagar?'))document.getElementById('del-'+id).submit();}</script></head><body>
<div class="container"><h2>Lista de Alunos</h2><table><tr><th>ID</th><th>Nome</th><th>Ações</th></tr><?php while($a=$res->fetch_assoc()): ?><tr><td><?=$a['ID']?></td><td><?=htmlspecialchars($a['Nome'])?></td><td><a href="ver_aluno.php?id=<?=$a['ID']?>">🔍</a> <a href="editar_aluno.php?id=<?=$a['ID']?>">🛠️</a> <form id="del-<?=$a['ID']?>" action="excluir_aluno.php" method="post" style="display:inline"><input type="hidden" name="id" value="<?=$a['ID']?>"></form> <button onclick="confirmDel(<?=$a['ID']?>)">🗑️</button></td></tr><?php endwhile;?></table></div></body></html>