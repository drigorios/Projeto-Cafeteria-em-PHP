
<?php

//CONEXÃO DB
include 'conexao.php';


//end conect

//    VARIÁVEIS

$nomeproduto = $_POST['nomeproduto'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$categoria = $_POST['categoria'];
$estoque = $_POST['estoque'];

//INSERT
            $sql = "INSERT INTO produtos (nomeproduto, descricao, preco, categoria, estoque ) VALUES ('$nomeproduto','$descricao','$preco','$categoria','$estoque')";

        $inserir = mysqli_query($conexao,$sql);
        
    



header('Location: formproduto.php?');
exit()


?>