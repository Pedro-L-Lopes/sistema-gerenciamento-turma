
<?php
include("../conecta.php");
$descricao = $_POST['descricao'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$unidademedida =  $_POST['unidademedida'];
$preco =  $_POST['preco'];

if(isset($_POST['id'])){
    $sql = "update produtos set descricao = '$descricao', marca = '$marca', modelo = '$modelo', preco = '$preco' where id = ". $_POST['id'];
}
else{
    $sql = " insert into produtos (descricao, marca, modelo, unidademedida, preco)
    values ('$descricao', '$marca', '$modelo', '$unidademedida', '$preco') ";
}

// mysqli_query($conn, $sql) or die mysqli_error($conn);

if(mysqli_query($conn, $sql)){
    echo "dados cadastrados com sucesso";
}else{
    echo "problemas ao caadastrar dados!";
}
?>
<meta http-equiv="refresh" content="3;produtos.php">