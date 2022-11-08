<!doctype html>
<?php
            include "../conecta.php"; 

            $sql =  "Select * from produtos where id = ".$_GET['user'];
            $produtos = mysqli_query($conn, $sql, MYSQLI_ASSOC);
            $produto = mysqli_fetch_assoc($produtos);
            ?>
<html>
<head>
    <title>Formulários</title>  
    <meta charset="utf-8">
    <style>
        #resultado{
            width: 50%;
            height: 25px;
            border: solid 1px #00ffff;
            margin-top: 1%;
            margin-left: 2%;
        }
        .fm {
            width: 30%;
            height: 25px;
            border: solid 1px #00ffff;
            margin-top: 1%;
            margin-left: 2%;
        }
        .fm2 {
            width: 10%;
            height: 25px;
            border: solid 1px #00ffff;
            margin-top: 1%;
            margin-left: 2%;
        }
        table {
            border: solid 1px black;
            width: 100%;
        }
        td {
            border: solid 1px black;
        }
        td.ponteiro {
            cursor: pointer !important;
            text-align: center;
        }
        .rotulo {
            width: 10%;
            margin-left: 10%;
            margin-top: 1%;
            float: left;
        }
 
        .ponteiro {
            color: white;
            border-radius: 15px;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
            background: rgb(50, 63, 66);
        }
        body{
            margin-left: 5%;
            margin-right: 5%;
        }
    </style>
</head>
 
<body>
 <form action="cprodutos.php" method="post">
    <input type="hidden" name="id"  value="<?=$produto['id']?>">
    <div>
        <div class="rotulo">Produto</div><input class="fm" type="text" name="descricao" id="descricao"  value="<?=$produto['descricao']?>">
    </div>
    <div>
        <div class="rotulo">Marca</div><input class="fm2" type="text" name="marca" id="marca" value="<?=$produto['marca']?>">
    </div>
    <div>
        <div class="rotulo">Modelo</div><input class="fm2" type="text" name="modelo" id="modelo" value="<?=$produto['modelo']?>">
    </div>
    <div>
        <div class="rotulo">Unidade de Medida</div><input class="fm2" type="text" name="unidademedida" id="unidademedida" value="<?=$produto['unidademedida']?>">
    </div>
    <div>
        <div class="rotulo">Preço</div><input class="fm2" type="text" name="preco" id="preco" value="<?=$produto['preco']?>">
    </div>
    
    <div>
        <div class="rotulo"> <button type="submit">Enviar</button></div>
    </div>
 </form>
 
    <br clear="all" /> 
    
</body>
</html>