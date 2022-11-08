<!doctype html>
<?php
            include "../conecta.php"; 

            $sql =  "Select * from aluno where id = ".$_GET['valor'];
            $usuarios = mysqli_query($conn, $sql, MYSQLI_ASSOC);
            $usuario = mysqli_fetch_assoc($alunos);
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
            width: 30%;
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
<form action="persistir.php" method="post">
    <div>
        <div class="rotulo">Nome</div><input class="fm" type="text" name="nome" id="nome">
    </div>
    <div>
        <div class="rotulo">Matrícula</div><input class="fm2" type="text" name="matricula" id="matricula">
    </div>
    <div>
        <div class="rotulo">Telefone</div><input class="fm2" type="text" name="telefone" id="telefone">
    </div>
    <div>
        <div class="rotulo"> <button type="submit">Enviar</button></div>
    </div>
 </form>
 
    <br clear="all" /> 
    
</body>
</html>