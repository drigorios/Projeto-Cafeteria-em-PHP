<!-- CONEXÃO BANCO DE DADOS MYSQLI -->

<?php 

$server='localhost';
$usuario='root';
$senha='';
$dbname='cafeteria';

    // MYSQLI
$conexao = mysqli_connect($server,$usuario,$senha,$dbname);

?>