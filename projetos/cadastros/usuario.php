<!doctype html>
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
 <form action="cusuario.php" method="post">
    <div>
        <div class="rotulo">Nome</div><input class="fm" type="text" name="nome" id="nome">
    </div>
    <div>
        <div class="rotulo">Usuário</div><input class="fm2" type="text" name="usuario" id="usuario">
    </div>
    <div>
        <div class="rotulo">E-mail</div><input class="fm2" type="text" name="email" id="email">
    </div>
    <div>
        <div class="rotulo">Senha</div><input class="fm2" type="password" name="senha" id="senha">
    </div>
    <div>
        <div class="rotulo"> <button type="submit">Enviar</button></div>
    </div>
 </form>
 
    <br clear="all" /> 

    <table>
        <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Usuário</th>
            <th>E-mail</th>
            <th>Opções</th>
        </tr>
        </thead>
        <tbody>
            <?php
            include "conecta.php";
            $sql =  "Select * from usuarios order by nome";
            $usuarios = mysqli_query($conn, $sql, MYSQLI_ASSOC);

            foreach($usuarios as $usuario){
            ?>
            <tr>
                <td><?=$usuario['id']?></td>
                <td><?=$usuario['nome']?></td>
                <td><?=$usuario['usuario']?></td>
                <td><?=$usuario['email']?></td>
                <td> Excluir <?=$usuario['id']?> Editar <?=$usuario['id']?> </td>
            </tr>
            <?php }?>

        </tbody>
    </table>
    
</body>
</html>