<?php
$host = 'localhost';
$user = 'root';
$pass = '12345678';
$db = 'cadastro';
//echo phpinfo();

 $conn = mysqli_connect($host, $user, $pass, $db, '3306');
if(!$conn){
    echo 'Probelemas com a conexão!!!';
}