<!-- CONEXÃO BANCO DE DADOS MYSQLI -->

<?php 

$server='localhost';
$username='root';
$password='';
$database='cafeteria';

    // MYSQLI
$conexao = mysqli_connect($server,$username,$password,$database);

?>