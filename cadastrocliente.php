
<?php

//CONEXÃO DB
include 'conexao.php';


//end conect

//    VARIÁVEIS

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cpfcnpj = $_POST['cpfcnpj'];
$cep = $_POST['cep'];
$logradouro = $_POST['logradouro'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$uf = $_POST['uf'];
$cidade = $_POST['cidade'];
$arquivo = $_FILES['imagem'];
//



if($arquivo !== null) {
    preg_match("/\.(png|jpg|jpeg){1}$/i", $arquivo["name"],$ext);

    if($ext == true) {
        $nome_arquivo = md5(uniqid(time())) . "." . $ext[1];
        $caminho_arquivo = "imagens/".$nome_arquivo;
        move_uploaded_file($arquivo['tmp_name'],$caminho_arquivo);

        $sql = "INSERT INTO `cliente`(`nome`, `email`, `telefone`, `cpfcnpj`, `cep`, `logradouro`, `numero`, `complemento`, `bairro`, `cidade`, `uf`, `imagem`) VALUES ('$nome','$email','$telefone','$cpfcnpj','$cep','$logradouro','$numero','$complemento','$bairro','$cidade','$uf','$nome_arquivo')";

        $inserir = mysqli_query($conexao,$sql);

    }
}



//header('Location: cadastro_cliente.php?msg=1');
//exit()


?>




$sql = "INSERT INTO "

?>