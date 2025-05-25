<?php
include "conexao.php";
$error='';
if($_SERVER['REQUEST_METHOD']==='POST'){
    $email=$conn->real_escape_string($_POST['email']);
    $senha=md5($_POST['password']);
    $res=$conn->query("SELECT * FROM Motorista WHERE Email='$email' AND Senha='$senha'");
    if($res->num_rows===1){
        $_SESSION['user_id']=$res->fetch_assoc()['ID'];
        header('Location: lista_alunos.php');exit;
    } else $error='Email ou senha incorretos.';
}
?>
<!DOCTYPE html><html lang="pt-BR"><head><meta charset="UTF-8"/><meta name="viewport" content="width=device-width,initial-scale=1.0"/><title>Login</title><link rel="stylesheet" href="style.css"/></head><body>
<div class="container"><h2>Login</h2><?php if($error):?><p class="error"><?php echo $error;?></p><?php endif;?>
<form method="post">
<label>Email</label><input type="email" name="email" required/>
<label>Senha</label><input type="password" name="password" required/>
<button type="submit">Entrar</button>
</form>
<p>Não tem conta? <a href="cadastro_motorista.php">Cadastre-se</a></p></div>
</body></html>