
<?php
include("../conecta.php");
$nome = $_POST['nome'];
$matricula = $_POST['matricula'];
$telefone = $_POST['telefone'];

if(isset($_POST['id'])){
    $sql = " update aluno set nome = '$nome', telefone = '$telefone', matricula = '$matricula' where id = ". $_POST['id'];
}else{
   $sql = " insert into aluno (nome, matricula, telefone)
   values ('$nome', '$matricula', '$telefone') ";
}

if(mysqli_query($conn, $sql)){
    echo "dados cadastrados com sucesso";
}else{
    echo "problemas ao caadastrar dados!";
}
?>
<meta http-equiv="refresh" content="2;index.php">