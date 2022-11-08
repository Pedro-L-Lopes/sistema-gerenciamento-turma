<?php
include("../conecta.php");

$id = $_GET['user'];

$sql = 'delete from produtos where id = '.$id;

if(mysqli_query($conn, $sql)){
    echo "Produto excluído!!";
}else{
    echo "Não foi possível excluir";
}

?>

<meta http-equiv="refresh" content="3;produtos.php">