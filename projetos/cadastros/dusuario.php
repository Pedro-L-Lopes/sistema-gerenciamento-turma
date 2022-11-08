
<?php
include("conecta.php");
$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = sha1($_POST['senha']);

$sql = " insert into usuarios (nome, email, usuario, senha)
values ('$nome', '$email', '$usuario', '$senha') ";
if(mysqli_query($conn, $sql)){
    echo "dados cadastrados com sucesso";
}else{
    echo "problemas ao caadastrar dados!";
}
?>
<meta http-equiv="refresh" content="3;usuario.php">